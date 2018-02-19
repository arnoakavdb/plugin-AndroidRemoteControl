#!/bin/bash

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "########### Arrêt du service ##########"
echo `$sudo_prefix service arc-service-$1 stop`
echo "########### Fin ##########"
