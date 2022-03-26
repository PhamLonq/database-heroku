<?php 
        include('connect.php');
        $id = $_GET["id"];
         $sql = "DELETE FROM song WHERE songid='$id' ";

         $result = mysqli_query($connect, $sql);

         if ($result) {
            echo "<script> alert ('a song has been deleted!')</script>"; 
         } else{
            echo"<script>alert('Lỗi')</script>";
         }
         echo"<script>window.open('manage.php','_self')</script>";

        
        
?>

<?php 
        include('connect.php');
        $id = $_GET["singerid"];
         $sql = "DELETE FROM singer WHERE singerid='$id' ";

         $result = mysqli_query($connect, $sql);

         if ($result) {
            echo "<script> alert ('a singer has been deleted!')</script>"; 
         } else{
            echo"<script>alert('Lỗi')</script>";
         }
         echo"<script>window.open('manage.php','_self')</script>";

        
        
?>