<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<?php         include('header.php'); ?>
<div class="btn-group" role="group" aria-label="Basic outlined example" style="width: 100%; margin: 10px 0px">
  <a type="button" class="btn btn-outline-primary" href="manage.php">Manage Song</a>
  <a type="button" class="btn btn-outline-primary" href="add.php">Adding song</a>
  <a type="button" class="btn btn-outline-primary" href="addsinger.php">Adding singer</a>
</div>

<h2 style="text-align: center">Song table</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">songid</th>
      <th scope="col">songname</th>
      <th scope="col">singer</th>
      <th scope="col">genre</th>
      <th scope="col">songaudio</th>
      <!-- <th scope="col">songlyric</th> -->
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include('connect.php');

        $sql = "SELECT * FROM song, singer WHERE song.singerid = singer.singerid";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)) {
            $songid = $row['songid'];
            $songname = $row['songname'];
            $songaudio = $row['songaudio'];
            $songlyrics = $row['songlyric'];
            $singerid = $row['singerid'];
            $singername = $row['singername'];
            $genrename = $row['genrename'];
            $songimage = $row['songimg'];
            $songprice = $row['songprice'];
            ?>
        <tr>
            <td> <?php echo $songid ?></td>
            <td> <?php echo $songname ?></td>
            <td> <?php echo $singername.-$singerid ?></td>
            <td> <?php echo $genrename ?></td>
            <td> <?php echo $songaudio ?></td>
            <!-- <td> <?php echo $songlyrics ?></td> -->
            <td> <?php echo $songprice ?></td>
            <td> <?php echo $songimage ?></td>
            <td><a href="delete.php?id=<?php echo $songid ?>"> DELETE</a></td>
        </tr>

          <?php
        }
        ?> 
  </tbody>
</table>

<h2 style="text-align: center">Singer Table</h2>
<table class="table" >
    <thead>
        <tr>
            <th scope="col">singerid</th>
            <th scope="col">singername</th>
            <th scope="col">description</th>
            <th scope="col">action</th>
        </tr>
    </thead>
  <tbody>
    <?php 
        include('connect.php');

        $sql = "SELECT * FROM singer ";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)) {
            $singerid = $row['singerid'];
            $singername = $row['singername'];
            $singerdes = $row['singerdes'];
            ?>
        <tr>
            <td> <?php echo $singerid ?></td>
            <td> <?php echo $singername?></td>
            <td> <?php echo $singerdes ?></td>
            <td><a href="delete.php?singerid=<?php echo $singerid ?>"> DELETE</a></td>
        </tr>

          <?php
        }
        ?> 
  </tbody>

</table>