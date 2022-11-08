<?php error_reporting(0); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- fonts------------ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
      <!-- font-family: 'Bebas Neue', cursive; -->
  <!-- fonts end-------------- -->
    <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
        $(document).ready(function() {
           $('#example').DataTable();
          } );
        </script>

  <title>Dashboard</title>
</head>
<body>
<?php if(isset($_REQUEST['first_name'])){
  $_SESSION['first_name'] = $_REQUEST['first_name'];
  $_SESSION['last_name'] = $_REQUEST['last_name'];
  $_SESSION['user_role_id'] = $_REQUEST['user_role_id'];
  $_SESSION['user_id'] = $_REQUEST['user_id'];

} 
?>
  <!-- Navabar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" style="background-color: #A1DEF1; font-family: 'Roboto', sans-serif; ">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold mx-5 " href="index.php" style="color:#3aafa9 ;">Teacher Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php
          for ($i=0; $i < 90 ; $i++) { 
            echo "&nbsp;";
          }
        ?>
        <li class="nav-item mb-3">
          <a class="nav-link btn border rounded-pill text-dark" href="index.php" style="font-weight:bold;">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
              <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
            </svg>
          Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn border rounded-pill text-dark mx-2 fw-bold" href="view_users.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>
            View Students
          </a>
        </li>
      </ul>

        <div>
            <ul  style="list-style-type: none;">      
               <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-dark " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?> <img src="../img/profile.jpg" width="40" class="rounded-circle"></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="../admin/index.php">Admin Panel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
             </li>
        </div>
    </div>
  </div>
</nav>
  <!-- navbar end -->
  <div class="container-fluid">