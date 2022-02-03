<?php

include "connection.php";
if(count($_POST)>0) {
$category=$_POST["category"];
$res = mysqli_query($con,"SELECT * FROM products where category='$category' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<table style="font-family: 'Josefin Slab', serif;" class="table table-dark table-hover" border="1" align="center">
        <th colspan="6"><h2 align="center">PRODUCT LIST</h2>
       
         </th>
      <tr>
    	<th> <div align="center">Product Name</div></th>
      	<th><div align="center">Price</div></th>
	  	<th ><div align="center">Discription </div></th>
        <th ><div align="center">Category </div></th>
      	<th width="20%" > <div align="center">Image </div></th>
       
  	  </tr>
</div>


  <?php 
   $i=0;
   while($rows=mysqli_fetch_assoc($res)) 
		{ 
		?>
  <tr>
   
    <td height="95"><div align="center"><?php echo $rows['p_name']; ?></div></td>
	<td><div align="center"><?php echo $rows['price']; ?></div></td>
    <td><div align="center"><?php echo $rows['discription']; ?></div></td>
    <td><div align="center"><?php echo $rows['category']; ?></div></td>
    <td><div align="center">
      <p><img  src="./bootstrap/img/<?php echo $rows['image']; ?>" width="200px" height="100px"></p>
      </div></td>
     
  </tr>
  <?php 
        $i++;
     } 
          ?>
    </table>