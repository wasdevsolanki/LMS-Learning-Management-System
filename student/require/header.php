<?php error_reporting(0) ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <?php require_once("require/fonts.php"); ?>
  <title>Student Dashboard</title>
</head>
<body>
<?php if(isset($_REQUEST['first_name'])){
  $_SESSION['first_name'] = $_REQUEST['first_name'];
  $_SESSION['last_name'] = $_REQUEST['last_name'];
} 
?>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg navbar-light text-light" style="background-color: lightseagreen; font-family: 'Roboto', sans-serif; ">
      <div class="container-fluid" >
        <a class="navbar-brand"href="index.php">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent" align="center">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <h1 class="text-light" style="font-family: 'Lobster', cursive;">Student <span class="fs-5" style="font-family: 'Roboto', sans-serif;">Dashboard</span></h1>
            <li class="nav-item">
              <?php for ($i=0; $i <20; $i++) { ?>
                &nbsp;
              <?php } ?>
              <a class="nav-link" aria-current="page" href="index.php"><h1 class="fs-4  text-light" style="font-family: 'Bebas Neue', cursive; margin-top: -1rem;"></h1></a>
            </li>
            <!-- 
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php"><h1 class="fs-4  text-light" style="font-family: 'Bebas Neue', cursive; margin-bottom:-2rem;">Contact us</h1></a>
            </li> -->
          </ul>

          <div>
            <ul  style="list-style-type: none;">      
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-dark " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?> 
                  <img src="../img/profile.jpg" width="40" class="rounded-circle"></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="../admin/index.php">Admin Panel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
             </li>
          </div>
          </ul>       
        </div>
      <!-- </div> -->
    </nav>
    <!-- end navbar -->
<div class="container-fluid">
