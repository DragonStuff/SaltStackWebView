date > /var/www/saltdate.txt
salt '*' test.ping > /var/www/saltstatus2.txt
cp /var/www/saltstatus2.txt /var/www/saltstatus.txt
salt '*' disk.percent > /var/www/saltdisk2.txt
cp /var/www/saltdisk2.txt /var/www/saltdisk.txt
salt '*' network.ip_addrs > /var/www/saltip2.txt
cp /var/www/saltip2.txt /var/www/saltip.txt
salt '*' status.uptime > /var/www/saltuptime2.txt
cp /var/www/saltuptime2.txt /var/www/saltuptime.txt
