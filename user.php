<html>
<head>
<!-- User side page -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<!-- Search product by name -->
<div class="container">
  <form class="form-inline" method="post" action="search.php">
    <input type="text" name="p_name" class="form-control" placeholder="Search product name..">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
<!-- Filter product by category -->
<div class="container">
     <form class="form-inline" method="post" action="filter.php">
     <div class="select" >
         <select id="slct" name="category" class="form-control">
              <option disabled selected>&nbsp;&nbsp;-- Select Category --</option>
              <?php
                 include "connection.php";  
                 $records = mysqli_query($con, "SELECT category From categories");  

                 while($data = mysqli_fetch_array($records))
                  {
                    echo "<option value='". $data['category'] ."'>" .$data['category'] ."</option>"; 
                 }   
                  ?>  
             </select>
             <button type="Submit" class="input-group-text btn btn-primary">Filter</button>
              </div>
             </label>
    
</div>

<!--Sort product by it's price -->
<div class="container">
<form class="form-inline" action="" method="GET">
<select name="sort_numeric" class="form-control" >
     <option value="">--Select Option--</option>
     <option value="low-high" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> > Low - High</option>
      <option value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?> > High - Low</option>
 </select>
     <button type="submit" name="Save" class="input-group-text btn btn-primary" id="add">
      Filter
     </button>
</div>

<br>
<br>
<?php 

include "connection.php";

$sort_option = "";
    if(isset($_GET['sort_numeric']))
{
    if($_GET['sort_numeric'] == "low-high"){
        $sort_option = "ASC";
        }elseif($_GET['sort_numeric'] == "high-low"){
        $sort_option = "DESC";
    }
}

$q = "select * from products ORDER BY price $sort_option";
$res=mysqli_query($con,$q);


?>
<div align="center">
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
               } 
          ?>
    </table>
    <p>&nbsp;</p>