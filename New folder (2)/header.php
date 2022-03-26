<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon-1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>TuneSource Music</title>
</head>

<body>
    <!-- Header -->
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Logo -->
                    <a href="index.php"><h1><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">TuneSource</span></h1></a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Search -->
                    <div class="box_search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input type="search">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <!--Login -->
                    <a href="#login"><button><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">Get Premium</span></button></a>
                    <div class="dialog overlay" id="login">
                        <div class="dialog-body">
                            <h3 style="text-align: center">Login</h3>
                            <a class="dialog-close-btn" href="#">&times;</a>
                            <form class="diglog-form" action="#" method="POST">
                                <table>
                                    <tr>
                                        <th>Username</th>
                                        <th><input type="text" placeholder="Enter Username" name="Username"></th>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <th><input type="password" placeholder="Enter Password" name="Password"></th>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button name="login">Signin</button></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><a href="#signup">Create a account</a></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <!-- --------------------------------------------------------- -->
                    <?php
                        include 'connect.php';
                        if(isset($_POST['login']))
                        {
                            $Username = $_POST['Username'];
                            $Password = $_POST['Password'];
                            $sql = "SELECT * FROM users WHERE Username = '$Username' and Password = '$Password' ";
                            $result = mysqli_query($connect, $sql);
                            $check_login = mysqli_num_rows($result);
                            if($check_login > 0){
                                echo "
                                <script>alert('Welcome $Username');
                                    window.open('index.php', '_self');</script>
                                ";
                            }else {
                                echo "Failed!";
                            }
                    }

                    ?>
                    <!-- --------------------------------------------------------- -->

                    <!-- Signup -->
                    <div class="dialog overlay" id="signup">
                        <div class="dialog-body">
                            <h3 style="text-align: center">Signup</h3>
                            <a class="dialog-close-btn" href="#">&times;</a>
                            <form class="diglog-form" action="#" method="POST">
                                <table>
                                    <tr>
                                        <th>Username</th>
                                        <th><input type="text" placeholder="Enter your username" name="Username"></th>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <th><input type="password" placeholder="Enter your password"  name="Password"></th>
                                    </tr>
                                    <tr>
                                        <th>Birthday</th>
                                        <th><input type="date" placeholder="Enter your birthday"  name="DoB"></th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th><input type="email" placeholder="Enter your email"  name="Email"></th>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <th><input type="number" min="0900000001" placeholder="Enter your phone number"  name="Phonenumber"></th>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" style="height: 15px;"></td>
                                        <td>Share my registration data with <br> Spotify's content providers for <br> marketing purposes.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><a href="#login"><button name="signup">Create Account</button></a></td>
                                    </tr>                                   
                                </table>
                                <!-- ---------------------------------------------------------------- -->
                                <?php
                                    include 'connect.php';
                                    if(isset($_POST['signup']))
                                    {
                                        $Username = $_POST['Username'];
                                        $Password = $_POST['Password'];
                                        $DoB = $_POST['DoB'];
                                        $Email = $_POST['Email'];
                                        $Phonenumber = $_POST['Phonenumber'];
                                        $Role = $_POST['Role'];
                                        $sql = " INSERT INTO `users`(`Username`, `Password`, `DoB`, `Email`, `Phonenumber`, `Role`) VALUES ('$Username','$Password','$DoB','$Email','$Phonenumber','Standard') ";
                                        $signup = mysqli_query($connect,$sql);
                                        if($signup){
                                                echo " Sign-Up Successfully
                                                <script>alert('Welcome $FULLNAME, Login Now!');
                                                window.open('index.php', '_self');</script>";
                                        }
                                        else{
                                                echo "Error!";
                                        }
                                    }
                                ?>
                                <!-- ---------------------------------------------------------------- -->
                            </form>
                        </div>
                    </div>                  
                </div>
            </div>
        </header>