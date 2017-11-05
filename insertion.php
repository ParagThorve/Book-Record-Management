<?php
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];

 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con,'brm_db');

 $q= "insert into book (name,price,author) values ('$title',$price,'$author')";
 $status=mysqli_query($con,$q);

 mysqli_close($con);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Insertion </title>
 </head>
 <body>
  <h1> Book Record Management </h1>
  <p><?php
      if($status==1)
		  echo "Record inserted";
	  else
		  echo "Record insertion failed";
	 ?>
  </p>
  <p> Do you want insert more record? <a href="insertForm.php">click here</a></p>
  <p> To View Records <a href="view.php">click here</a></p>  
 </body>
</html>