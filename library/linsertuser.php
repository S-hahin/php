<body>
<form action="library.php" method="POST">
<center>
<?php
	include 'conn.php';
	$bookid=$_POST['id'];
	$bookname=$_POST['name'];
	$bookauthor=$_POST['author'];
	$bookpublisher=$_POST['publisher'];
	$bookprice=$_POST['price'];
	$bookquantity=$_POST['quantity'];
$sql_1="INSERT INTO bdetails(book_id ,book_name,author,publisher,price,quantity) VALUES('$bookid','$bookname','$bookauthor','$bookpublisher','$bookprice','$bookquantity')";
	$result_1=mysqli_query($conn,$sql_1);
	if(!$result_1)
		{
		$msg="Error !!!".mysqli_error($conn);
		}
	else
		echo"Insertion Success!!!";
	mysqli_close($conn);
	
	?>
<br><br>	
<input type="submit" value="Homepage" name="btn">
</form>
</body>
</html>