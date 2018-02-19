#!/bin/bash
if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
cd "$(dirname "$0")"
echo "############################################################################"
echo "# Create/Update arc-service-$1 for this device"
echo "############################################################################"
if [ -f /etc/init.d/arc-service-$1 ]; then
    echo "Service already exist for $1, replace it"
    $sudo_prefix service arc-service-$1 stop
    $sudo_prefix update-rc.d -f arc-service-$1 remove
    $sudo_prefix rm -Rf /etc/init.d/arc-service-$1
fi;
$sudo_prefix cp arc-service /etc/init.d/arc-service-$1

$sudo_prefix sed -i "s|\@\@name\@\@|$1|g" /etc/init.d/arc-service-$1
$sudo_prefix sed -i "s|\@\@address\@\@|$2|g" /etc/init.d/arc-service-$1
$sudo_prefix chmod +x /etc/init.d/arc-service-$1
$sudo_prefix update-rc.d arc-service-$1 defaults
$sudo_prefix systemctl daemon-reload

echo "############################################################################"
echo "# Connect android device"
echo "############################################################################"
$sudo_prefix service arc-service-$1 start

echo "############################################################################"
echo "# Create/Update arc-service-$1 finnished"
echo "############################################################################"
