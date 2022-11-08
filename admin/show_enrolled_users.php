<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
<h1 class="display-6 p-5 text-center">Enrolled Users</h1>
<table id="example" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Current Role</th>
        </tr>
    </thead>
    <?php $count = 1;  
    $query="SELECT * FROM users, user_role, roles, user_role_batch_course_enrollment
            WHERE users.`user_id`=user_role.`user_id`
            AND user_role.`role_id`=roles.`role_id`
            AND user_role.`user_role_id`= user_role_batch_course_enrollment.`user_role_id`";
     $result = mysqli_query($connection, $query);
     while($data = mysqli_fetch_assoc($result)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $data['first_name']?></td>
                <td><?php echo $data['last_name']?></td>
                <td><?php echo $data['gender']?></td>
                <td><?php echo $data['email'];  ?></td>
                <td><?php echo $data['role_type'] ?></td>
                
            </tr>
        </tbody>            
       <?php } ?>


</div>

<?php require_once("require/footer.php"); ?>