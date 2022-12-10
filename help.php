<?php
$conn = mysqli_connect("localhost","root","");

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];
$Confirm = $_POST['Confirm'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];

$req = "insert into login values ('$name' ,'$last', '$email', '$Confirm' ,'$dd','$mm','$yy') "; 
$res = mysql_query($req) ;

?>