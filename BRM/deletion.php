<?php
	$size=sizeof($_POST); // $_POST is associative array, so in the function it's name is passed
	$j=1;
	for($i=1;$i<=$size;$i++,$j++){
		$index="b".$j; // concatenate
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index];
		else
			$i--;
	}
	$pass = "Mysql@1010";
	$con=mysqli_connect('mysql.hostinger.in','u326576888_root',$pass);
	mysqli_select_db($con,'u326576888_brm');

	for($k=1;$k<=$size;$k++){
		$q="delete from book where bookid=".$b_id[$k];
		mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deletion</title>
<head>
	<body>
		<h1>Book Record Management</h1>
		<a href="home.php">Home page</a><br>
		<p>
		<?php
			echo $size." records deleted";
		?>
		</p>
		<!-- Go back to home page<a href="home.php">click here</a> -->
	</body>
</html>