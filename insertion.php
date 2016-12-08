<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'brm_dm');

$q="insert into book(title,price,author)
    values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
     mysqli_close($con);
	 ?>
<DOCTYPE html>
<html>
<head>
<title>insert form</title>
</head>
<body>
<h1>Book Record Management</h1>
<p><?php if($status=1)
	echo "Record is inserted";
else
	echo "Insertion failed";
?>
</p>
Do you want to insert more record?<a href="insertform.php">click here</a:
</body>
</html>