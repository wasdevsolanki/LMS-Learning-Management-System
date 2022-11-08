<?php ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
    <div class="col-sm-9" >
    <h1 class="display-6 p-1 text-center" >Edit Roles <p class="fs-6">(Change/Delete/Multiple roles)</p> </h1>

<?php 
    if(isset($_REQUEST['user_id'])&&($_REQUEST['role_id'])&&($_REQUEST['status'])){
        
        $query = "  SELECT users.`first_name`, roles.`role_type` 
                    FROM users, user_role, roles 
                    WHERE users.`user_id`=user_role.`user_id`
                    AND user_role.`role_id`=roles.`role_id`
                    AND users.`user_id`= '".htmlspecialchars($_REQUEST['user_id'])."'
                    AND roles.`role_id`= '".htmlspecialchars($_REQUEST['role_id'])."' ";
        $result00 =mysqli_query($connection, $query);
        while($row00 = mysqli_fetch_assoc($result00)){
            $first_namee =  $row00['first_name'];
            $role_ty =  $row00['role_type'];
            if(($_REQUEST['status'] == 1) || ($_REQUEST['status'] == 3) ){ $color = 'success'; }
            elseif($_REQUEST['status']== 2) { $color = 'danger'; } ?> 
            <center>
            <div class="alert alert-<?php echo $color; ?> d-flex align-items-center w-50" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>&nbsp;&nbsp;&nbsp;
                <div>
                    
                    <?php 
                    if($_REQUEST['status'] == 1){
                    echo "<b>".$first_namee."</b>"." has "."<b>". $role_ty."</b>"." Role Activited"; 
                    }else if($_REQUEST['status'] == 2){   
                    echo "<b>".$first_namee."</b>"." has "."<b>". $role_ty."</b>"." Role In-Activited"; 
                    }else if($_REQUEST['status'] == 3){   
                    echo "<b>".$first_namee."</b>"." has "."<b>". $role_ty."</b>"." Role Assigned"; 
                    }?>

                </div>
            </div>
            </center>
      <?php }
    } ?>

<!-- data Table Record -->
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Profile</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Home Town</th>
                <th style="width:13%">Current Roles</th>
                <th style="width:13%">Edit Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            

    <?php $query =" SELECT * FROM users u WHERE u.user_id  IN (
                    SELECT  u.user_id FROM users u
                    INNER JOIN user_role ur
                    ON u.user_id = ur.user_id
                    INNER JOIN roles r
                    ON r.role_id = ur.role_id
                    ) AND u.is_approve = 'approved' 
                    AND u.status_id = '1' 
                    ORDER BY u.user_id DESC"; 

    $result = mysqli_query($connection, $query);
    if($result->num_rows) {  ?>
            <tr>
        <?php while($row = mysqli_fetch_assoc($result))
            {
        ?>
                <td style="font-size:0.8em;"><img src="<?php echo $row['image']; ?>" alt="Image Not Found"></td>
                <td style="font-size:0.8em;"><?php echo $row['first_name']; ?></td>
                <td style="font-size:0.8em;"><?php echo $row['last_name']; ?></td>
                <td style="font-size:0.8em;"><?php echo $row['email']; ?></td>
                <td style="font-size:0.8em;"><?php echo $row['gender']; ?></td>
                <td style="font-size:0.8em;"><?php echo $row['home_town'];?></td> 

        <!-- fetch current role types --------------->
        <form method="POST" action="edit_role.php">
            <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                <?php     
                    $query = "SELECT role_id FROM user_role WHERE user_id ='".$row['user_id']."' AND status_id = '1' ";
                    $result3 = mysqli_query($connection, $query);
                        if($result3->num_rows)
                            {
                                ?><td class="text-center"><?php  
                                while($row3 = mysqli_fetch_assoc($result3))
                                    {

                                        if(($row3['role_id'])==1) 
                                            {
                                                ?><span class="fw-bold">Student <span style="font-size:0.7em;"> (Active)</span> </span><br><?php
                                                
                                            }

                                        if(($row3['role_id'])==2) 
                                            {
                                                ?><span class="fw-bold">Teacher <span style="font-size:0.7em;"> (Active)</span> </span><br><?php
                                            }

                                        if(($row3['role_id'])==3) 
                                            {
                                                ?><span class="fw-bold">Admin <span style="font-size:0.7em;"> (Active)</span> </span><br><?php
                                            }
                                    }

                    $query = "  SELECT roles.`role_type`, user_role.`role_id`
                                FROM roles, user_role 
                                WHERE roles.`role_id`= user_role.`role_id` 
                                AND user_role.`status_id` = 2 
                                AND user_role.`user_id` = '".$row['user_id']."' ";
                    $result9 = mysqli_query($connection, $query);
                            echo "<hr>";
                    while($dataa = mysqli_fetch_assoc($result9))
                        {
                            ?>
                            <span class="text-danger"><?php echo $dataa['role_type']?><span style="font-size:0.7em;"> (InActive)</span></span><br>
                            <?php
                        }


                                    
                                ?></td></div><?php  
                            }
                            else if(!($result3->num_rows)){
                            ?><td></td><?php
                            }

                ?> 
        <!-- fetch available role types --------------->        
                <td>
                    <span class="text-center mx-1"  style="font-size:0.8em;">New Roles</span>
                    <select class="form-control m-1" name="roles" style="font-size:0.8em;">
                        <option selected disabled>Select Role</option>
                        <?php 
                            $query="SELECT roles.* FROM roles WHERE role_id NOT IN(
                                    SELECT role_id FROM user_role WHERE user_id='".$row['user_id']."') ";

                            $result2 = mysqli_query($connection, $query);
                                if($result2->num_rows)
                                    {
                                        while($row2 = mysqli_fetch_assoc($result2))
                                            {
                                        ?>                                          
                                                <option value="<?php echo $row2['role_id'] ?>"><?php echo $row2['role_type'] ?></option>
                                        <?php 
                                            }
                                    } 
                        ?>
                    </select>

        <!----Active/Inactive roles of the user -->
                    <span class="text-center mx-1" style="font-size:0.8em;">Active/ InActive</span>
                    <select class="form-control m-1" name="role_value" style="font-size:0.8em;">
                        <option selected disabled>Select Role</option>
                        <?php 
                            $query="SELECT roles.* FROM roles WHERE role_id IN(
                                    SELECT role_id`user_role` FROM user_role WHERE user_id='".$row['user_id']."')  ";
                            $result6 = mysqli_query($connection, $query);
                                if($result6->num_rows)
                                    {
                                        while($row6 = mysqli_fetch_assoc($result6))
                                            {
                                        ?>                                          
                                                <option value="<?php echo  $row6['role_id'] ?>"><?php echo $row6['role_type'] ?></option>
                                        <?php 
                                            }

                                    } 
                        ?>

                    </select>
                </td>
                <td align="center" style="display:inline-grid;">
                    <button class="btn btn-success text-light m-1" type="submit" name="assign_role" style="font-size:0.8em;">Assign</button>
                    <button class="btn btn-light border-success shadow-sm m-1" type="submit" name="active_role" style="font-size:0.8em;">Active</button>
                    <button class="btn btn-light border-danger shadow-sm m-1" type="submit" name="inactive_role" style="font-size:0.8em;">InActive</button>
                </td>                   
        
            </tr>
        </form>
<?php
            }
        }                
?>    
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Home Town</th>
                <th>Current Roles</th>
                <th>edit Roles</th>
                <th>Action</th>
            </tr>
        </tfoot>    
    </table>
</body>
</html>

<?php 
// Assign Roles---------------------------------

if(isset($_REQUEST['assign_role']))
    {
    $query  = "INSERT INTO user_role(user_id, role_id, status_id, created_at) VALUES('".$_REQUEST['user_id']."','".$_REQUEST['roles']."', '1', now())";    
    $result = mysqli_query($connection, $query);
        if($result)
        {
        $status = 3;
        header("location:edit_role.php?user_id=".$_REQUEST['user_id']."&role_id=".$_REQUEST['roles']."&status=".$status);

        }
    }

// active role of user---------------------------

if(isset($_REQUEST['active_role']))
    {
    
    $query  = "UPDATE user_role SET status_id = '1' WHERE user_id = '".$_REQUEST['user_id']."' AND role_id = '".$_REQUEST['role_value']."' ";    
    $result = mysqli_query($connection, $query);
        if($result)
        {
            $status = 1;
            header("location:edit_role.php?user_id=".$_REQUEST['user_id']."&role_id=".$_REQUEST['role_value']."&status=".$status);
        }
    }
 
 // Inactive Roles of user---------------------------

if(isset($_REQUEST['inactive_role']))
    {
    
    $query  = "UPDATE user_role SET status_id = '2' WHERE user_id = '".$_REQUEST['user_id']."' AND role_id = '".$_REQUEST['role_value']."' ";    
    $result = mysqli_query($connection, $query);
        
        if($result)
        {   
            $status = 2;
            header("location:edit_role.php?user_id=".$_REQUEST['user_id']."&role_id=".$_REQUEST['role_value']."&status=".$status);
        }
    }

?>
</div>
<?php require_once("require/footer.php"); ?>