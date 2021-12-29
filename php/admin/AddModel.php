<!DOCTYPE html>
<?php 
include('connection.php'); 
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
<label class="control-label col-md-2 col-sm-2 col-xs-12">Model</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="name" placeholder="Model Name">
</div>
</div> 

<div class="form-group" id="check">
<div class="col-md-8 col-sm-4 col-xs-12">
<input type="checkbox" >Do you want enter more details
</div>
</div>

<div id="details">
<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Height</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="height" placeholder="Model Height">
</div>
</div> 

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Age</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="age" placeholder="Model Age">
</div>
</div> 

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Bust</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="bust" placeholder="Model Bust">
</div>
</div> 
                           
<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Waist</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="waist" placeholder="Model Waist">
</div>
</div> 

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Hair</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="hair" placeholder="Model Hair">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Eyes</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="eyes" placeholder="Model Eyes">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Contact No</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="contact_no" placeholder="Model Contact No">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Gender</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="radio" name="gender" value="male">Male
<input class="form-control" type="radio" name="gender" value="female">Female
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Description</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<textarea class="form-control" type="text" name="description" placeholder="About Yourself"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Country</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<select required class="form-control" name="country" onchange="selectCountry(this.value)" >
<option value="">Select Country</option> 
<?php $sql_contry = mysqli_query($con,"SELECT * FROM countries ORDER BY id ASC");
while($row_contry = mysqli_fetch_assoc($sql_contry))
{
echo  '<option value="'.$row_contry["id"].'">'.$row_contry["name"].'</option>';
}
?>
</select>
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">State</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<select required class="form-control" id="state_output" name="state" onchange="selectState(this.value)">
<option value="">Select State</option>
</select>
</div>
</div>   

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">City</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<select required class="form-control" name="city" id="city_output">
<option>Select City</option>
</select>
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Services</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<select class="form-control" name="services" id="mybtn" style="width:48%;" border-style:none;">
<option>Service</option>
<?php
$r=mysqli_query($con,"SELECT * FROM services");
while($row1=mysqli_fetch_array($r)){
?>
<option><?php echo $row1['services'];?></option>	
<?php
}
?>	
</select>
</div>
</div> 

<div class="form-group" id="mypage" style="width:50%;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12"></label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="service_price" placeholder="Service Price">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Category</label>
<div class="col-md-4 col-sm-4 col-xs-12">
<select required class="form-control" name="type">
<option>Select Category</option>
<option value="indian">Indian</option>
<option value="unitedstates">United States</option>
<option value="unitedkingdom">United Kingdom</option>
<option value="germany">Germany</option>
<option value="australia">Australia</option>
<option value="russia">Russia</option>
</select>
</div>
</div> 

<div class="form-group">
<label class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="file" name="image">
</div>
</div>

<div class="form-group">
<div class="col-md-12 col-sm-4 col-xs-12">
<input type="file" name="subimage" required=""> 
<input type="file" name="subimage1" required=""> 
<input type="file" name="subimage2" required="">
<input type="file" name="subimage3" required="">
<input type="file" name="subimage4" required="">
<input type="file" name="subimage5" required="">
<input type="file" name="subimage6" required="">
<input type="file" name="subimage7" required="">
</div>  
</div>

<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="category" value="model">
</div>
</div>
<div class="form-group" style="display: none;">
<!-- <label class="control-label col-md-2 col-sm-2 col-xs-12">Type</label> -->
<div class="col-md-8 col-sm-4 col-xs-12">
<input class="form-control" type="text" name="email" value="admin@gmail.com">
</div>
</div>
</div>

<div class="form-group">
<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
<center><input type="submit" class="btn btn-success pull-right-container" name="s"  value="Submit"></center>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
function selectCountry(value) {
var value= value;    
$.ajax
({
url: 'countryStateCity.php?country='+value,
success:function (result) {
$("#state_output").html(result);
}
});
}
</script> 
<script type="text/javascript">
function selectState(value) {
var value= value;    
$.ajax
({
url: 'countryStateCity.php?state='+value,
success:function (result) {
$("#city_output").html(result);
}
});
}
</script>
</html>
<?php
if(isset($_REQUEST['s']))
{
extract($_REQUEST);
    $fname=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $newfname=rand(111,111111).'-'.$fname;
    $destination1="../upload/$newfname";
    $destination="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination1);

    $sfname=$_FILES['subimage']['name'];
    $tmpname=$_FILES['subimage']['tmp_name'];
    $newfname=rand(111,111111).'-'.$sfname;
    $destination2="../upload/$newfname";
    $destination1="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination2);

    $ssfname=$_FILES['subimage1']['name'];
    $tmpname=$_FILES['subimage1']['tmp_name'];
    $newfname=rand(111,111111).'-'.$ssfname;
    $destination3="../upload/$newfname";
    $destination2="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination3);

    $sssfname=$_FILES['subimage2']['name'];
    $tmpname=$_FILES['subimage2']['tmp_name'];
    $newfname=rand(111,111111).'-'.$sssfname;
    $destination4="../upload/$newfname";
    $destination3="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination4);

    $s1fname=$_FILES['subimage3']['name'];
    $tmpname=$_FILES['subimage3']['tmp_name'];
    $newfname=rand(111,111111).'-'.$s1fname;
    $destination5="../upload/$newfname";
    $destination4="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination5);

    $s2fname=$_FILES['subimage4']['name'];
    $tmpname=$_FILES['subimage4']['tmp_name'];
    $newfname=rand(111,111111).'-'.$s2fname;
    $destination6="../upload/$newfname";
    $destination5="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination6);

    $s3fname=$_FILES['subimage5']['name'];
    $tmpname=$_FILES['subimage5']['tmp_name'];
    $newfname=rand(111,111111).'-'.$s3fname;
    $destination7="../upload/$newfname";
    $destination6="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination7);

    $s4fname=$_FILES['subimage6']['name'];
    $tmpname=$_FILES['subimage6']['tmp_name'];
    $newfname=rand(111,111111).'-'.$s4fname;
    $destination8="../upload/$newfname";
    $destination7="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination8);

    $s5fname=$_FILES['subimage7']['name'];
    $tmpname=$_FILES['subimage7']['tmp_name'];
    $newfname=rand(111,111111).'-'.$s5fname;
    $destination9="../upload/$newfname";
    $destination8="upload/$newfname";
    $res1=move_uploaded_file($tmpname,$destination9); 
$query="INSERT INTO model_detail VALUES(NULL,'$name','$height','$age','$bust','$waist','$hair','$eyes','$contact_no','$destination','$destination1','$destination2','$destination3','$destination4','$destination5','$destination6','$destination7','$destination8','$description','$country','$state','$city','$gender','$category','$email','$type','$service','$service_price','$password','$confirm_password','$subscription','$subscription_price','$status',now())";
$res=mysqli_query($con,$query);
     
   if(($res && $res1)>0)
   {
echo "<script>window.location='Model.php'</script>";
}
else
{
echo "<script> alert('Record not added')</script>";
echo "<script>window.location='AddModel.php'</script>";
}
}
?>
