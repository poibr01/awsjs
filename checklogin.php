<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="CAdemo123"; // Mysql password
$db_name="awsjs"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>

root@lamp /var/www# <?php
-bash: ?php: No such file or directory
root@lamp /var/www#
ob_start();
$host="localhost"; // Host name
root@lamp /var/www# ob_start();
-bash: syntax error near unexpected token `;'
$username="root"; // Mysql username
$password="CAdemo123"; // Mysql password
$db_name="awsjs"; // Database name
$tbl_name="members"; // Table name
root@lamp /var/www# $host="localhost"; // Host name
-bash: =localhost: command not found
-bash: //: is a directory

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

root@lamp /var/www# $username="root"; // Mysql username
-bash: =root: command not found
-bash: //: is a directory
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
root@lamp /var/www# $password="CAdemo123"; // Mysql password
-bash: =CAdemo123: command not found
-bash: //: is a directory
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
root@lamp /var/www# $db_name="awsjs"; // Database name
-bash: =awsjs: command not found

// If result matched $myusername and $mypassword, table row must be 1 row
-bash: //: is a directory
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
root@lamp /var/www# $tbl_name="members"; // Table name
-bash: =members: command not found
?>-bash: //: is a directory
root@lamp /var/www#
root@lamp /var/www# // Connect to server and select databse.
-bash: //: is a directory
root@lamp /var/www# mysql_connect("$host", "$username", "$password")or die("cannot connect");
-bash: syntax error near unexpected token `"$host",'
root@lamp /var/www# mysql_select_db("$db_name")or die("cannot select DB");
-bash: syntax error near unexpected token `"$db_name"'
root@lamp /var/www#
root@lamp /var/www# // Define $myusername and $mypassword
-bash: //: is a directory
root@lamp /var/www# $myusername=$_POST['myusername'];
-bash: =[myusername]: command not found
root@lamp /var/www# $mypassword=$_POST['mypassword'];
-bash: =[mypassword]: command not found
root@lamp /var/www#
root@lamp /var/www# // To protect MySQL injection (more detail about MySQL injection)
-bash: syntax error near unexpected token `('
root@lamp /var/www# $myusername = stripslashes($myusername);
-bash: syntax error near unexpected token `('
root@lamp /var/www# $mypassword = stripslashes($mypassword);
-bash: syntax error near unexpected token `('
root@lamp /var/www# $myusername = mysql_real_escape_string($myusername);
-bash: syntax error near unexpected token `('
root@lamp /var/www# $mypassword = mysql_real_escape_string($mypassword);
-bash: syntax error near unexpected token `('
root@lamp /var/www# $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
-bash: =SELECT * FROM  WHERE username='' and password='': command not found
root@lamp /var/www# $result=mysql_query($sql);
-bash: syntax error near unexpected token `$sql'
root@lamp /var/www#
root@lamp /var/www# // Mysql_num_row is counting table row
-bash: //: is a directory
root@lamp /var/www# $count=mysql_num_rows($result);
-bash: syntax error near unexpected token `$result'
root@lamp /var/www#
root@lamp /var/www# // If result matched $myusername and $mypassword, table row must be 1 row
-bash: //: is a directory
root@lamp /var/www# if($count==1){
-bash: syntax error near unexpected token `{'
root@lamp /var/www#
root@lamp /var/www# // Register $myusername, $mypassword and redirect to file "login_success.php"
-bash: //: is a directory
root@lamp /var/www# session_register("myusername");
-bash: syntax error near unexpected token `"myusername"'
root@lamp /var/www# session_register("mypassword");
-bash: syntax error near unexpected token `"mypassword"'
root@lamp /var/www# header("location:login_success.php");
-bash: syntax error near unexpected token `"location:login_success.php"'
root@lamp /var/www# }
-bash: syntax error near unexpected token `}'
root@lamp /var/www# else {
-bash: syntax error near unexpected token `else'
root@lamp /var/www# echo "Wrong Username or Password";
Wrong Username or Password
root@lamp /var/www# }
-bash: syntax error near unexpected token `}'
root@lamp /var/www# ob_end_flush();
-bash: syntax error near unexpected token `;'
root@lamp /var/www# ?>^C
root@lamp /var/www# cls
-bash: cls: command not found
root@lamp /var/www# clear
root@lamp /var/www# cat checklogin.php
<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="CAdemo123"; // Mysql password
$db_name="awsjs"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>
