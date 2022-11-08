<?php error_reporting(0); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Data Table Links -->
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
  }?>
  <div class="container-fluid">

    <div class="row text-dark">
      <div class="col-sm-3" style="background-color:#3AAFA9;">
        <div class="dropdown float-end">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <h1 class="fs-6"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></h1>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item active" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li><a class="dropdown-item" href="../teacher/index.php">Teacher</a></li>
            <li><a class="dropdown-item" href="../student/index.php">Student</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
          </ul>
        </div>

        <div class="pt-3 pb-3 text-center">
          <div style="margin-left: 5rem;"><img src="../img/profile.jpg" width="100" class="rounded-circle border border-dark"></div>
          <h1 class="fs-5 p-1" style="margin-left: 1rem;"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?> <br><span class="fs-5 text-light">Admin</span></h1>
          <a href="index.php" class="btn bg-dark rounded-pill text-light p-1" style="font-size: 0.8rem; margin-left:1rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door pb-1" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/></svg>&nbsp;
            <span>Dashbaord &nbsp;</span>
          </a>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">    
                <h1 class="fs-5 text-dark">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                    </svg>&nbsp;&nbsp;&nbsp;Manage Users</h1>
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">

             <!-- <div class="p-1" style="display:inline-grid;">  -->
              <a href="pending_requests.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Pending Requests</a>
              <a href="all_users.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill">View All Users</a>
              <a href="add_new_user.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill">Add New User</a>
            <!-- </div> -->

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <h1 class="fs-5  text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                  </svg>&nbsp;&nbsp;&nbsp;Roles & Permission</h1>
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="assign_user_roles.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Assign User Role</a><br>
                <a href="edit_role.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Edit Roles</a>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">    
                <h1 class="fs-5 text-dark">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                    </svg>&nbsp;&nbsp;&nbsp;Manage Batches & Courses</h1>
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">

             <!-- <div class="p-1" style="display:inline-grid;">  -->
              <a href="show_batch_course.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">All Batch Course</a>
              <a href="assign_batch_course.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Assign Batch Course</a>
              <a href="show_batches.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Show Batches</a>
              <a href="edit_course.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Show Course</a><br>
              <a href="add_batches.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill">Create Batches</a>
              <!-- <a href="course_info.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill">Course Information</a><br> -->
              <a href="create_course.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Create Course</a>
            <!-- </div> -->

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEight">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                <h1 class="fs-5 text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16">
                  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                  </svg>&nbsp;&nbsp;&nbsp;Manage Course Topics</h1>
              </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="all_topics.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">All Topics</a>
                <a href="add_new_topics.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill">Add New Topics</a><br>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                <h1 class="fs-5 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>&nbsp;&nbsp;&nbsp;Manage Enrollment</h1>
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="student_enrollment.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Student Enrollment</a><br>
                <a href="teacher_enrollment.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Teacher Enrollment</a><br>
                <a href="show_enrolled_users.php" style="text-decoration: none; width: 20rem;" class="btn p-1  mb-1 bg-dark text-light rounded-pill ">Enrolled Users</a><br>
              </div>
            </div>
          </div>

        </div>
    </div>

    

  