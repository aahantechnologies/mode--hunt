<!DOCTYPE html>
<?php
include('connection.php');
?>
<html lang="en">
    <?php 
     include'Head.php';
     ?>
 <!-- Navbar --> 
  <?php 
     include'Header.php';
     ?>
 <!-- End Navbar --> 
      <main>
<!-- Model Profile --> 
         <div class="profile-entry container">
            <!-- <div class="profile-photos">
               <div class="row-sm">  
                  <div class="col-lg-6 profile-photos-container"> <img class="main-photo" src='image/14.jpg' alt="#"> <img class="main-photo" src='image/15.jpg' alt="#"> <img class="main-photo" src='image/16.jpg' alt="#"> <img class="main-photo" src='image/17.jpg' alt="#"> <img class="main-photo" src='image/18.jpg' alt="#"> <img class="main-photo" src='image/19.jpg' alt="#"> <img class="main-photo" src='image/20.jpg' alt="#"> <img class="main-photo" src='image/21.jpg' alt="#"> <img class="main-photo" src='image/22.jpg' alt="#"> </div>
                  <div class="col-lg-6 thumbnail-photo">
                     <div class="row-sm justify-content-center">
                    <div class="col-6 col-md-4"> <img src="image/demo/14.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/15.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/16.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/17.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/18.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/19.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/20.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/21.jpg" alt="#"> </div>
                    <div class="col-6 col-md-4"> <img src="image/demo/22.jpg" alt="#"> </div>
                     </div>
                  </div>
               </div>
            </div> -->
            
            
         </div>
         <!-- End Model Profile --> <!-- Reviews --> 
         <section class="container my-PopularModels my-ModelRowWrap">
            <h2 class="my-SectionTitle my-Lines">Models</h2>
             
            <article class="my-ModelRow">
               
               <div class="row">
                <?php
// $name=$_REQUEST['name'];
$height=$_REQUEST['height'];
$waist=$_REQUEST['waist'];
$bust=$_REQUEST['bust'];
$age=$_REQUEST['age'];
$hair=$_REQUEST['hair'];
$eyes=$_REQUEST['eyes'];

$query1="select * from model_detail where height='$height' && waist='$waist' && bust='$bust' && age='$age' && hair='$hair' && eyes='$eyes'";
$res=mysqli_query($con,$query1);

while($row=mysqli_fetch_array($res))
{
?>
                  <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0"><a href="DetailsPages.php?height=<?php echo $row['height'];?> && waist=<?php echo $row['waist'];?> && bust=<?php echo $row['bust'];?> && age=<?php echo $row['age'];?> && hair=<?php echo $row['hair'];?> && eyes=<?php echo $row['eyes'];?>" class="my-ImgWr"><img src="<?php echo $row['image'];?>"></a></div>
                  <div class="col-xl-6">
                     <div class="my-RowModelInfo">
                        <h3 class="title"> <a href="#"><?php echo $row['name'];?></a> </h3>
                        <div class="my-ModelAttr">
                           <p class="my-AttrItem"> <span class="my-AttrName">Height:</span> <span class="my-AttrValue"><?php echo $row['height'];?></span> </p>
                           <p class="my-AttrItem"> <span class="my-AttrName">Bust:</span> <span class="my-AttrValue"><?php echo $row['bust'];?></span> </p>
                           <p class="my-AttrItem"> <span class="my-AttrName">Waist:</span> <span class="my-AttrValue"><?php echo $row['waist'];?></span> </p>
                           <p class="my-AttrItem"> <span class="my-AttrName">Age:</span> <span class="my-AttrValue"><?php echo $row['age'];?></span> </p>
                           <p class="my-AttrItem"> <span class="my-AttrName">Hair:</span> <span class="my-AttrValue"><?php echo $row['hair'];?></span> </p>
                           <p class="my-AttrItem"> <span class="my-AttrName">Eyes:</span> <span class="my-AttrValue"><?php echo $row['eyes'];?></span> </p>
                        </div>
                        <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                     </div>
                  </div>
                  <div class="col-xl-2">
                     <p class="my-SocIconsWr"> <a href="#" class="mySocIcon"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </p>
                  </div>
                  <div class="col-xl-2">
                     <p class="my-SocIconsWr my-Big"> <a href="#" class="mySocIcon"><i class="fa fa-heart"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-envelope"></i></a> </p>
                  </div>
                 <?php 
               }
               ?>
               </div>
               
                
            </article>
             
         </section>
         <!-- End Reviews --> 
      </main>
      <!-- Footer --> 
      <footer class="my-SiteFooter">
        <div class="container">
           <div class="my-SocIconsWrap"> <a href="#" class="mySocIcon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#" class="mySocIcon"><i class="fa fa-pinterest" aria-hidden="true"></i></a> </div>
           <p class="copyright">&#169; 2018 AahanTechnologies</p>
        </div>
     </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

     <!-- End Footer --> 
   </body>
</html>




