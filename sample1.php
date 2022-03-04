<html>
<body>
<?php
include "sconn.php";
?>
<form method="POST">
name:
<input type="text" name="a">
<br>AGE:<input type="text" name="b">
<br>pass:<input type="password" name="c">
<br><input type="submit" value="submit" name="submit">
</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
		$name=$_POST["a"];
		$age=$_POST["b"];
		$pass=$_POST["c"];
		$sql=insert into data values("$name","$age","$pass");
		mysqli_query($conn,$sql);
	}
?>
