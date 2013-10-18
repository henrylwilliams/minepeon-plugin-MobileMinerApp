MinePeon Addons
==============
I'm working on getting other add-on's I've created moved into this repo with an installation script for each add-on; If there are add-ons you would like to see in the future, please let me know.

What is MinePeon?
==============
MinePeon is a linux distribution based off of Arch Linux for the RaspberryPi (http://raspberrypi.org); MinePeon was created by TheMineForeman. For more information relating to the MinePeon project including downloads & user forums, please go here http://minepeon.com/.

If you enjoy using MinePeon, I suggest you give a small donation for TheMineForman to support his efforts with the project, information about donations to the project can be found here http://minepeon.com/index.php/Donate/.


Available Add-ons
==============
###MobileMinerApp Addon
The MobileMiner apps allow you to remotely monitor and control your Bitcoin, Litecoin, and other Cryptocoin mining rigs. Setup is simple and there are no firewall changes or port-forwarding required. Created by Nathanial Woolls, more information regarding MobileMinerApp can be found here, http://mobileminerapp.com. 

######Instructions to install MobileMinerApp add-on for MinePeon:
  
```
cd /opt/minepeon/http/

git clone https://github.com/labmixz/MinePeonAddons.git addons

sudo php /opt/minepeon/http/addons/mma/mmaInstall.php [mma_email] [mma_appkey] [optional_machine_name]
```

######Example:

```sudo /usr/bin/php /opt/minepeon/http/addons/mma/mmaInstall.php me@tk1337.com kEyA-KeYb-kEyC testPeon```


To sign up for your appKey go to http://www.mobileminerapp.com

=============


####Donations to support the creation of add-ons and/or custom add-ons
If you care to support my work, you may make BTC donations to 1abmixLxtnE8zfxZcHFoP2vKusc3Y2E6e

If you would to have a custom add-on for MinePeon, please feel free to email me@tk1337.com
