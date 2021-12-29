<!DOCTYPE html>
<?php 
include('connection.php'); 
session_start();
?>
<html lang="en">
<?php include'head.php';?>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
<div class="canvas">
<h1 class="loader-logo">MH</h1>
<div class="spinner"></div>   
</div>
</div>
<!-- End Preloader -->
<div class="page">
<?php
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
<div class="default-sidebar">
<!-- Begin Side Navbar -->
<?php
include 'slidebar.php';
?>
<!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->
<div class="content-inner">
<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
<div class="page-header">
<div class="d-flex align-items-center">
<h2 class="page-header-title">Subscription</h2>
<div>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
<li class="breadcrumb-item active">Subscription's</li>
</ul>
</div>
</div>
</div>
</div>
<!-- End Page Header -->
<div class="row">
<div class="col-xl-12">
<!-- Default -->
<div class="widget has-shadow">
<div class="widget-header bordered no-actions d-flex align-items-center">
<h4>Detail</h4>
</div>
<div class="widget-body">
<div class="table-responsive">
<form class="form-horizontal " role="form" method="post" name="availability_form" enctype="multipart/form-data">
<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Subscription</label>
<?php
$query1="select * from subscription";
$result=mysqli_query($con,$query1);
while($rowss=mysqli_fetch_array($result)){
?>

<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="radio" name="subscription" value="<?php echo $rowss['sub_name'];?>"><?php echo $rowss['sub_name'];?><br>
<input class="form-control"  type="radio" name="subscription_price" value="<?php echo $rowss['price'];?>"><?php echo $rowss['price'];?>
</div>
<?php 
}
?>
</div>

<?php
$q="select * from model_detail where email='admin@gmail.com'";
$res1=mysqli_query($con,$q);
$rows1=mysqli_fetch_array($res1);
?>
<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Model</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['name'];?>" name="name">
</div>
</div> 

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Height</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['height'];?>" name="height">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Age</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['age'];?>" name="age">
</div>
</div>  

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Bust</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['bust'];?>" name="bust">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Waist</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['waist'];?>" name="waist">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Hair</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['hair'];?>"  name="hair">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Eyes</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['eyes'];?>" name="eyes">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Contact No</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['contact_no'];?>" name="contact_no">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Gender</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['gender'];?>" name="gender">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Description</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['description'];?>" name="description">
</div>
</div>
<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Country</label>
<div class="col-md-4 col-sm-4 col-xs-12" style="width:90%;">
<input class="form-control" type="text" Value="<?php echo $rows1['country'];?>" name="country">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">State</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['state'];?>" name="state">
</div>
</div>   

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">City</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['city'];?>" name="city">
</div>
</div> 

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Services</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" Value="<?php echo $rows1['services'];?>" name="services">
</div>
</div> 

<div class="form-group" id="mypage" style="display: none;" style="width:50%;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12"></label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="service_price" Value="<?php echo $rows1['service_price'];?>">
</div>
</div>

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Category</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="type" Value="<?php echo $rows1['type'];?>">
</div>
</div> 

<div class="form-group" style="display: none;">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="image" Value="<?php echo $rows1['image'];?>">
</div>
</div>
<div class="form-group" style="display: none;">
<div class="col-md-12 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="subimage" Value="<?php echo $rows1['subimage'];?>">
<input class="form-control" type="text" name="subimage1" Value="<?php echo $rows1['subimage1'];?>">
<input class="form-control" type="text" name="subimage2" Value="<?php echo $rows1['subimage2'];?>">
<input class="form-control" type="text" name="subimage3" Value="<?php echo $rows1['subimage3'];?>">
<input class="form-control" type="text" name="subimage4" Value="<?php echo $rows1['subimage4'];?>">
<input class="form-control" type="text" name="subimage5" Value="<?php echo $rows1['subimage5'];?>">
<input class="form-control" type="text" name="subimage6" Value="<?php echo $rows1['subimage6'];?>">
<input class="form-control" type="text" name="subimage7" Value="<?php echo $rows1['subimage7'];?>">
</div>	
</div>		  

<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="category" Value="<?php echo $rows1['category'];?>">
</div>
</div>
<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="email" Value="admin@gmail.com">
</div>
</div>

<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="password" Value="<?php echo $rows1['password'];?>">
</div>
</div>

<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="confirm_password" Value="<?php echo $rows1['confirm_password'];?>">
</div>
</div>

<div class="form-group">
<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
<center><input type="submit" class="btn btn-success pull-right-container" name="s"  value="Subscription"></center>
</div> </div> <br/>
<br/>
<!--<button type="reset" class="btn btn-danger">Reset</button>-->
</form>
</div>
</div>
</div>
<!-- End Default -->                              
</div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
<!-- Begin Page Footer-->
<?php
include 'Footer.php';
?>
                    <!-- End Page Footer -->
<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
<!-- Offcanvas Sidebar -->
<div class="off-sidebar from-right">
<div class="off-sidebar-container">
<header class="off-sidebar-header">
<ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
<li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
<li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
</ul>
<a href="#off-canvas" class="off-sidebar-close"></a>
</header>
<div class="off-sidebar-content offcanvas-scroll auto-scroll">
<div class="tab-content">
<!-- Begin Messenger -->
<div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
<!-- Begin Chat Message -->
<span class="date">Today</span>
<div class="messenger-message messenger-message-sender">
<img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>
<span class="mb-2">Brandon wrote</span>
Hi David, what's up?
</p>
</div>
<div class="messenger-details">
<span class="messenger-message-localization font-size-small">2 minutes ago</span>
</div>
</div>
</div>
<div class="messenger-message messenger-message-recipient">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>Hi Brandon, fine and you?</p>
<p>I'm working on the next update of Elisyam</p>
</div>
<div class="messenger-details">
<span class="messenger-message-localisation font-size-small">3 minutes ago</span>
</div>
</div>
</div>
<div class="messenger-message messenger-message-sender">
<img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p><span class="mb-2">Brandon wrote</span>I can't wait to see</p>
</div>
<div class="messenger-details">
<span class="messenger-message-localization font-size-small">5 minutes ago</span>
</div>
</div>
</div>
<div class="messenger-message messenger-message-recipient">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>I'm almost done</p>
</div>
<div class="messenger-details">
<span class="messenger-message-localisation font-size-small">10 minutes ago</span>
</div>
</div>
</div>
<span class="date">Yesterday</span>
<div class="messenger-message messenger-message-sender">
<img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>I updated the server tonight</p>
</div>
</div>
</div>
<div class="messenger-message messenger-message-recipient">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>Didn't you have any problems?</p>
</div>
</div>
</div>
<div class="messenger-message messenger-message-sender">
<img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>No!</p>
</div>
</div>
</div>
<div class="messenger-message messenger-message-recipient">
<div class="messenger-message-wrapper">
<div class="messenger-message-content">
<p>Great!</p>
<p>See you later!</p>
</div>
</div>
</div>
<!-- End Chat Message -->
<!-- Begin Message Form -->
<div class="enter-message">
<div class="enter-message-form">
<input type="text" placeholder="Enter your message..."/>
</div>
<div class="enter-message-button">
<a href="#" class="send"><i class="ion-paper-airplane"></i></a>
</div>
</div>
<!-- End Message Form -->
</div>
<!-- End Messenger -->
<!-- Begin Today -->
<div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
<!-- Begin Today Stats -->
<div class="sidebar-heading pt-0">Today</div>
<div class="today-stats mt-3 mb-3">
<div class="row">
<div class="col-4 text-center">
<i class="la la-users"></i>
<div class="counter">264</div>
<div class="heading">Clients</div>
</div>
<div class="col-4 text-center">
<i class="la la-cart-arrow-down"></i>
<div class="counter">360</div>
<div class="heading">Sales</div>
</div>
<div class="col-4 text-center">
<i class="la la-money"></i>
<div class="counter">$ 4,565</div>
<div class="heading">Earnings</div>
</div>
</div>
</div>
<!-- End Today Stats -->
<!-- Begin Friends -->
<div class="sidebar-heading">Friends</div>
<div class="quick-friends mt-3 mb-3">
<ul class="list-group w-100">
<li class="list-group-item">
<div class="media">
<div class="media-left align-self-center mr-3">
<img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
</div>
<div class="media-body align-self-center">
<a href="javascript:void(0);">Brandon Smith</a>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-left align-self-center mr-3">
<img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
</div>
<div class="media-body align-self-center">
<a href="javascript:void(0);">Louis Henry</a>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-left align-self-center mr-3">
<img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
</div>
<div class="media-body align-self-center">
<a href="javascript:void(0);">Nathan Hunter</a>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-left align-self-center mr-3">
<img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
</div>
<div class="media-body align-self-center">
<a href="javascript:void(0);">Megan Duncan</a>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-left align-self-center mr-3">
<img src="assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
</div>
<div class="media-body align-self-center">
<a href="javascript:void(0);">Beverly Oliver</a>
</div>
</div>
</li>
</ul>
</div>
<!-- End Friends -->
<!-- Begin Settings -->
<div class="sidebar-heading">Settings</div>
<div class="quick-settings mt-3 mb-3">
<ul class="list-group w-100">
<li class="list-group-item">
<div class="media">
<div class="media-body align-self-center">
<p class="text-dark">Notifications Email</p>
</div>
<div class="media-right align-self-center">
<label>
<input class="toggle-checkbox" type="checkbox" checked>
<span>
<span></span>
</span>
</label>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-body align-self-center">
<p class="text-dark">Notifications Sound</p>
</div>
<div class="media-right align-self-center">
<label>
<input class="toggle-checkbox" type="checkbox">
<span>
<span></span>
</span>
</label>
</div>
</div>
</li>
<li class="list-group-item">
<div class="media">
<div class="media-body align-self-center">
<p class="text-dark">Chat Message Sound</p>
</div>
<div class="media-right align-self-center">
<label>
<input class="toggle-checkbox" type="checkbox" checked>
<span>
<span></span>
</span>
</label>
</div>
</div>
</li>
</ul>
</div>
<!-- End Settings -->
</div>
<!-- End Today -->
</div>
</div>
<!-- End Offcanvas Container -->
</div>
<!-- End Offsidebar Container -->
</div>
<!-- End Offcanvas Sidebar -->
</div>
</div>
<!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="assets/vendors/js/base/jquery.min.js"></script>
<script src="assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
extract($_REQUEST);
$query="update model_detail set name='$name',height='$height',age='$age',bust='$bust',waist='$waist',hair='$hair',eyes='$eyes',contact_no='$contact_no',image='$image',subimage='$subimage',subimage1='$subimage1',subimage2='$subimage2',subimage3='$subimage3',subimage4='$subimage4',subimage5='$subimage5',subimage6='$subimage6',subimage7='$subimage7',description='$description',country='$country',state='$state',city='$city',gender='$gender',category='$category',email='$email',type='$type',services='$services',service_price='$service_price',password='$password',confirm_password='$confirm_password',subscription='$subscription',subscription_price='$subscription_price',status='$status' where regid=$regid";
     
    if(mysqli_query($con, $query))
       {		   
              $query="select * from admin_login";
		      $res=mysqli_query($con,$query);
			  $row=mysqli_fetch_array($res);	
	          $_SESSION['contact_no']=$row['contact_no']; 
              $_SESSION['email']=$row['email'];	
              $_SESSION['subscription_price']=$row1['subscription_price'];

echo "<script>window.location='checkout.php?email=$email'</script>";
}
else
{
echo "<script> alert('Record not added')</script>";
echo "<script>window.location='AddSubscription.php'</script>";
}
}
?>

