<!DOCTYPE html>
<html>
 <head>
  <title>Insert Form </title>
  <link rel="stylesheet" href="./css/homeStyle.css">
  <link rel="stylesheet" href="./css/viewStyle.css">
 </head>
 <body>
  <h1> Book Record Management </h1>
  <ul id="hor_nav">
   <li><a href="insertForm.php">Insert Record</a></li>
   <li><a href="view.php">View Record</a></li>
   <li><a href="deleteForm.php">Delete Record</a></li>
   <li><a href="updateForm.php">Update Record</a></li>
  </ul>
  <form action="insertion.php" method="post">
   <table id="table_view">
    <tr>
	 <td> Title </td>
	 <td> <input type="text" name="title" required/></td>
	</tr>
	<tr>
	 <td> Price </td>
	 <td> <input type="text" name="price" required/></td>
	</tr>
	<tr>
	 <td> Author </td>
	 <td> <input type="text" name="author" /></td>
	</tr>
	<tr>
	 <td colspan="2"> <input type="submit" value="Insert Record" required/></td>
	</tr>
   </table>
  </form>
 </body>
</html>