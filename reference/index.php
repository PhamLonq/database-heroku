<?php include('header.php') ?>  
       <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="slide-banner">
                                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                                <!-- Slide  -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                    <!-- d-block w-100 -->
                                                    <div class="carousel-item">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="image/slide1.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                                <!-- Mũi tên next slide -->
                                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                               <span class="carousel-control-prev-icon">
                                               </span>
                                               </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                               <span class="carousel-control-next-icon">
                                               </span>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="album">
                                <div class="row ">                             
<!--------------------------------- PHP --------------------------------->
                                <?php
                                    include('connect.php');
                                    $sql = "Select * from `song`";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $Song = $row['Song'];
                                        $Artist = $row['Artist'];
                                        $Images = $row['images'];
                                        $File = $row['File'];
                                        $Note = $row['Note'];    
                                        $Price = $row['Price'];                               
                                ?>
<!--------------------------------- PHP --------------------------------->                                     
                                    <div class="col-xl-2 col-lg-4 col-md-6">
                                        <div class="box_card" style="width: auto; margin: 15px 10px">
                                            <img src=" <?php echo "$Images" ?>" class="card-img-top">
                                            <div class="card-body">
                                                <p class="card-text" style="height:72px">
                                                    <b><?php echo "$Song" ?></b>
                                                    <br> <?php echo"$Artist" ?>
                                                </p>
                                                <audio class="ado" controls controlsList="nodownload" ontimeupdate="MyAudio(this)">
                                                    <source src="audio/<?php echo "$File" ?>" type="audio/mpeg">
                                                </audio>
                                            <a href="song-detail.php?Song=<?php echo"$Song" ?>">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>                           
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include('footer.php') ?>




<?php 
            include ('connect.php') ;
		    $spl= "SELECT * from song";
            $result = mysqli_query ($connect, $spl);
            while ($row_song = mysqli_fetch_array($result))
			{
                $songid = $row_song['songid'];
                $songname = $row_song['songname'];
                $audio = $row_song['audio'];
                $illustrator = $row_song['illustrator'];
                ?>
                <div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3" >
					  <img class="card-img-top" src="image/<?php echo"$illustrator" ?>" alt="Card image cap">
					    <div class="card-body">
					    <h5 class="card-title"><?php echo"$songname" ?></h5>
					    <p class="card-text"></p>
					    <a href="detail.php?songid=<?php echo"$songid" ?>">Buy Now</a>
						<audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width:600px;">
							<source src="audio/<?php echo"$audio" ?>" type="audio/mpeg">
						   </audio>
					    </div>
					</div>
				</div>
		  </div>	
		<?php } ?>	