PID=/var/run/hhvm/pid
if [ ! -f $PID ]; then
        date
        echo "Starting HHVM..."
        service hhvm restart
fi