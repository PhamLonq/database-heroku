<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addproduct.css">
    <link rel="stylesheet" href="css/wwWWW.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   <?php include ('header.php') ;?>
   
<div class="add">
   <div class="songadd">
<form action="" method="post" enctype="multipart/form-data">    
   <table border="1px">      
<tr>
   <td colspan="7">
   <h2>Add Product</h2>
   <div class="border_bottom"></div>
   </td>
</tr>
 
<tr>
   <td><b class="title">Song Name:</b></td>
   <td><input type="text" name="songname" ></td>
</tr>

<tr>
  <td><b class="title">Day releash: </b></td>
  <td><input type="date" name="dayreleash" ></td>
</tr>

<tr>
  <td><b class="title">Price: </b></td>
  <td><input type="text" name="songprice" ></td>
</tr>

<tr>
 <td><b class="title">Genre:</b></td>
 <td><input type="text" name="genre" ></td>
</tr>

<tr>
 <td><b class="title">Author:</b></td>
 <td><input type="text" name="authorname" ></td>
</tr>


<tr>
  <td><b class="title">illustrator: </b></td>
  <td><input type="file" name="illustrator" /></td>
</tr>

<tr>
  <td><b class="title">audio: </b></td>
  <td><input type="file" name="audio" /></td>
</tr>

<tr>
  <td><b class="title">Lyric: </b></td>
  <td><input type="text" name="lyric" required/></td>
</tr>

<tr>
   <td></td>
   <td colspan="7"><input type="submit" name="Upload" value="Add Product"/></td>
</tr>
   </table>
   </div>

   <div class="songlist">
   <table border="1px">
	<thead class="object">
		<tr>
			<td >songid</td>
			<td >songname</td>
			<td >day releash</td>
			<td >price</td>
			<td >genre</td>
			<td >author</td>
         <td >illustrator</td>
         <td >audio</td>
         <td >lyric</td>
		<tr>
	</thead>
	<tbody>
    <?php
	session_start(); 
 ?>
	<?php 
    include ('connect.php') ;
    $spl= "SELECT * from song";
    $result = mysqli_query ($connect, $spl);
		 while ($data= mysqli_fetch_array($result)) {


	?>
		<tr class="tablelist">

			<td><?php echo $data['songid']; ?></td>
			<td><?php echo $data['songname']; ?></td>
			<td class="dayreleash"><?php echo $data['dayreleash'] ?></td>
			<td><?php echo $data['songprice'] ?></td>
         <td><?php echo $data['genre'] ?></td>
         <td><?php echo $data['authorname'] ?></td>
         <td><?php echo $data['illustrator'] ?></td>
         <td><?php echo $data['audio'] ?></td>
         <td class="lyric"><?php echo $data['lyric']  ?></td>
         <td><button name="delete?"> delete</button> </td>
			
		</tr>
	<?php 

		}
	?>
	</tbody>
</table>
</div>
</div> 
</form>
</body>

<?php
include ('connect.php') ;
if(isset($_POST["Upload"])){
$songname = $_POST['songname'];
$dayreleash = $_POST['dayreleash'];
$songprice = $_POST['songprice'];
$genre = $_POST['genre'];
$authorname = $_POST['authorname'];
$lyric = $_POST["lyric"];

$illustrator = $_FILES['illustrator']['name'];
$illustrator_tmp = $_FILES['illustrator']['tmp_name'];
move_uploaded_file($illustrator_tmp,"./image/$illustrator");

$audio = $_FILES['audio']['name'];
$audio_tmp = $_FILES['audio']['tmp_name'];
move_uploaded_file($audio_tmp,"./audio/$audio");

   $sql =  "INSERT INTO song VALUES (NULL,'$songname','$dayreleash','$songprice','$genre','$authorname','$illustrator','$audio','$lyric')";
   $insert_pro = mysqli_query($connect, $sql);
   
   if($insert_pro){
    echo "<script>alert('a new song has been added!')</script>";
    echo "<script>window.open('addproduct.php','_self')</script>";
   }
   else{
      echo"failed";
   }
}
?>




<?php 
          
          include ('connect.php') ;
          if(isset($post["delete"]))
          $songid = $_POST['songid'];
          $songid = $_GET['songid'];
          $sql="DELETE FROM song WHERE songid = '$songid'";
          mysqli_query($connect, $sql);
          if ($connect->query($sql) === TRUE) 
             {
             echo "xoa";
             } 
         else 
             {
             echo "Error updating record: ";
             }
          
          ?>
            

</html>
