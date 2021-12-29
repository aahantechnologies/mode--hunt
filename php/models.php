<!DOCTYPE html>
<?php 
include ('connection.php');
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="image/icon.jpg"/>
      <title>ModelHunt</title>
      <!-- Bootstrap CSS --> <!-- Font Awesome Icons --> <!-- Ionicons Icons --> <!-- Google Fonts --> <!-- Slick Slider CSS --> <!-- Custom styles for this template --> 
      <link rel="stylesheet" href="css/style.css">
      <link href="css/load-more-button.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/collection/icon/icon.css" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
   <body>
      <!-- Navbar --> 
     <?php 
     include'Header.php';
     ?>
      <!-- End Navbar --> 


      <div class="container">
         
          <div class="row">
             
              <div class="col-md-12 my-AnotherModelSlider blogBox moreBox">
                <?php
         $result=mysqli_query($con,"select * from model_detail ORDER BY regid DESC LIMIT 0,4");
         while($row=mysqli_fetch_array($result)){
         ?>
        
                  <div class="col-md-3 col-xs-12">                      
                          <a href="DetailsPages.php?height=<?php echo $row['height'];?> && waist=<?php echo $row['waist'];?> && bust=<?php echo $row['bust'];?> && age=<?php echo $row['age'];?> && hair=<?php echo $row['hair'];?> && eyes=<?php echo $row['eyes'];?>" class="my-ItemWr">
                            <div class="my-ModelItem"><img src="<?php echo $row['image'];?>" class="my-CategoryModelsItem">
                           <div class="my-ModelInfo">
                              <p>Height: <span><?php echo $row['height'];?></span></p>
                              <p>Bust: <span><?php echo $row['bust'];?></span></p>
                              <p>Waist: <span><?php echo $row['waist'];?></span></p>
                              <p>Age: <span><?php echo $row['age'];?></span></p>
                              <p>Hair: <span><?php echo $row['hair'];?></span></p>
                              <p>Eyes: <span><?php echo $row['eyes'];?></span></p>
                              <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                           </div>
                        </div>
                     </a>
                  </div>
 <?php }
          ?>
              </div>
             
          </div>
          
          <div class="row">
              <div class="col-md-12 my-AnotherModelSlider blogBox moreBox" style="display: none;">
                 <?php
         $result1=mysqli_query($con,"select * from model_detail ORDER BY regid DESC LIMIT 4,8");
         while($row1=mysqli_fetch_array($result1)){
         ?>
                  <div class="col-md-3 col-xs-12">                      
                      <a href="DetailsPages.php?name=<?php echo $row1['name'];?> && height=<?php echo $row1['height'];?> && age=<?php echo $row1['age'];?> && bust=<?php echo $row1['bust'];?> && hair=<?php echo $row1['hair'];?>" class="my-ItemWr">
                            <div class="my-ModelItem"><img src="<?php echo $row1['image'];?>" class="my-CategoryModelsItem">
                           <div class="my-ModelInfo">
                              <p>Height: <span><?php echo $row1['height'];?></span></p>
                              <p>Bust: <span><?php echo $row1['bust'];?></span></p>
                              <p>Waist: <span><?php echo $row1['waist'];?></span></p>
                              <p>Age: <span><?php echo $row1['age'];?></span></p>
                              <p>Hair: <span><?php echo $row1['hair'];?></span></p>
                              <p>Eyes: <span><?php echo $row1['eyes'];?></span></p>
                              <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  
                 <?php }?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 my-AnotherModelSlider blogBox moreBox" style="display: none;">
                 <?php
         $result2=mysqli_query($con,"select * from model_detail ORDER BY regid DESC LIMIT 8,12");
         while($row2=mysqli_fetch_array($result2)){
         ?>
                  <div class="col-md-3 col-xs-12">                      
                      <a href="DetailsPages.php" class="my-ItemWr">
                            <div class="my-ModelItem"><img src="<?php echo $row2['image'];?>" class="my-CategoryModelsItem">
                           <div class="my-ModelInfo">
                              <p>Height: <span><?php echo $row2['height'];?></span></p>
                              <p>Bust: <span><?php echo $row2['bust'];?></span></p>
                              <p>Waist: <span><?php echo $row2['waist'];?></span></p>
                              <p>Age: <span><?php echo $row2['age'];?></span></p>
                              <p>Hair: <span><?php echo $row2['hair'];?></span></p>
                              <p>Eyes: <span><?php echo $row2['eyes'];?></span></p>
                              <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                           </div>
                        </div>
                     </a>
                  </div>
                 
              <?php
            }
              ?>
              </div>
              <div id="loadMore" style="">
                <a href="#">Load More</a>
             </div>
          </div>
      </div>
      
      <!-- Footer --> 
      <footer class="my-SiteFooter">
         <div class="container">
            <div class="my-SocIconsWrap"> <a href="#" class="mySocIcon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-pinterest" aria-hidden="true"></i></a> </div>
            <p class="copyright">&#169; 2018 AahanTechnologies</p>
         </div>
      </footer>
      <!-- End Footer --> 
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- load more strat script -->
    <script>
        $( document ).ready(function () {
                $(".moreBox").slice(0, 1).show();
                if ($(".blogBox:hidden").length != 0) {
                    $("#loadMore").show();
                }   
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".moreBox:hidden").slice(0, 1).slideDown();
                    if ($(".moreBox:hidden").length == 0) {
                        $("#loadMore").fadeOut('slow');
                    }
                });
            });
        </script>
        
    <!-- load more end script -->
   </body>
</html>