<?php
	$pass = "Mysql@1010";
	$con=mysqli_connect('mysql.hostinger.in','u326576888_root',$pass);
	mysqli_select_db($con,'u326576888_brm');
	$q="SELECT * FROM book";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete book records</title>
<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
	<h1>Book Record Management</h1>
	<hr>
	<a href="home.php">Home page</a> | <a href="insertForm.php">Insert Book</a> | <a href="view.php">View Book Records</a> | <a href="deleteForm.php">Delete Book Records</a> | <a href="updateForm.php">Update Book Records</a><br>
	<hr>
	<p>
		If you think you have created some mistake by adding some books that are primitive to be added here, you can check the box to delete the desired book.<br>
	</p>
	<form action="deletion.php" method="post">
        <div style="overflow-x:auto;">
	<table id = "view_table">
	<tr>
		<th>Book ID</th>
		<th>Title</th>
		<th>Price</th>
		<th>Author</th>
		<th>Select to delete</th>
	</tr>
	<?php
		for($i=1;$i<=$num;$i++){
			$row=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $row['bookid']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['author']; ?></td>
		<td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i; ?>"/></td>
	</tr>
	<?php
		}
	?>
	<tr>
		<td = colspan="5"><input type="submit" value="Delete"/></td>
	</table>
        </div>
	</form>
</body>
<hr>
BRM &copy; 2017
<hr>
</html>