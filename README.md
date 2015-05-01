SaltStackWebView
=======

Requirements:

  * SaltStack Master
  * SaltStack Slave(s)
  * Web Server with PHP Support

Features:
    * Current Time (Page automatically refreshes)
    * View Connected Nodes
    * View Node Stats
    * View Node IPs

Setting SaltStackWebView up on your Saltstack Master
=======

 ### Cron

 Place salt.sh in your user directory.

 Type `crontab -e` and add this at the end:
 `* * * * * /root/salt.sh` (change root to the directory you placed salt.sh into)


 ### Set up web frontend

 Make sure your web server with PHP Support is running.
 Copy the www folder to your /var/www web directory folder.

 ### Done!

 Browse to http://yourip/ and everything will work!

Licensed under a Creative Commons Attribution-NoDerivatives 4.0 International License. (http://creativecommons.org/licenses/by-nd/4.0/)
