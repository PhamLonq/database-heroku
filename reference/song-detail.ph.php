<?php include('header.php');?>
<!-- Content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="album">
                                <div class="row ">   
                                    <div class="col-xl-4">

                                    </div>
                                    <div class="col-xl-4">
                                        <div class="detail">
<!--------------------------------- PHP --------------------------------->
                                        <?php
                                            include('connect.php');
                                            $Song = $_GET["Song"];
                                            $sql = "SELECT * FROM song where Song = '$Song'";
                                            $result = mysqli_query($connect, $sql);
                                            while($row =mysqli_fetch_assoc($result)) 
                                            {
                                                $Song = $row['Song'];
                                                $Artist = $row['Artist'];
                                                $Images = $row['images'];
                                                $File = $row['File'];
                                                $Note = $row['Note'];                                          
                                        ?>              
                                            <div class="images-detail">
                                                <img src="<?php echo"$Images"?>">
                                                <audio class="ado" controls>
                                                    <source src="audio/<?php echo "$File" ?>" type="audio/mpeg">
                                                </audio>
                                            </div>
                                            <div class="body-detail">
                                                <h4><?php echo"$Song" ?></h4>
                                                <h5>Artist: <?php echo"$Artist" ?></h5>
                                                <p><?php echo"$Note" ?></p>
                                            </div>
                                        <?php } ?>
<!--------------------------------- PHP --------------------------------->  
                                        </div>
                                    </div>
                                    <div class="col-xl-4">

                                    </div>                          
                                </div>
                            </div>
                        </div>
                    </div>                    
                                    
    <!-- Footer -->
    <?php include('footer.php');?>