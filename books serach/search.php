<?php
	
include "connect.php";
?>
<html>
<body>
<form method="POST" >
book name<input type="text" name="e"><br>
author name<input type="text" name="f"><br>
<input type="submit" name="search" value="search">
</form>
</body>
</html>
<?php
if(isset($_POST["search"]))
{
	$bname=$_POST["e"];
	$auname=$_POST["f"];
	$sql="select * from bdetail where title='$bname' and author='$auname'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result))
{
	while($row=mysqli_fetch_assoc($result))
{
echo '<table><tr><td>'.$row["id"].'</td><td>'.$row["title"].'</td><td>'.$row["author"].'</td><td>'.$row["edition"].'</td></tr></table>';
}}
}
?>