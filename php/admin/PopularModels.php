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
<!-- Begin Header -->
<?php
include 'header.php';
?>
<!-- End Header -->
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
<div class="widget-body">
<div class="form-group">
<!-- <a href="AddUser.php"><button type="button" class="btn btn-primary mr-1 mb-2">Add User</button></a> -->
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
<table class="table mb-0">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Contact NO</th>
<th>Image</th>
<th>Actions</th>
<th>PopularModels</th>
</tr>
</thead>
<tbody>
<?php
$query1="select * from model_detail";
$res1=mysqli_query($con,$query1);
$i=1;
while($row1=mysqli_fetch_array($res1))
{
	$status=$row1['status'];
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row1['name'];?></td> 
<td><?php echo $row1['email'];?></td>
<td><?php echo $row1['contact_no'];?></td> 
<td><img src="../<?php echo $row1['image'];?>" height='70' width='90'/></td>
<td class="td-actions">
<?php 
echo" <a title='update record' href='ViewPopularModel.php?regid=$row1[0]'><i class='la la-edit edit'></i> </a>";
?>
</td>
 <td>
<?php
if(($status)=='0')
{
?>
<a href="action.php?status=<?php echo $row1['regid'];?>" 
 class="act" onclick="return confirm('Activate <?php echo $regid?>');"> Deactivate </a>
<?php
}
if(($status)=='1')
{
?>
<a href="action.php?status=<?php echo $row1['regid'];?>" 
 class="deact" onclick="return confirm('De-activate <?php echo $regid?>');"> Activate</a>
<?php
}
?>     
 </td>    
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
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
<p>
Hi Brandon, fine and you?
</p>
<p>
I'm working on the next update of Elisyam
</p>
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
<p>
<span class="mb-2">Brandon wrote</span>
I can't wait to see
</p>
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
if(isset($_REQUEST['regid']))
{  
$regid=$_REQUEST['regid'];
$query="delete from model_detail where regid=$regid";
if(mysqli_query($con,$query))
{
echo "<script>confirm('Are you sure...')</script>";
echo "<script>alert('Record deleted...')</script>";
echo "<script>window.location='ModelDetails.php'</script>";
}
else
{
echo "<script>alert('Record not deleted...')</script>";
echo "<script>window.location='ModelDetails.php'</script>";
}
}
?>
































