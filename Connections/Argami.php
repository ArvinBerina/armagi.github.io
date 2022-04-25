<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Argami = "localhost";
$database_Argami = "armagi";
$username_Argami = "root";
$password_Argami = "";
$Argami = mysql_pconnect($hostname_Argami, $username_Argami, $password_Argami) or trigger_error(mysql_error(),E_USER_ERROR); 
?>