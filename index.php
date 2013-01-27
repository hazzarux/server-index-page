<html>
<head>
<title><?php system('hostname'); ?> # index</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<h1>ADMINISTRATION PAGE FOR <?php system('hostname'); ?></h1>
<h2>AUTHORIZED ACCESS ONLY. SERVER LOGS ARE MONITORED.</h2>
<center>Robots, please get the hell out!</center><br/>

<h1>
<!-- <center><a href=https://(omit).dyndns.org/jinzora2> Jinzora2 Music Server </a><br></center>
<center><a href=https://(omit).dyndns.org/squirrelmail> SquirrelMail Email System </a><br></center>
<center><a href=https://(omit).dyndns.org:10000/> Webmin Online Administration Console </a><br></center> -->
</h1>


<body>
<center><table><tr><td>
<pre>
<b>Uptime:</b> 
<?php system("uptime"); ?>

<b>Kernel Information:</b>
<?php system("uname -a"); ?>

<b>System Information:</b>
<?php system("lsb_release -a"); ?>

<b>Memory Usage (MB):</b> 
<?php system("free -t -m"); ?>

<b>Disk Usage:</b> 
<?php system("df -h | grep /dev/sd"); ?>

<b>Mounted Filesystems:</b>
<?php system("di"); ?>

<b>CPU Information:</b> 
<?php system("cat /proc/cpuinfo | grep \"vendor_id\\|\model name\\|cpu MHz\\|bogomips\""); ?>
</pre>
</td></tr></table></center>

<!-- <center><h3>Report bugs <a href="mailto:ussr@(omit).dyndns.org"> here </a></h3></center> -->
<h2><a href='http://www.mithral.com/~beberg/manifesto.html'>Get inspiration from the mentor.</a></h2>


<meta http-equiv="refresh" content="30">
</body>
</html>
