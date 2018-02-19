#!/bin/bash
cd "$(dirname "$0")"

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "############################################################################"
echo "# Remove arc-service-$1 for this device"
echo "############################################################################"
if [ -f /etc/init.d/arc-service-$1 ]; then
    echo "############################################################################"
    echo "# Disconnect android device"
    echo "############################################################################"
    $sudo_prefix service arc-service-$1 stop
    $sudo_prefix service arc-service-$1 kill
    $sudo_prefix update-rc.d arc-service-$1 remove
    $sudo_prefix systemctl daemon-reload
    $sudo_prefix rm -Rf /etc/init.d/arc-service-$1
fi;
echo "############################################################################"
echo "# Remove arc-service-$1 finnished"
echo "############################################################################"
