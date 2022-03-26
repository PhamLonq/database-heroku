<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 
    include("connect.php"); 
    include("header.php");
?>

<style>
    .insert{
            width: 70%;
            margin: 0 auto;
            border: 1px solid black;
            padding: 10px 14px;
            border-radius: 10px;
        }

</style>


<div class="btn-group" role="group" aria-label="Basic outlined example" style="width: 100%; margin: 10px 0px">
        <a type="button" class="btn btn-outline-primary" href="manage.php">Manage Song</a>
        <a type="button" class="btn btn-outline-primary" href="add.php">Adding song</a>
        <a type="button" class="btn btn-outline-primary" href="addsinger.php">Adding singer</a>
</div>
<form class="insert" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">singerid</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="singerid">
    </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">singer name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="singername">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">description</label>
        <textarea type="text" class="form-control" id="exampleInputPassword1" name="singerdes"> </textarea>
  </div>
  <button type="submit" class="btn btn-primary " name="Insert_singer" style="width: 49%">Insert</button>
  <button type="submit" class="btn btn-primary " name="Update_singer" style="width: 49%">Update</button>
</form>

<?php
        if (isset($_POST["Insert_singer"])) {
            $singername = $_POST['singername'];
            $singerdes = $_POST['singerdes'];

            $sql ="INSERT INTO singer(  singerid, singername, singerdes) 
                            VALUES( Null, '$singername', '$singerdes') 
                ";
    
                $result = mysqli_query($connect, $sql);
                if($result) {
                    echo "<script>alert('Them thanh cong')</script>";
                    echo "<script>window.open('add.php','_self')</script>";
                } else {
                    echo "<script>alert('Them that bai')</script>";
                }
            
            }
?>


        <?php
            if (isset($_POST['Update_singer'])){
                $singerid = $_POST['singerid'];
                $singername = $_POST['singername'];
                $singerdes = $_POST['singerdes'];


                $sql = "UPDATE singer SET singername = '$singername', singerdes = '$singerdes'
                                        WHERE singerid = '$singerid' ";

                $result=mysqli_query($connect, $sql);
                if ($result) {
                echo "<script>alert('Cập nhật thành công')</script>";
                } else {
                echo "Error updating record: " . $connect->error;
                }
                echo"<script>window.open('add.php','_self')</script>";
                $connect->close();
            } 
        ?>