#!/bin/bash
if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "########### Reset ##########"
echo Arrêt des services en cours :
echo `ls /etc/init.d/arc-service-*`
echo `$sudo_prefix service arc-service-* stop`
echo `$sudo_prefix service arc-service-* status`
echo `$sudo_prefix adb kill-server`
echo `$sudo_prefix rm /tmp/5037`

echo Pensez à activer à nouveau vos services
echo en sauvegardant les configurations que vous souhaitez relancer parmi :
echo `ls /etc/init.d/arc-service-*`
for services in /etc/init.d/arc-service-*; do
  $sudo_prefix $services start
done;

echo "########### Fin ##########"
