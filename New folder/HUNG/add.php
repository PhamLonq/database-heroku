<?php require_once('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />

<style>
    .insert{
        width: 70%;
        margin: 0 auto;
        border: 1px solid black;
        padding: 10px 14px;
        border-radius: 10px;
    }
</style>
<body>
    <!-- Header -->
    <?php include('header.php') ?>
    <div class="btn-group" role="group" aria-label="Basic outlined example" style="width: 100%; margin: 10px 0px">
        <a type="button" class="btn btn-outline-primary" href="manage.php">Manage Song</a>
        <a type="button" class="btn btn-outline-primary" href="add.php">Adding song</a>
        <a type="button" class="btn btn-outline-primary" href="addsinger.php">Adding singer</a>
    </div>
    <form class="insert mt-10" method="post" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Song name</label>
                    <input type="text" id="form6Example1" class="form-control" name="songname"/>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Genre name</label>
                    <input type="text" id="form6Example2" class="form-control" name="genrename"/>
                </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Song image</label>
                    <input type="file" id="form6Example1" class="form-control" name="songimg"/>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Singerid</label>
                    <input type="text" id="form6Example2" class="form-control" name="singerid"/>
                </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Song audio</label>
                <input type="file" id="form6Example4" class="form-control" name="songaudio" />
            </div>

            <!-- Email input -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Song Price</label>
                        <input type="text" id="form6Example5" class="form-control" name="songprice"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Song ID</label>
                        <input type="text" id="form6Example5" class="form-control" name="songid"/>
                    </div>
                </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Song lyric</label>
                <textarea class="form-control" id="form6Example7" rows="4" name="songlyric"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 col-6 " name="Insert_song" >Insert</button>
            <button type="submit" class="btn btn-primary btn-block mb-4 col-6 " name="Update_song" >Update</button>
    </form>
    
    <!-- PHP cho insert -->
    </div>
                  <?php
                    if (isset($_POST["Insert_song"])) {
                      $songid = $_POST['songid'];
                      $songname = $_POST['songname'];

                      $songaudio = $_FILES['songaudio']['name'];
                      $songaudio_tmp = $_FILES['songaudio']['tmp_name'];
                      move_uploaded_file($songaudio_tmp, "audio/$songaudio");

                      $songlyrics = $_POST['songlyric'];

                      $singerid = $_POST['singerid'];
                      $genrename = $_POST['genrename'];

                      $songimage = $_FILES['songimg']['name'];
                      $songimage_tmp = $_FILES['songimg']['tmp_name'];
                      move_uploaded_file($songimage_tmp, "img/$songimage");
                      
                      $songprice = $_POST['songprice'];
            
                        $sql ="INSERT INTO song(  songid, songname, songimg, genrename, singerid, songaudio, songlyric, songprice) 
                                          VALUES( Null, '$songname', '$songimage', '$genrename', '$singerid', '$songaudio', '$songlyric', '$songprice') 
                              ";
            
                        $result = mysqli_query($connect, $sql);
                        if($result) {
                            echo "<script>alert('new song has been added!')</script>";
                            echo "<script>window.open('add.php','_self')</script>";
                        } else {
                            echo "<script>alert('Them that bai')</script>";
                        }
                    
                    }
                  
                  
                  ?>

                <?php
                    if (isset($_POST['Update_song'])){
                        $songid = $_POST['songid'];
                        $songname = $_POST['songname'];
    
                        $songaudio = $_FILES['songaudio']['name'];
                        $songaudio_tmp = $_FILES['songaudio']['tmp_name'];
                        move_uploaded_file($songaudio_tmp, "audio/$songaudio");
    
                        $songlyric = $_POST['songlyric'];
    
                        $singerid = $_POST['singerid'];
                        $genrename = $_POST['genrename'];
    
                        $songimage = $_FILES['songimg']['name'];
                        $songimage_tmp = $_FILES['songimg']['tmp_name'];
                        move_uploaded_file($songimage_tmp, "img/$songimage");
                        
                        $songprice = $_POST['songprice'];


                        $sql ="UPDATE song SET songname= '$songname', songimg= '$songimage', genrename= '$genrename', singerid= '$singerid', songaudio= '$songaudio', songlyric= '$songlyric', songprice= '$songprice'
                                                WHERE songid = '$songid' ";
                        $result=mysqli_query($connect, $sql);
                        if ($result) {
                        echo "<script>alert('Record updated successfully')</script>";
                        } else {
                        echo "Error updating record: " . $connect->error;
                        }
                        echo"<script>window.open('add.php','_self')</script>";
                        $connect->close();
                    } 
                ?>

</body>
</html>