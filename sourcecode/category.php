<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cartegory.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
</head>
<body >
    <header>
        <div class="logo">
           <a href="wwwww.html"> <img  src="image/logo (1).png" alt=""></a>
        </div>
        <div class="menu">
            <li><a href="category.html">IMPORT FRUIT</a>
                 <ul class="sub-menu">
                     <li><a href="">NEW</a></li>
                     <li><a href=""> JAPAN</a></li>
                     <li><a href="">KOREA</a>
                        <ul>
                            <li><a href="">FRUIT</a></li>
                            <li><a href="">VEGETABLE</a></li>
                            <li><a href="">SEED</a></li>
                            <li><a href="">DRY FRUIT</a></li>
                        </ul>
                     </li>
                     <li><a href="">CHINA</a>
                        <ul>
                            <li><a href="">FRUIT</a></li>
                            <li><a href="">DRY FRUIT</a></li>
                        </ul>
                     </li>
                 </ul>
            <li><a href="">INLAND</a></li>
            <li><a href="">ENGLAND</a></li>
            <li><a href="">FRANCE</a></li>
            <li><a href="">DISCOUNT</a></li>
            <li><a href="">ALL PRODUCT</a></li>
            <li><a href="">INTRODUCTION</a></li>
        </div>
        
        <div class="others">
            <li><input placeholder="find" type="text"><i class="fas fa-search"></i></li>
            <li><a  class="fa fa-paw" href=""></a></li>
            <li><a  class="fa fa-user" href=""></a></li>
            <li><a  class="fa fa-shopping-bag" href=""></a></li>
           
        </div>
    </header>
     <!-----------------slide------------------------->
     
     <!-----------------cartegory------------------------->
     <section class="cartegory">
        <div class="container">
            
            <div class="cartegory-top row">
                <p>HOME</p> <span>&#8594;</span><p>FRESH FRUIT</p><span>&#8594;</span><p>NEW</p>
            </div>
        </div>
            <div class="container">
            <div class="row">
           
            <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li"><a href="">FRESH FRUIT</a>
                        </li>
                        <li class="cartegory-left-li"><a href="">INLAND</a>
                        </li>
                        <li class="cartegory-left-li"><a href="">ENGLAND</a>
                        </li>
                        <li class="cartegory-left-li"><a href="">DISCOUNT</a>
                        </li>
                        <li class="cartegory-left-li"><a href="">INTRODUCTION</a>
                        </li>
                        
                        
                    </ul>
            </div>
            <div class="cartrgory-right row"> 
                   
                    <?php
                    include("connect.php");
                    $sql = "SELECT * FROM cartegory";
                    $result = mysqli_query($connect, $sql);
                    while($row =mysqli_fetch_array($result)){
                    $cartegory_id = $row['cartegory_id'];
                    $cartegory_name = $row['cartegory_name'];
                    $cartegory_price =$row['cartegory_price'];
                    $cartegory_image =$row['cartegory_image'];
                    echo" <div class='single_product'>
                    <img src='image/$cartegory_image' width='180' height='180' />
                    <h3> $cartegory_name </h3>
                    <p> Price : $cartegory_price </p>
                    <button> Add to cart </button>
                    </div>
                    ";
                    }
                    ?>
                      
            </div>
            
            </div>
            </div>
         
        </div>
    </section>
    <!-----------------slider------------------------->
    <section id="slider">
    </section>
     <!-----------------app-container------------------------->
     <section class="app-container" style="text-align: center;">
        <p>DOWNLOAD</p>
        <div class="app-store">
            <img src="image/appstore.jpg">
            <img src="image/googleplay.jpg">
        </div>
        <p>RECIEVE NOTICE AT ©FUJI FRUIT APP</p>
       <input type="text" placeholder="nhập email của bạn" id="">
    </section>
  
    
    <!-----------------footer------------------------->
    <div class="footer-top" style="text-align: center;">
        <li><a href=""><img src="image/dathongbao.png" alt=""></a></li>
        <li><a href="">CONTACT</a></li>
        <li><a href="">APPLY</a></li>
        <li><a href=""></a>INTRODUCE</li>
        <li>
            <a href=""class="fab fa-facebook-f"></a>
            <a href=""class="fab fa-twitter"></a>
            <a href=""class="fab fa-youtube"></a>
        </li>
    </div>
    <div style="text-align: center;">
   <p> Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br>
       Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222<br>
       Đặt hàng online : <b>0246 662 3434.</b><br>
   </p>
   </div>
   <div class="footer-bootem" style="text-align: center;"> ©FUJIFRUIT All rights reserved</div>
   
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