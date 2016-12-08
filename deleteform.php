<?php
$con=mysqli_connect('localhost', 'root');
mysqli_select_db($con,'brm_dm');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Record</title>
<link rel="stylesheet" href="viewstyle.css"/>
</head>
<body>
<h1>Book Record Management</h1>
<form action="deletion.php" method="post">
<table id="view_table">
<tr>
<th>Bookid</th>
<th>Title</th>
th>Price</th>
<th>Author</th>
<th>Select to delete</th>
</tr>
<?php
for($i=1;$i<=$num; $i++)
{
	$row=mysqli_fetch_array($result);
	?>
	<tr>
	<td><?php echo $row['bookid'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><?php echo $row['author'];?></td>
	<td><input type="checkbox" name="b<?php echo $i;?>"/></td>
	</tr>
	<?php
}
	?>
	<tr>
	<td><input type="submit" value="Delete"/></td>
	</tr>
	</form>
	</table>
	</body>
	</html>
