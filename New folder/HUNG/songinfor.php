<?php require_once("connect.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php include("header.php") ?>

    <div class="wrapper">

<?php 
  $id = $_GET["id"];
  $sql="SELECT * FROM song, singer WHERE songid = '$id' and song.singerid = singer.singerid ";
  $result= mysqli_query($connect, $sql);
  while ($row_song = mysqli_fetch_assoc($result)) {
    $songid = $row_song['songid'];
    $songname = $row_song['songname'];
    $songaudio = $row_song['songaudio'];
    $songlyrics = $row_song['songlyric'];
    $singerid = $row_song['singerid'];
    $genrename = $row_song['genrename'];
    $songimage = $row_song['songimg'];
    $songprice = $row_song['songprice'];

    ?>
    
    <div class="row">
        <img src="img/<?php echo $row_song['songimg'];?>" alt="" class="col-6 "  >
        <div class="col-6">
            <h2>Name Song: <?php echo $row_song['songname']  ?> </h2>
            <h3>Singer Name: <?php echo $row_song['singername'];  ?> </h3>
            <p>Price:  <?php echo $row_song['songprice']; ?>.VND </p>
            <audio controls controlsList="nodownload" ontimeupdate="MyAudio(this)">
                <source src="audio/<?php echo  $row_song['songaudio']; ?> " type="audio/mpeg">
            </audio>
            <p>Genre:  <?php echo $row_song['genrename']; ?> </p>
            <button type="button" class="btn btn-outline-danger">ADD TO CART</button>
        </div>
    </div>
    <?php
  }
?>
</div>

<style>
    .row{
        width: 80%;
        margin: 0 auto;
    }
</style>


<!-- Script for audio -->
            <!-- script for audio -->
    <script type="text/javascript">
        function MyAudio(event) {
            if(event.currentTime>30) {
                event.currentTime=0;
                event.pause();
                alert("you need to purchase for the song")
            }
        }
    </script>
</body>
</html>