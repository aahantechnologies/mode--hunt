<!DOCTYPE html>
<?php
include'connection.php';
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="image/icon.jpg"/>
      <title>ModelHunt</title>
      <!-- Bootstrap CSS --> <!-- Font Awesome Icons --> <!-- Ionicons Icons --> <!-- Google Fonts --> <!-- Slick Slider CSS --> <!-- Custom styles for this template --> 
      <link rel="stylesheet" href="../css/style.css">
      <link href="../css/load-more-button.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/collection/icon/icon.css" />
      <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
   <body>
      <!-- Navbar --> 
      <header class="header transparent">
         <div class="container">
            <div class="header-inner">
               <a href="../index.php" class="site-logo">
                  <h1 class="site-logo-title">ModelHunt</h1>
                  <h1 class="site-logo-text">model agency</h1>
               </a>
               
            </div>
         </div>
      </header>
      <!-- End Navbar --> 


      <div class="container myLogin">
          <div class="row">
              <div class="col-md-12 my-AnotherModelSlider blogBox moreBox">
                <div class="col-sm-6 col-xs-12">
                    <img src="../image/06.jpg" alt="demo">
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="myLoginBox">            
                        <form action="" method="post">
                            <input type="email" name="email" id="email" placeholder="email" >
                            <input type="password" name="password" id="password" placeholder="password">
                            <button type="submit" name="s">LogIn</button>
                        </form>
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

   </body>
</html>
<?php
if(isset($_REQUEST['s'])){
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$query="select * from admin_login where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_num_rows($res)){
echo "<script>window.location='Dashboard.php'</script>";
}
else
{
echo"<script>window.location='login.php'</script>";
}
}
?>