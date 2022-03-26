
<?php
$servername = "localhost";
$username ="root";
$password="";
$database = "musicapp";
$connect = mysqli_connect($servername, $username,$password,$database);
if(!$connect){
 echo"failed to connect";
}
else{
 echo"";
}
?>


