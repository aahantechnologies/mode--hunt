<!DOCTYPE html>
<?php 
include('connection.php'); 
?>
<html lang="en">
<?php
include'head.php';
?>
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
// include 'connection.php';
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
<h2 class="page-header-title">Model</h2>
<div>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
<li class="breadcrumb-item active">Model's</li>
</ul>
</div>
</div>
</div>
</div>
<!-- End Page Header -->
<?php
$regid=$_REQUEST['regid'];
$query="select * from category where regid=$regid";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
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
<label class="control-label col-md-2 col-sm-2 col-xs-12">Category</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<input class="form-control" Value="<?php echo $row['category_name'];?>" name="category_name">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="file" Value="<?php echo $row['image'];?>" name="image">
</div>
</div>

<div class="form-group">
<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
<center><input type="submit" class="btn btn-success pull-right-container" name="s"  value="Model"></center>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
</body>
</html>
<?php
if(isset($_REQUEST['s']))
{
$fname=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$newfname=rand(111,111111).'-'.$fname;
$destination1="../upload/$newfname";
$destination="upload/$newfname";
$res=move_uploaded_file($tmpname,$destination1);
 
extract($_REQUEST);
$query="update category set category_name='$category_name',image='$destination' where regid=$regid";
$res1=mysqli_query($con,$query);
if($res1)
{
echo "<script>window.location='CategoryImage.php'</script>";
}
else
{
echo "<script> alert('Record added')</script>";
echo "<script>window.location='EditCategoryImage.php'</script>";
}
}
?>

