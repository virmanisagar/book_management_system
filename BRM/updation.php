<?php
	$size = sizeof($_POST);
	$records=$size/4;
	echo "Nuber of records : $records";
	
	for($i=1;$i<=$records;$i++){
		$index1="bookid".$i;
		$bookid[$i]=$_POST[$index1];

		$index1="title".$i;
		$title[$i]=$_POST[$index1];

		$index1="price".$i;
		$price[$i]=$_POST[$index1];

		$index1="author".$i;
		$author[$i]=$_POST[$index1];
	}
	$pass = "Mysql@1010";
	$con=mysqli_connect('mysql.hostinger.in','u326576888_root',$pass);
	mysqli_select_db($con,'u326576888_brm');
	for($i=1;$i<=$records;$i++){
		$q="update book SET title='$title[$i]', price=$price[$i], author='$author[$i]' where bookid=$bookid[$i]";
		mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Updation</title>
<head>
	<body>
		<h1>Book Record Management</h1>
		<a href="home.php">Home page</a><br>
		<p>
		<?php
			echo "Records updated";
		?>
		</p>
		<!-- Go back to home page<a href="home.php">click here</a> -->
	</body>
</html>