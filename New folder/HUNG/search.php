<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- MDB -->
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

<?php 
    require_once("connect.php");
    include('header.php');

    $search = "";
    if( !empty($_GET['search'])){
        $search = $_GET['search'];
    }
?>

<div class="container" style="margin-top: ">
    <h3 class="title" style="">Search Results for: <?= $search ?></h3>
    <div class="row">
        <?php
        if( !empty($search)) {

        $sql = "SELECT * FROM song, singer WHERE song.songname LIKE '%{$search}%' and song.singerid = singer.singerid ;" ;

        $result = mysqli_query($connect, $sql);

            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/<?php echo $row['songimg'];?>" class="img-fluid"/>
                        </div>
                        <div class="card-body">
                            <a href="songinfor.php?id=<?php echo $row['songid'] ?> ">
                                <h2 style=""text-decoration: none"> <?php echo $row['songname'] ?></h2>
                            </a>
                            <p class="card-text">Artist: <?php echo $row['singername'] ?></p>
                            <p class="card-text">Price: <?php echo $row['songprice']." VND"; ?></p>
                            <p class="card-text">Genre: <?php echo $row['genrename'] ?></p>
                        </div>
                    </div>
                </div>
            <?php }   
        } ?>
        
    </div>
</div>