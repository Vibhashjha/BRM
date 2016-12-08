<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_dm');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
<head>
<title>update page</title>
<link rel="stylesheet" href="viewstyle.css"/>
</head>
<body>
<h1>Book Record Management</h1>
<form action="updation.php" method="post">
<table id="view_table">
<th>bookid</th>
<th>title</th>
<th>price</th>
<th>author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['bookid'];?><input type="hidden" name="bookid<?php echo $row['bookid'];?>" value="<?php echo $row['bookid'];?>"/></td>

<td><input type="text" name="title<?php echo $row['title'];?>" value="<?php echo $row['title'];?>"/></td>
<td><input type="text" name="price<?php echo $row['price'];?>" value="<?php echo $row['price'];?>"/></td>
<td><input type="text" name="author<?php echo $row['author'];?>" value="<?php echo $row['author'];?>"/></td>
</tr>
<?php
}
?>
</table>
<input type="submit" value="update"/>
</form>
</body>
</html>