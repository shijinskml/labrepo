<?php
$conn=mysqli_connect("localhost","root","","book");
if(!$conn)
die("connection failed".mysqli_connect_error());
else
echo "connected";
?>