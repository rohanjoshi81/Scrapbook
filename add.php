<?php 
session_start();                         //SQLi secure
header('Location: home.php ');
$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123");
mysql_select_db("a4228986_scrap");
$user=$_SESSION["iuser"];
$pub=mysql_real_escape_string($_POST["pub"]);
$scrap=mysql_real_escape_string($_POST["scrap"]);
$query="insert into public (user,data,public) values ('$user','$scrap',$pub)";
mysql_query($query,$link);


?>