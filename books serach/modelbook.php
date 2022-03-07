<?php
 include "connect.php";
if(isset($_POST["submit"]))
{
	$title=$_POST['a'];
	$author=$_POST['b'];
	$edition=$_POST['c'];
	$pub=$_POST['d'];
	$sql="insert into bdetail (title,author,edition,pub) values('$title','$author','$edition','$pub')";
	$s=mysqli_query($conn,$sql);
if($s)
echo '<script>alert("insertd data");</script>';
}
?>
<html>
<body>
<form method="POST" action="modelbook.php">
title:<input type="text" name="a"><br>
author:<input type="text" name="b"><br>
Edition:<input type="text" name="c"><br>
publisheer:<input type="text" name="d"><br>
<input type="submit" name="submit" value="submit">
<form>
</body>
</html>

