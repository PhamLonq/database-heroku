<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/WWWWw.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="wwwww.php"> <img  src="image1/logo.png" alt=""></a>
        </div>
         <div class="menu">
            <li><a href="wwwww.php">MAIN PAGE</a>
            <li><a href="">BILLBOARD</a></li>
        </div>
        
        <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
<?php 
include('connect.php');
if(isset($_SESSION['username'])){
    $a = $_SESSION['username'];
    ?>

<div class="login"><a href="login.php"><?php echo "Welcome $a"; ?></a></div>
<?php
}
?>
    </header>
<!-----------------slider------------------------->
<div class="body">
<div class="slider">
    <section id="slider">
        <div class="aspect-ratio-169">
            <img class="sl1" src="image/slide1.jpg">
            <img class="sl2" src="image/slide2.jpg">
            <img class="sl3" src="image/slide3.jpg">
            <img class="sl4" src="image/dusktildawn.jpg">
        </div>

        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
</div>
    <!-----------------app-container------------------------->

     
 
  <!-----------------product-card------------------------->
  <div class="container">
	<div class="row mt-5">
        <br>
        <br>
		<a class="list-product-title">New song</a>

		</div>

        <br>
		<div class="product-group">
			<div class="row">
            <?php 
            include ('connect.php') ;
		    $spl= "SELECT * from song";
            $result = mysqli_query ($connect, $spl);
            while ($row_song = mysqli_fetch_array($result))
			{
                $songid = $row_song['songid'];
                $songname = $row_song['songname'];
                $songprice = $row_song['songprice'];
                $authorname = $row_song['authorname'];
                $audio = $row_song['audio'];
                $illustrator = $row_song['illustrator'];
                ?>
<div class="card-product d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-2 mt-2 mr-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src=image/<?php echo"$illustrator" ?> alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <p class="font-weight-semibold " class="text-default mb-2"><?php echo"$songname" ?> - <?php echo"$authorname" ?></p>
                    </div>
                    <div class="songdetail"><a href="detail.php?id=<?php echo"$songid" ?>" style="color:white">View detail</a></div>
                    <p class="mb-0 font-weight-semibold "><?php echo"$songprice" ?></p>
                     <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"><a href="add-card.php?id<?php echo"$songid" ?>"> Add to cart</a></i></button>
                     <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"><a href="">Buy now</a></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>				
			</div>
		</div>
	</div>
</div>
</div>



</body>
<script>
    const header = document.querySelector("header")
 window.addEventListener("scroll",function(){
     x=window.pageYOffset
     if(x>0){
         header.classList.add("sticky")
     }
     else{
        header.classList.remove("sticky")
     }
    
   
 })




    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169 ")
    const dotItem = document.querySelectorAll(".dot")
    let index=0
    let imgNuber = imgPosition.length
    //
    imgPosition.forEach(function(image,index){
        image.style.left=index*100+"%"
        dotItem[index].addEventListener("click",function(){
        slider(index)
        })
    })
    function imgSlide (){
        index++;
        console.log(index)
        if(index>=imgNuber){index=0}
        slider (index)
    }
    function slider (index){
        imgContainer.style.left = "-" +index*100+ "%"
        const dotAtive= document.querySelector(".active")
        dotAtive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,4000)
</script>
</html>