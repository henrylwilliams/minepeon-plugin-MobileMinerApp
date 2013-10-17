#!/bin/sh
echo -e "\n\n# cron jobs for MobileMinerApp add-on" >> /var/spool/cron/minepeon
echo "*/1 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php update" >> /var/spool/cron/minepeon
echo "*/2 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php check" >> /var/spool/cron/minepeon