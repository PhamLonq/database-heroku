<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>song detail</title>
</head>
<body>
<div class="row">
<?php
include('connect.php');
    $songid = $_GET["songid"];
    $sql = "SELECT * FROM song where songid = '$songid'";
    $result = mysqli_query($connect, $sql);
    while($row_song= mysqli_fetch_array($result))
{
    $songname = $row_song['songname'];
    $dayreleash = $row_song['dayreleash'];
    $quality = $row_song['quality'];
    $audio = $row_song['audio'];
    $illustrator = $row_song['illustrator']; 
    $lyric = $row_song ['lyric']                                        
?>              
        <div class="images-detail">
    <img src="<?php echo"$illustrator"?>">
    <audio class="ado" controls>
        <source src="audio/<?php echo "$audio" ?>" type="audio/mpeg">
    </audio>
        </div>

        <div class="body-detail">
    <h5><?php echo"$illustrator"?>
    <p><?php echo"$lyric" ?></p>
        </div>
<?php } ?>
</div>
</body>
</html>