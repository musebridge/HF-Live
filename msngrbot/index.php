<?php

$verify_token = ""; // Verify token
$token = ""; // Page token

if (file_exists(__DIR__.'/config.php')) {
    $config = include __DIR__.'/config.php';
    $verify_token = $config['verify_token'];
    $token = $config['token'];
}

require_once(dirname(__FILE__) . '/vendor/autoload.php');

use pimax\FbBotApp;
use pimax\Messages\Message;
use pimax\Messages\ImageMessage;
use pimax\UserProfile;
use pimax\Messages\MessageButton;
use pimax\Messages\StructuredMessage;
use pimax\Messages\MessageElement;
use pimax\Messages\MessageReceiptElement;
use pimax\Messages\Address;
use pimax\Messages\Summary;
use pimax\Messages\Adjustment;

// Make Bot Instance
$bot = new FbBotApp($token);

// Receive something
if (!empty($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] == 'subscribe' && $_REQUEST['hub_verify_token'] == $verify_token) {
    // Webhook setup request
    echo $_REQUEST['hub_challenge'];
} else {

    // Other event

    $data = json_decode(file_get_contents("php://input"), true, 512, JSON_BIGINT_AS_STRING);
    if (!empty($data['entry'][0]['messaging'])) {
        foreach ($data['entry'][0]['messaging'] as $message) {

            // Skipping delivery messages
            if (!empty($message['delivery'])) {
                continue;
            }

            $command = "";
	
			//$bot->send(new Message($message['sender']['id'], 'This is a simple text message.'));
            // When bot receive message from user
            if (!empty($message['message'])) {
                $command = $message['message']['text'];

            // When bot receive button click from user
            } else if (!empty($message['postback'])) {
                $command = $message['postback']['payload'];
            }

            // Handle command
			if (strlen($command)>2 && strlen($command)<50) {	
			
					$bot->send(new Message($message['sender']['id'], 'Searching for "'.$command.'" in HungryForever.com'));
					
				switch ($command) {					
					// When bot receive "text"
					case 'text':
						//$bot->send(new Message($message['sender']['id'], 'This is a simple text message.'));
						break;
					// When bot receive "image"
					case 'image':
						
						break;
						
					// Other message received
					default:

					$str = str_replace(' ', '%20', $command);
				$serializedResult = file_get_contents('http://139.162.63.178:8983/solr/hf/select/?q='.$str.'&wt=phps&rows=5&fq=popularity');
				$results = unserialize($serializedResult);
					
					if ($results['response']['numFound'] > 0) {
						foreach ($results['response']['docs'] as $result) {
							//$bot->send(new Message($message['sender']['id'], $result['title'][0].' Read more '.$result['permalink'][0]));
							//$bot->send(new Message($message['sender']['id'], $result['title'].' Read more '.$result['permalink']));
						$bot->send(new StructuredMessage($message['sender']['id'],
								StructuredMessage::TYPE_GENERIC,
								[
									'elements' => [
										new MessageElement($result['title'], "", "", [
											new MessageButton(MessageButton::TYPE_WEB, 'Read Now', $result['permalink'])
														])
													]
											]
										));
										
						}
						
						$bot->send(new Message($message['sender']['id'], 'Need more results ?'));

						$bot->send(new StructuredMessage($message['sender']['id'],
								StructuredMessage::TYPE_GENERIC,
								[
									'elements' => [
										new MessageElement("Search for '".$command."' in HungryForever.com", "", "", [
											new MessageButton(MessageButton::TYPE_WEB, 'Search', 'https://www.hungryforever.com/search-wpsolr/?search='.$str)
														])
													]
											]
										));
					}
					else
					{
						$bot->send(new Message($message['sender']['id'], 'Sorry. Your search didnt yield any results.'));
					}
				}
			}
        }
    }
}