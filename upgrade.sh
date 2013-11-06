#!/bin/bash

echo "$c2            _                                   "
echo "$c2           (_)                                  "
echo "$c2  _ __ ___  _ _ __   ___ _ __   ___  ___  _ __  "
echo "$c2 |  _   _ \| |  _ \ / _ \  _ \ / _ \/ _ \|  _ \ "
echo "$c2 | | | | | | | | | |  __/ |_) |  __/ (_) | | | |"
echo "$c2 |_| |_| |_|_|_| |_|\___|  __/ \___|\___/|_| |_|"
echo "$c2                        | |                     "
echo "$c2                        |_|MobileMinerApp Plugin"
echo "$c2                            by Henry W. (tk1337)"
echo
echo "This will UPGRADE the MobileMinerApp plugin for MinePeon."
echo "It will require sudo access to upgrade the plugin and ask"
echo "you for your password."
echo
echo "** This will assume you already have a successful installation"
echo "of the plugin and will not ask for your Email or AppKey if you"
echo "need to enter your Email & AppKey for settings, stop this and"
echo "run ./install.sh instead. **"
echo

read -p "Continue upgrading MobileMinerApp plugin? [y/n]" -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
  

  sudo cp mobileminerapp.inc.php /opt/minepeon/http/mma/mobileminerapp.inc.php
  sudo cp run.php /opt/minepeon/http/mma/run.php
  
  v=$(sed 's/[^0-9]//g' /opt/minepeon/etc/version)
  if [ "$v" -ge "024" ]
  then
    sudo cp MMAUpdate /opt/minepeon/etc/cron.d/1min/MMAUpdate
    sudo cp MMACmdCheck /opt/minepeon/etc/cron.d/2min/MMACmdCheck
  fi
  
  rm -f mobileminerapp.inc.php
  rm -f MMAUpdate
  rm -f MMACmdCheck
  rm -f /opt/minepeon/http/mma/run.php
  
  echo
  echo
  echo "If no errors appeared, installation was successful!"
  echo 
fi
