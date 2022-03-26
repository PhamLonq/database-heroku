<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Slider -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Display song -->
    <h2 style="text-align: center">Some Song</h2>
    <div class="container-fluid">
        <div class="row">
                <?php 
                include('connect.php');
                $sql = "SELECT * FROM song, singer WHERE song.singerid = singer.singerid;";
        
                $result = mysqli_query($connect, $sql);
                while ($row_song = mysqli_fetch_array($result)) {
                    $songid = $row_song['songid'];
                    $songname = $row_song['songname'];
                    $songimg = $row_song['songimg'];
                    $songaudio = $row_song['songaudio'];
                    // $song_lyric = $row_song['SongLyrics'];
                    // $song_des = $row_song['SongDes'];
                    // $artistID_song = $row_song['ArtistID'];
                    $singername = $row_song['singername']
                    ?>
        
        
                    <div class="col-3">
                        <div class="card" >
                            <img src="img/<?php echo"$songimg" ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="songinfor.php?id=<?php echo $row_song['songid'] ?> ">
                                    <h5 class="card-title"> <?php echo"$songname" ?> </h5>
                                </a>
                                <audio controls controlsList="nodownload" ontimeupdate="MyAudio(this)" style='width: 100%'>
                                    <source src="./audio/<?php echo"$songaudio"?> " type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>

                        <?php
                    }
                    ?>

        </div>
    </div>

    <?php include("footer.php") ?>
</body>
</html>