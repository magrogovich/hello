<?php
$conn = mysqli_connect("localhost","root","");
$email = $_POST['email'] ;
$req = "insert into sin values('$email')";
$res = mysql_query($res);


?>