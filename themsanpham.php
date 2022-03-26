
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="post" enctype="multipart/form-data">    
   <table align="center" width="100%">      
<tr>
   <td colspan="7">
   <h2>Add Product</h2>
   <div class="border_bottom"></div><!--/.border_bottom -->
   </td>
</tr>
 
<tr>
   <td><b>Product Name:</b></td>
   <td><input type="text" name="product_name" size="60" required/></td>
</tr>


        <tr>
  <td><b>Product Image: </b></td>
  <td><input type="file" name="product_image" /></td>
</tr>

<tr>
  <td><b>Product Price: </b></td>
  <td><input type="text" name="product_price" required/></td>
</tr>

<tr>
   <td valign="top"><b>Product Description:</b></td>
   <td><textarea name="product_description"  rows="10"></textarea></td>
</tr>

<tr>
   <td></td>
   <td colspan="7"><input type="submit" name="insert_post" value="Add Product"/></td>
</tr>
   </table>
   
</form>
<?php

$servername = "localhost";
$username ="root";
$password="";
$database = "website";
$connect = mysqli_connect($servername, $username,$password,$database);
if(!$connect){
 echo"Kết nối thất bại";
}
else{
 echo"Kết nối thành công";
}




        if(isset($_POST['insertproduct']))
 {
 $productname = $_POST['productname'];

 $productprice = $_POST['prooductprice'];

 $productdescription = $_POST['productdescription'];

 $productimage= $_POST['productimage'];

 $productimage= $_files['productimage']['name'];

 $productimage_tmp= $_files['image']['tmp_name'];

 move_uploaded_file($productimage_tmp,'image/$productimage');
 
 $sql=" INSERT INTO product VALUES('$productname','$productprice','$productimage','$productdescription')";
 $insert_pro = mysqli_query($connect, $sql);
   
 if($insert_pro)
 {
  echo "<script>alert('Product Has Been inserted successfully!')</script>";
 }
  else
  {

echo "<script>window.open('index.php','_self')</script>";
  }
 }
 

?>

