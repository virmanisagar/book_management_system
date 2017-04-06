<?php
	$title=$_POST['title'];
	$price=$_POST['price'];
	$author=$_POST['author'];

	$pass = "Mysql@1010";
	$con=mysqli_connect('mysql.hostinger.in','u326576888_root',$pass);
	mysqli_select_db($con,'u326576888_brm');
	$q="INSERT INTO book (title,price,author) values ('$title',$price,'$author')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insertion</title>
<head>
	<body>
	<h1>Book Record Management</h1>
	<a href="home.php">Home page</a><br>
	<p>
	<?php
		if($status==1)
			echo "Record inserted";
		else
			echo "Insertion Failed";
	?>
	</p>
	Do you want to insert more record? <a href="insertForm.php">click here</a>
	</body>
</html>