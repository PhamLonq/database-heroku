<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Detail.css">
    <link rel="stylesheet" type="text/css" href="css/wwwww.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <title>song detail</title>
</head>
<body>
  <?php 
  include('header.php');
  ?>
<div class="row">
<?php
include('connect.php');
    $id = $_GET["id"];
    $sql = "SELECT * FROM song where songid = '$id'";
    $result = mysqli_query($connect, $sql);
    while($row_song= mysqli_fetch_array($result))
{
    $songname = $row_song['songname'];
    $dayreleash = $row_song['dayreleash'];
    $audio = $row_song['audio'];
    $illustrator = $row_song['illustrator']; 
    $lyric = $row_song ['lyric']                                        
?> 
         
<div class="player">
  <div class="songdetail-lyric">
 <div class="song-detail">  
  <!-- Define the section for displaying details -->
  <div class="details">
    <div class="now-playing">Now playing</div>
    <br>
    <img class="card-img-top" src="image/<?php echo"$illustrator" ?>" alt="Card image cap">
    <br>
    <div class="track-name"><?php echo"$songname" ?></div>
    <div class="track-artist">Imagine Dragons</div>
    <br>
  </div>

  <!-- Define the section for displaying track buttons -->
  
  </div>  
  <div class="lyric"><?php echo"$lyric" ?></div>
  </div>
  <!-- Define the section for displaying the seek slider-->
  <br>
  <div class="slider_container">
  <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 1000px;">
							<source src="audio/<?php echo"$audio" ?>" type="audio/mpeg">
						   </audio>
  </div>
  <!-- Define the section for displaying the volume slider-->
  

  <div class="control">
      <div class="btn btn-repeat">
        <i class="fas fa-redo"></i>
      </div>
      <div class="btn btn-prev">
        <i class="fas fa-step-backward"></i>
      </div>
      <div class="btn btn-toggle-play">
      <i class="fas fa-pause"></i>

      </div>
      <div class="btn btn-next">
        <i class="fas fa-step-forward"></i>
      </div>
      <div class="btn btn-random">
        <i class="fas fa-random"></i>
      </div>
      <div class="btn btn-repeat">
      <i class="fas fa-arrow-to-bottom"></i>
      </div>
    </div>
    
</div>

<!-- Load the main script for the player -->
<script src="main.js"></script>
<?php } ?>
</div>
</body>
</html>