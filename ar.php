
<?php
$conn = mysqli_connect("localhost","root","");
$ar = $_POST['help']; 
$req = "insert into Health values('$ar') "; 
$res = mysql_query($req);


	?>