<html>
<body>
<form action="home1.php" method="post">
<center>
<?php
include 'conn.php';
$usrname=$_POST['username'];
$sql_1="INSERT INTO user(name) VALUES('$usrname')";
$result_1=mysqli_query($conn,$sql_1);
if(!$result_1)
{
$msg="Error!!!".mysqli_error($conn);
}
else
echo "Insertion Success!!";
mysqli_close($conn);
?> 
<br><bR>
<input type="submit" value="Home Page" name="btn">
</form>
</body>
</html>