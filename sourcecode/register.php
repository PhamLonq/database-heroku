<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" class="form-login" enctype="multipart/form-data" method="post">
            <h1>Register</h1>
            <div class="form-text">
            <label for="">.......................................................Username</label>
            <input type="text"  name="$username">
            </div>
            <div class="form-text">
            <label for="" name="$password">.......................................................Password</label>
            <input type="password">
            </div>
            <button name="upload">register</button>
            <span>Already have account?login  <a href="login.html">here</a> .</span>
        </form>
    </div>
    <script>
        const formLogin = document.querySelectorAll('.form-text input')
        const formLable = document.querySelectorAll('.form-text lable')
        for(let i =0;i<2;i++){
            formlogin[i].addEventListener("mouseover",function(){
                formLable[i].classList.add("focus")
            })
            formlogin[i].addEventListener("mouseout",function(){
                formLable[i].classList.remove("focus")
            })
        }
    </script>
    </body>
    <?php  
     
$servername = "localhost";
$username ="root";
$password="";
$database = "fuji_fruit";
$connect = mysqli_connect($servername, $username,$password,$database);
if(!$connect){
 echo"Kết nối thất bại";
}
else{
 echo"Kết nối thành công";
}



 if(isset($_POST['upload'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO account VALUES (NULL,'$username','$password') " ;
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
}
  ?>

