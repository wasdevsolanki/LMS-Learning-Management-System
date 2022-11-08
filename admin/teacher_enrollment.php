<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
<h1 class="display-6 p-3 text-center">Teacher Enrollement<p class="fs-6">(Batch/Course/Assign to Students)</p></h1>
<table id="example" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Select Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1 ?>      
        <?php  $query=" SELECT * FROM users u JOIN  user_role 
                            USING(user_id) JOIN roles USING(role_id)
                            WHERE u.user_id IN 
                            ( SELECT u.user_id FROM users u 
                            INNER JOIN user_role ur ON u.user_id = ur.user_id 
                            INNER JOIN roles r ON r.role_id = ur.role_id 
                            AND ur.`role_id`= 2 AND ur.`status_id` = 1 ) 
                            AND u.is_approve = 'approved' AND u.status_id = '1' ";

            $result = mysqli_query($connection, $query);
            while($data = mysqli_fetch_assoc($result)){  
        ?>     

        <tr>
            <td><?php echo $count++; ?></td>
            <td style="font-size:0.8em;"><?php echo $data['first_name']?></td>
            <td style="font-size:0.8em;"><?php echo $data['last_name']?></td>
            <td style="font-size:0.8em;"><?php echo $data['email']?></td>
            <td style="font-size:0.8em;"><?php echo $data['gender']?></td>
            
        <!-- Batch-Course ID ---------->
        <?php
            $query="SELECT *FROM batches
                    JOIN batch_course USING(batch_id) 
                    JOIN `courses` USING(course_id)  
                    WHERE batch_course.status_id = 3 ";
            $result2 = mysqli_query($connection, $query);
        ?>
            <form method="POST" action="student_enrollment.php">
            <input type="hidden" name="user_role_id" id="user_id" value="<?php echo $data['user_role_id']; ?>">            
            
            <td>
                <span class="text-center mx-1"  style="font-size:0.8em;">Batch/Course</span>
                <select class="form-control m-1" name="batch_course_id" style="font-size:0.8em;">
                <?php 
                while($fetch = mysqli_fetch_assoc($result2)) {
                    ?>
                        <option value="<?php echo $fetch['batch_course_id']?>"> 
                            <?php echo $fetch['batch_title']."&nbsp;&nbsp;".$fetch['course_title'] ?>
                        </option>
                    <?php 
                    }
                ?>
                </select> 
            </td>
            <td>
                <button class="btn btn-info text-light" type="submit" name="enroll_batch_course">Enroll</button><br/>
            </td>
        </tr>
        </form>
<?php } ?>

    </tbody>
</table>
</body>
</html>

<?php 
 if(isset($_REQUEST['enroll_batch_course']))
 {
    $query="INSERT INTO user_role_batch_course_enrollment(user_role_id, batch_course_id, status_id, created_at) 
            VALUES('".$_REQUEST['user_role_id']."', '".$_REQUEST['batch_course_id']."', 1, now())";  

    $record = mysqli_query($connection, $query);
        if($record) {  header("location:teacher_enrollment.php"); }  
    }
    
?>
</div>
<?php require_once("require/footer.php"); ?>  