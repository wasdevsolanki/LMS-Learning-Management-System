<?php 
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<?php 
if(isset($_REQUEST['batch_course_id'])){
    // echo $_REQUEST['batch_course_id'];
}
?>
<!-- data Table Record -->
<div class="row">	
	<div class="col-sm-4" style=""><h1 class="display-6 p-5 text-center" >View Students</h1></div>
	<div class="col-sm-8"><!-- <img src="../img/vector-3.jpg" width="400"  class="position-absolute end-0" style="z-index: -1;"> --></div>
</div>

<?php
$query="SELECT b.`batch_title`, c.course_title, u.first_name, c.`course_description`, bc.`batch_course_id`
        FROM user_role_batch_course_enrollment urbce 
        INNER JOIN user_role ur ON ur.user_role_id = urbce.user_role_id
        AND ur.`user_role_id`= '".$_SESSION['user_role_id']."'
        INNER JOIN batch_course bc ON bc.batch_course_id = urbce.batch_course_id
        INNER JOIN users u ON u.user_id = ur.user_id
        INNER JOIN courses c ON c.course_id = bc.course_id
        INNER JOIN batches b ON b.batch_id = bc.batch_id ";
$result = mysqli_query($connection, $query);
?>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6 p-4 ">
    <form method="POST" action="process.php">
        <table>
        <tr>
             <td>   
        		<span class="fs-5" style="float:left;">Select Course &nbsp;</span>
        		<select class="form-select w-50" aria-label="Default select example" name="batch_course_id">
                <?php while($fetch = mysqli_fetch_assoc($result)){  ?>
        		  <option value="<?php  echo $fetch['batch_course_id'] ?>" ><?php echo $fetch['batch_title']." ".$fetch['course_title']; ?></option>
                <?php } ?>
        		</select>
            </td>
            <td>
                <button type="submit" name="enrolled_users" class="btn border" style="float:left;">Search</button>
            </td>
        </tr>
        </table>
    </form>    
	</div>
	<div class="col-sm-3"></div>
</div>

<div class="row">
    <div class="col-sm-2">
    <?php  
    $query = "SELECT * FROM user_role_batch_course_enrollment urbce 
                INNER JOIN user_role ur ON ur.user_role_id = urbce.user_role_id
                AND ur.`role_id` = 2
                INNER JOIN batch_course bc ON bc.batch_course_id = urbce.batch_course_id
                INNER JOIN users u ON u.user_id = ur.user_id
                INNER JOIN courses c ON c.course_id = bc.course_id
                INNER JOIN batches b ON b.batch_id = bc.batch_id
                AND bc.`batch_course_id`= '".$_REQUEST['batch_course_id']."' ";
    $result0 = mysqli_query($connection, $query);
    ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-4">Course Teacher</h5>
                <h6 class="card-subtitle mb-2 text-muted">Faculty</h6>
                <hr>  
        <?php while($teacher = mysqli_fetch_assoc($result0)){ ?>        
                <p class="card-text fw-bold"><?php echo $teacher['first_name']." ".$teacher['last_name']; ?></p><hr class="m-0">
                
        <?php } ?>
              </div>
            </div>   
    </div>

	<div class="col-sm-7 border rounded p-2" style="border: 1px solid lightgray;">
    <form method="POST" action="">
<!-- data Table Record -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="50">Profile</th>    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <!-- <th>Role</th> -->
                    
                </tr>
            </thead>
            <tbody>
    <?php

    $count = 1; 
    $query =   "SELECT * FROM user_role_batch_course_enrollment urbce 
                INNER JOIN user_role ur ON ur.user_role_id = urbce.user_role_id
                AND ur.`role_id` = 1
                INNER JOIN batch_course bc ON bc.batch_course_id = urbce.batch_course_id
                INNER JOIN users u ON u.user_id = ur.user_id
                INNER JOIN courses c ON c.course_id = bc.course_id
                INNER JOIN batches b ON b.batch_id = bc.batch_id
                AND bc.`batch_course_id`= '".$_REQUEST['batch_course_id']."' ";
    $record = mysqli_query($connection, $query);
    ?>
                <?php while($row = mysqli_fetch_assoc($record)){ ?>    
                <tr>
                    <td><?php echo $count++ ?></td>
                    <td><img src="../img/profile.jpg" width="30" class="rounded-circle"></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td class="text-center"><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <!-- <td></td> -->
                </tr>
                <?php } ?>    
         
            </tbody>
            
        </table>
    </form>
	</div>
    <div class="col-sm-3">
    </div>
</div>

<?php require_once("require/footer.php"); ?>