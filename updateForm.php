<?php

 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con,'brm_db');

 $q= "select * from book";
 $result=mysqli_query($con,$q);

 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Update Form </title>
  <link rel="stylesheet" href="./css/viewStyle.css">
  <link rel="stylesheet" href="./css/homeStyle.css">
 </head>
 <body>
  <h1> Book Record Management</h1>
  <ul id="hor_nav">
   <li><a href="insertForm.php">Insert Record</a></li>
   <li><a href="view.php">View Record</a></li>
   <li><a href="deleteForm.php">Delete Record</a></li>
   <li><a href="updateForm.php">Update Record</a></li>
  </ul>
  <form action="updation.php" method="post">
  <table id="table_view">
   <tr>
    <th>Book ID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Author</th>
   </tr>
   <?php
    for($i=1;$i<=$num;$i++)
	{	
	 $row=mysqli_fetch_array($result);
   ?>
    <tr>
	 <td><?php echo $row['bookid'];?>
	     <input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid'];?>" />
	  </td>
	 <td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['name'];?>" /></td>
	 <td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price'];?>" /></td>
	 <td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author'];?>" /></td>
	</tr>
   <?php   
	}
   ?>
   <tr>
     <td colspan="5"><input type="submit" value="Update Records" /></td>
   </tr>
  </table>
  </form>
 </body>
</html>