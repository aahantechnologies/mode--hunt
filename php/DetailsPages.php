<!DOCTYPE html>
<?php 
include ('connection.php');
// $name=$_REQUEST['name'];
$height=$_REQUEST['height'];
$waist=$_REQUEST['waist'];
$age=$_REQUEST['age'];
$bust=$_REQUEST['bust'];
$hair=$_REQUEST['hair'];
$eyes=$_REQUEST['eyes'];
$query1="select * from model_detail where height='$height' AND waist='$waist' AND age='$age' AND bust='$bust' AND hair='$hair' AND eyes='$eyes'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
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
         <!-- <div class="profile-entry container"> -->
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
            <div class="container">
    <div class="row">
        
<div class="col-md-6">
    <div class="mySlides">      
      <img src='<?php echo $row1['image'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage1'];?>' style="width:100%">
    </div> 
    <div class="mySlides">      
      <img src='<?php echo $row1['subimage2'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage3'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage4'];?>' style="width:100%">
    </div> 
    <div class="mySlides">      
      <img src='<?php echo $row1['subimage5'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage6'];?>' style="width:100%">
    </div>  
    <div class="mySlides">
      <img src='<?php echo $row1['subimage7'];?>' style="width:100%">
    </div> 
  </div>

  
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['image'];?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods"></div>
      <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage'];?>" style="width:100%" onclick="currentSlide(2)" alt="The Woods"></div>
      <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage1'];?>" style="width:100%" onclick="currentSlide(3)" alt="The Woods"></div>
    </div>
    <div class="row">
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage2'];?>" style="width:100%" onclick="currentSlide(4)" alt="The Woods"></div>
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage3'];?>" style="width:100%" onclick="currentSlide(5)" alt="The Woods"></div>
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage4'];?>" style="width:100%" onclick="currentSlide(6)" alt="The Woods"></div>
    </div>
    <div class="row">
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage5'];?>" style="width:100%" onclick="currentSlide(7)" alt="The Woods"></div>
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage6'];?>" style="width:100%" onclick="currentSlide(8)" alt="The Woods"></div>
            <div class="col-md-4 MyslierImg"><img class="demo cursor" src="<?php echo $row1['subimage7'];?>" style="width:100%" onclick="currentSlide(9)" alt="The Woods"></div>
    </div>      
  </div>
</div>

            <div class="row">
               <section class="col-md-9">
                  <div class="profile-info">
                     <header class="my-ProfileHeader">
                        <h2 class="my-ProfileTitle"><?php echo $row1['name'];?></h2>
                        <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                     </header>
                     <div class="my-ModelAttr">
                        <p class="my-AttrItem"> <span class="my-AttrName">Height:</span> <span class="my-AttrValue"><?php echo $row1['height'];?></span> </p>
                        <p class="my-AttrItem"> <span class="my-AttrName">Bust:</span> <span class="my-AttrValue"><?php echo $row1['bust'];?></span> </p>
                        <p class="my-AttrItem"> <span class="my-AttrName">Waist:</span> <span class="my-AttrValue"><?php echo $row1['waist'];?></span> </p>
                        <p class="my-AttrItem"> <span class="my-AttrName">Age:</span> <span class="my-AttrValue"><?php echo $row1['age'];?></span> </p>
                        <p class="my-AttrItem"> <span class="my-AttrName">Heir:</span> <span class="my-AttrValue"><?php echo $row1['hair'];?></span> </p>
                        <p class="my-AttrItem"> <span class="my-AttrName">Eyes:</span> <span class="my-AttrValue"><?php echo $row1['eyes'];?></span> </p>
                     </div> 
                     <div class="my-ModelDescription">
                        <p><?php echo $row1['description'];?>. </p>
                     </div>
                  </div>
               </section>
               <aside class="col-md-3">
                  <p class="my-SocIcons"> <a href="#"><i class="fa fa-facebook-f"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> </p>
                  <a href="#" class="my-BtnClassic">Send Privat message</a> 
               </aside>
            </div>
         </div>
         <!-- End Model Profile --> <!-- Reviews --> 
         <div class="my-ProfileReviews container">
            <div class="row">
               <aside class="col-lg-3 my-Sidebar">
                  <div class="my-ModelContacts">
                     <h3 class="title">Location</h3>
                     <div id="map-model-location"></div>
                     <p class="my-Place"> <i class="fa fa-map-marker" aria-hidden="true"></i> <span>168 Luckie St NW, Atlantas</span> </p>
                     <p class="my-Phone"> <i class="fa fa-mobile" aria-hidden="true"></i> <a href="#">+1 212-380-1195</a> </p>
                  </div>
                  <a href="#" class="my-WrAds">
                     <p>Ads</p>
                     <p>260 x 300</p>
                  </a>
                  <div class="my-AnotherTopModels">
                     <h3 class="title">Featured Models</h3>
                     <div class="my-AnotherModelSlider">
                        <a href="#" class="my-ItemWr">
                           <div class="my-ModelItem" style="background-image: url('image/18.jpg')">
                              <div class="my-ModelInfo">
                                 <p>Height: <span>185</span></p>
                                 <p>Bust: <span>85</span></p>
                                 <p>Waist: <span>60</span></p>
                                 <p>Age: <span>17</span></p>
                                 <p>Hair: <span>Red</span></p>
                                 <p>Eyes: <span>Blue</span></p>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                              </div>
                           </div>
                        </a>
                        <!-- <a href="#" class="my-ItemWr">
                           <div class="my-ModelItem" style="background-image: url('image/02_575x700.jpg')">
                              <div class="my-ModelInfo">
                                 <p>Height: <span>185</span></p>
                                 <p>Bust: <span>85</span></p>
                                 <p>Waist: <span>60</span></p>
                                 <p>Age: <span>17</span></p>
                                 <p>Hair: <span>Red</span></p>
                                 <p>Eyes: <span>Blue</span></p>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                              </div>
                           </div>
                        </a> -->
                        <!-- <a href="#" class="my-ItemWr">
                           <div class="my-ModelItem" style="background-image: url('image/04_575x700.jpg')">
                              <div class="my-ModelInfo">
                                 <p>Height: <span>185</span></p>
                                 <p>Bust: <span>85</span></p>
                                 <p>Waist: <span>60</span></p>
                                 <p>Age: <span>17</span></p>
                                 <p>Hair: <span>Red</span></p>
                                 <p>Eyes: <span>Blue</span></p>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                              </div>
                           </div>
                        </a> -->
                     </div>
                  </div>
               </aside>
               <section class="col-lg-9 my-OrderLgFirst">
                  <h3 class="section-title my-Lines">Recent Reviews</h3>
                  <div class="my-RewiewSection">
                     <div class="all-review">
                        <article class="my-BlogComment">
                           <div class="my-AuthorPhotoWr"> <img src="image/23.jpg" alt="#"> </div>
                           <div class="my-AuthorContent">
                              <header class="my-CommentHeader">
                                 <h3 class="my-AuthorName">Marie Hoola</h3>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </p>
                                 <p class="publish">15 December, 2017</p>
                              </header>
                              <div class="my-BlockCcontent">
                                 <p>Proin dignissim magna ut varius faucibus. Suspendisse aliquet, risus id hendrerit tincidunt mau risnisi ultrices nisl, et consectetur tellus est sed justo. Orci varius natoque penatibus etmag.</p>
                              </div>
                           </div>
                        </article>
                        <article class="my-BlogComment">
                           <div class="my-AuthorPhotoWr"> <img src="image/23.jpg" alt="#"> </div>
                           <div class="my-AuthorContent">
                              <header class="my-CommentHeader">
                                 <h3 class="my-AuthorName">Perry Powell</h3>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                 <p class="publish">12 December, 2017</p>
                              </header>
                              <div class="my-BlockCcontent">
                                 <p>Proin dignissim magna ut varius faucibus. Suspendisse aliquet, risus id hendrerit tincidunt.</p>
                              </div>
                           </div>
                        </article>
                        <article class="my-BlogComment">
                           <div class="my-AuthorPhotoWr"> <img src="image/23.jpg" alt="#"> </div>
                           <div class="my-AuthorContent">
                              <header class="my-CommentHeader">
                                 <h3 class="my-AuthorName">Ross Hender</h3>
                                 <p class="publish">09 December, 2017</p>
                              </header>
                              <div class="my-BlockCcontent">
                                 <p>Proin dignissim magna ut varius faucibus. Suspendisse aliquet, risus id hendrerit tincidunt, mauris nisi ultrices nisl, et consectetur tellus est sed justo. Orci varius natoque penatibus et magnis dis parturient montes, nasc etur ridiculus mus. Vestibulum a pulvinar quam.</p>
                              </div>
                           </div>
                        </article>
                        <article class="my-BlogComment">
                           <div class="my-AuthorPhotoWr"> <img src="image/23.jpg" alt="#"> </div>
                           <div class="my-AuthorContent">
                              <header class="my-CommentHeader">
                                 <h3 class="my-AuthorName">Hughes Flores</h3>
                                 <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </p>
                                 <p class="publish">15 December, 2017</p>
                              </header>
                              <div class="my-BlockCcontent">
                                 <p>Proin dignissim magna ut varius faucibus. Suspendisse aliquet, risus id hendrerit tincidunt mau risnisi ultrices nisl, et consectetur tellus est sed justo. Orci varius natoque penatibus etmag.</p>
                              </div>
                           </div>
                        </article>
                     </div>
                     <form id="rate-form" class="form rate-form" method="post">
                        <p class="title">Write Review</p>
                        <p class="form-message error">Message should not be empty</p>
                        <p class="form-message saccess">Message sent saccessfuly</p>
                        <div class="rate-model">
                           <p class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </p>
                           <p class="hidden" id="rating-value"> <input type="radio" name="rating" value="1"> <input type="radio" name="rating" value="2"> <input type="radio" name="rating" value="3"> <input type="radio" name="rating" value="4"> <input type="radio" name="rating" value="5"> </p>
                           <span>Rate Model</span> 
                        </div>
                        <div class="row-input">
                           <div class="my-ItemWr"> <input type="text" name="name" placeholder="Your Name" class="name"> </div>
                           <div class="my-ItemWr"> <input type="email" name="email" placeholder="Your Email" class="email"> </div>
                        </div>
                        <textarea name="review-message" placeholder="Message"></textarea>
                        <input type="submit" value="Post Review" class="my-BtnClassic"> 
                     </form>
                  </div>
               </section>
            </div>
         </div>
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








     
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
        
   </body>
</html>