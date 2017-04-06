<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Insertion form</title>
</head>
<body>
	<h1>Book Record Management</h1>
	<hr>
	<a href="home.php">Home page</a> | <a href="insertForm.php">Insert Book</a> | <a href="view.php">View Book Records</a> | <a href="deleteForm.php">Delete Book Records</a> | <a href="updateForm.php">Update Book Records</a><br>
	<hr>
	<p>
		This option provides you the opportunity to add as many as books you like. Later you can view everything on View Book Records.<br>
	</p>
	<form action ="insertion.php" method="post">
		<table>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required/></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required/></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author"/></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Insert"/></td>
			</tr>
		</table>
	</form>
</body>
<hr>
BRM &copy; 2017
<hr>
</html>