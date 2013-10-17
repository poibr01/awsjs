<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
<H1>EC2 Jumpstart</H1>

</body>
</html>
