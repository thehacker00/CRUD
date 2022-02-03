<?php 
//To display Product (Admin side)
include "connection.php";

$q = "select * from products"; 
$res=mysqli_query($con,$q);

?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<div align="center">
     <table style="font-family: 'Josefin Slab', serif;" class="table table-dark table-hover" border="1" align="center">
        <th colspan="8"><h2 align="center">PRODUCT LIST</h2>
        <button onclick="document.location='add.php'">Add Product</button>
         </th>
      <tr>
    	<th> <div align="center">Product Name</div></th>
      	<th><div align="center">Price</div></th>
	  	<th ><div align="center">Discription </div></th>
        <th ><div align="center">Category </div></th>
      	<th width="20%" > <div align="center">Image </div></th>
        <th ><div align="center">Action </div></th>
  	  </tr>
</div>


  <?php 
   
   while($rows=mysqli_fetch_assoc($res)) 
		{ 
		?>
  <tr>
   
    <td height="95"><div align="center"><?php echo $rows['p_name']; ?></div></td>
	<td><div align="center"><?php echo $rows['price']; ?></div></td>
    <td><div align="center"><?php echo $rows['discription']; ?></div></td>
    <td><div align="center"><?php echo $rows['category']; ?></div></td>
    <td><div align="center">
      <p><img  src="./bootstrap/img/<?php echo $rows['image']; ?>" width="150px" height="130px"></p>
      </div></td>
      <div align="center">
      <?php 
        echo "<Td><a href='edit.php?p_id=".$rows['p_id']."'' style='color:green'>Edit</a></td>";
        echo "<Td><a href='delete.php?p_id=".$rows['p_id']."'' style='color:red'>Delete</a></td>";
      ?>
     </div>
  </tr>
  <?php 
               } 
          ?>
    </table>
    <p>&nbsp;</p>