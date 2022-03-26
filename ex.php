<!DOCTYPE html>
<html>
<body>
    <form action="ex.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="upload">
    </form>
    <?php
        if(isset($_POST['upload'])){
            $file = $_FILES['image']['tmp_name'];
            $path = "image/".$_FILES['image']['name'];
            if(move_uploaded_file($file, $path)){
                echo "Tải tập tin thành công";
            }else{
                echo "Tải tập tin thất bại";
            }
        }
    ?>
</body>
</html>