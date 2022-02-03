<?php
// To update product
include "connection.php";
$p_id = $_GET['p_id'];
if(isset($_POST['done']))
{
    
    $pname = $_POST["pname"];
    $price =$_POST["price"];
    $disc =$_POST["disc"];
    $cat =$_POST["cat"];
    
    
        if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
            $image = $_FILES['image']['name'];
            $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
            $uploadDirectory .= $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
        }
    
        $sql =  " UPDATE products set p_name='$pname', price='$price', discription='$disc', category='$cat', image='$image' where p_id=$p_id ";

if (mysqli_query($con, $sql)) {
    ?>
    <script type="text/javascript">
            alert('Product updated successfully..!');
            window.location="index.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

mysqli_close($con);
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<form  class="modal-content "  id="myform" name="form1" method="post" enctype="multipart/form-data" >
<div align="center" >
    <h1 >Update Product </h1>
        <table style="text-align:center;width:300px"  border="0">
            <tr>
                <td>Product Name: </td>
                <td><input type="text" name="pname" required ></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="text" name="price" required></td>
            </tr>
            <tr>
                <td>Discription:</td>
                <td><textarea name="disc"> </textarea required></td>
            </tr>
            <tr>
                <td>Category: </td>
                <td>
                    <div class="select">
                    <select id="slct" name="cat">
                        <option disabled selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Select Category --</option>
                    <?php
                    include "connection.php";  
                    $records = mysqli_query($con, "SELECT category From categories");  

                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option value='". $data['category'] ."'>" .$data['category'] ."</option>"; 
                    }   
                    ?>  
                </select>
                     </div>
                </label></td>
                
            </tr>
            
                <tr>
                <br>
                <td>Product Image:</td>
                <td> <input style="margin-left: 15%; margin-top:5%" type="file" name="image" required> </td>
            </tr>
            </table><br>
               
       

<strong><button type="submit" name="submit">SUBMIT</button></strong><br><br>

<a href="index.php">Go Back</a>
</div>    
</div>   
</form>
</form>  
</div>