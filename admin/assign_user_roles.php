<?php ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
$count=1;
?>

<?php if (isset($_REQUEST['assign_role'])) {  } ?>
<div class="col-sm-9">
<h1 class="display-6 p-5 text-center">Assign User Roles</h1>
<table id="example" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Home Town</th>
            <th>Select Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $query = "    SELECT * FROM users u WHERE u.user_id NOT IN (
                        SELECT  u.user_id FROM users u
                        INNER JOIN user_role ur
                        ON u.user_id = ur.user_id
                        INNER JOIN roles r
                        ON r.role_id = ur.role_id
                        ) AND u.is_approve = 'approved' 
                        AND u.status_id = '1' ORDER BY u.user_id DESC";

                 $result = mysqli_query($connection, $query);
                 while($data = mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $data['first_name']?></td>
                                <td><?php echo $data['last_name']?></td>
                                <td><?php echo $data['email']?></td>
                                <td><?php echo $data['gender']?></td>
                                <td><?php echo $data['date_of_birth']?></td>
                                <td style="font-size:0.8em;"><?php echo $data['home_town']?></td>
                                    <td>
                                    <?php $query1="SELECT * FROM roles "; ?>
                                    <?php $data1 = mysqli_query($connection,$query1) ?>
                                    <form method="POST" action="assign_user_roles.php">
                                      <input type="hidden" name="user_id" value="<?php echo $data['user_id']?>">
                                      <select name="role_id" class="form-control">
                                      <option selected disabled>Select Role</option>
                                        <?php while ($rows = mysqli_fetch_assoc($data1)) { ?>
                                          <option value="<?php echo $rows['role_id'] ?>"><?php echo $rows['role_type'] ?></option>
                                        <?php
                                        }?>
                                      </select>
                                      </td>
                                      <td> <input class="btn btn-info text-light" type="submit" name="assign_role" value="Assign"><br/> </td>
                                    </form>
                            </tr>
                        </tbody>
                                
                   <?php } ?>

</body>
</html>
<?php if(isset($_REQUEST['assign_role'])) {
         $user_id = $_REQUEST['user_id'];
         $role_id = $_REQUEST['role_id'];

      $query  = "INSERT INTO user_role(user_id, role_id, status_id, created_at) VALUES(".$user_id.", ".$role_id.", '1', now())";  
      $record = mysqli_query($connection, $query);
          if($record) {
            $msg='Rajesh';
            header("location:assign_user_roles.php?msg=".$msg);
            if (isset($_REQUEST['msg'])){
                $transfer = $_REQUEST['msg'];
                echo "<script> alert('$transfer'); </script>";
            }
          }
} ?>
</div>
<?php require_once("require/footer.php"); ?>