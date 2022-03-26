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
            <h1>Login</h1>
            <div class="form-text">
                <label for="">.......................................................Username</label>
                <input type="text">
            </div>
            <div class="form-text">
            <label for="">.......................................................password</label>
            <input type="password">
            </div>
            <button type="login">Login</button>
            <span>Don't have account?register <a href="register.php">now</a> .</span>
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
    <?php
    $servername = "localhost";
    $username = "root" ;
    $password = "";
    $database = "fuji_fruit";

    $connect =  mysqli_connect($servername, $username, $password, $database);
     if (!$connect) {
         echo "Ket noi that bai";
     } else {
         echo "Connect successfully!";
     }

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password']; 


    $sql = "SELECT * from account where username = '$username' AND password ='$password'";

   $result = mysqli_query($connect, $sql);


    $check_login = mysqli_num_rows($result);


    if($check_login>0) {
        echo"<scrip>alert('logined!')</script>";
        echo"<script>window.open('index.php','_self')</script>";
    } 
    else {
        echo 'Dang nhap that bai';
    }
}
?>

</body>
</html>

