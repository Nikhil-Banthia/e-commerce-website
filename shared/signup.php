<?php
 
$conn=new mysqli("localhost","root","","signup",3306);
mysqli_query($conn,"insert into user(username,password,usertype) values('$_POST[username]','$_POST[password1]','$_POST[usertype]')");
?>