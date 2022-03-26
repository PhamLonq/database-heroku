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

 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
  
 <div>
 <div>
    <?php 
    $id=$_GET["id"];
    $sql="SELECT * FROM product WHERE product_id={$id} ";
    $result= mysqli_query($connect,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
     ?>
      <div style="float:left">
          <img src="Images/<?php echo $row['product_image']?>" style="width: 600px;height: 500px" >
        </div>
        <div style=" text-align: left;">
        <h2 >Name Of Product: <?php echo $row['product_name'] ?></h2>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['product_price']." $"; ?></p>   

        <br>
        <br>
         <form method="POST" action="cart.php"> 
            <input type="number" name="sl" value="1" min="1" max="1" style="display: none;"> 
            <input type="hidden" name="id" value="<?=$id?>">
            <button type="submit" name="button-buy" class="button-buy"><i class="fas fa-cart-plus"></i>  Add to cart</button>
          </form>
         <br>
          <br>          
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <h2>
          Basic product info:
        </h2>               
        <p><?php echo $row["product_description"]; ?></p>
        </div>       

        <?php
      }
      ?>
     </div>
     </div>
    
 </body>
 </html>