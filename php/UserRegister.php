<!DOCTYPE html>
<?php
include'connection.php';
session_start();
if(isset($_SESSION['email']))
{
session_destroy();
}
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


      <div class="container myLogin">
          <div class="row">
              <div class="col-md-12 my-AnotherModelSlider blogBox moreBox">
                <div class="col-sm-6 col-xs-12">
                    <img src="image/06.jpg" alt="demo">
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="myLoginBox">            
                        <form action="" method="post">
                           <input type="text" name="full_name" id="email" placeholder="full name" >
                            <input type="text" name="last_name" id="email" placeholder="last name">
                            <input type="text" name="phone_no" id="email" placeholder="contact no">
                            <input type="email" name="email" id="email" placeholder="email" onkeyup="checkfun(this.value);"><span id="output"></span>
                            <input type="password" name="password" id="password" placeholder="password">
                            <input type="password" name="confirm_password" id="password" placeholder="confirm password">
                            <!--<select name="category">-->
                            <!--<option>Category</option>-->
                            <!--<option value="model">Model</option>-->
                            <!--<option value="user">User</option>-->
                            <!--</select>-->
                            <br>
                            <button type="submit" name="register">SignUp</button>
                        </form>
                        <br>
                    </div>
                </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    function checkfun(value) {
      $.ajax({
          url:'checkmail.php?email='+value,
          success:function (responce) {
           $('#output').html(responce);
          }
        });
      
    }
  </script>
   </body>
</html>
<?php
if(isset($_REQUEST['register'])){
extract($_REQUEST);
$query="insert into register values(NULL,'$full_name','$last_name','$phone_no','$email','$password','$confirm_password','$category',now())";
if(mysqli_query($con, $query))
    { 
           $query="select * from register where email='$email'";
           $res=mysqli_query($con,$query); 
           $row=mysqli_fetch_array($res); 
          $_SESSION['email']=$row['email'];
        $_SESSION['first_name']=$row['first_name'];
       $_SESSION['last_name']=$row['last_name'];
        echo "<script> alert('Register successfully')</script>";
echo "<script>window.location='index.php'</script>";
}
else
{
  echo "<script> alert('Register failed')</script>";
echo"<script>window.location='UserRegister.php'</script>";
}
}
?>