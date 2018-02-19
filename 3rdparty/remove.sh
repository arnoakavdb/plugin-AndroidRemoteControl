#!/bin/bash
if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "########### Suppression en cours ##########"
echo "############################################################################"
echo "# Removing all arc-service"
echo "############################################################################"
$sudo_prefix service arc-service-* stop
$sudo_prefix update-rc.d arc-service-* remove
$sudo_prefix systemctl daemon-reload


echo "############################################################################"
echo "# Remove packages and dependencies"
echo "############################################################################"
$sudo_prefix apt-get -y remove android-tools-adb

echo "############################################################################"
echo "# Remove all plugin configuration files"
echo "############################################################################"
$sudo_prefix rm -Rf /etc/init.d/arc-service-*

$sudo_prefix rm -Rf /tmp/AndroidRemoteControl_dep

echo "########### Fin ##########"
