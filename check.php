<?php 
session_start();              //SQLi secure
//print "$user "; 	
$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123") or die("Sorry :( Connection Error");
mysql_select_db("a4228986_scrap") or die("Sorry :( Connection Error");
$user=mysql_real_escape_string($_POST["user"]);
$pass=mysql_real_escape_string($_POST["pass"]);
//if(isset($user) && isset($pass))
$query="Select * from userpass where user='$user' and pass='$pass'";
$result=mysql_query($query);
//$row = mysql_fetch_assoc($result); 
$count=mysql_num_rows($result);
print "$count";
print "$pass";
if($count==1)
{
//if($row['pass']==$pass)
//echo "Login Success";
$_SESSION['iuser']=$user;
$_SESSION['sid']=0;
header('Location: home.php ');

}
else
{
echo "Login Fail";
$_SESSION['log']=fail;
header('Location: index.php ');
}
?>