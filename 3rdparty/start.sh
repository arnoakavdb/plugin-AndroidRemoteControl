#!/bin/bash

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "########### Lancement du service ##########"
echo `$sudo_prefix service arc-service-$1 start`
echo "########### Fin ##########"
