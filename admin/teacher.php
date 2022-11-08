<?php 
        require_once("require/header.php"); 
        require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
<h1 class="display-6 pt-3 text-center">View All Users</h1>
        <center>
    <div class="w-50 ">
        
        <div class="btn-group">
  <button class="btn text-light rounded-pill dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false" style="background-color:#3AAFA9;">
    Select Role Type
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
    <li><a class="dropdown-item" href="student.php">Student</a></li>
    <li><a class="dropdown-item" href="teacher.php">Teacher</a></li>
    <li><a class="dropdown-item" href="admin.php">Admin</a></li>
    <li><a class="dropdown-item" href="rejected_users.php">Rejected Requests</a></li>
  </ul>
</div>

    </div>
        </center>


<!-- data Table Record -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th><input type="checkbox" name="check"></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Home Town</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php 
$query = "SELECT * FROM users, user_role WHERE user_role.`user_id`=users.`user_id` AND user_role.`role_id`=2 AND user_role.`status_id`=1";
$result = mysqli_query($connection, $query);
 
 if($result->num_rows)
    {

    
 ?>

            <tr>
        <?php while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <td><input type="checkbox" name="check"></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td class="text-center"><?php echo $row['gender']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
                <td><?php echo $row['home_town']; ?></td>
                    
                    <?php     
                    $query = "SELECT role_id FROM user_role WHERE role_id='2' AND user_id ='".$row['user_id']."' ";
                    $result3 = mysqli_query($connection, $query);
                        if($result3->num_rows)
                            {
                                ?><td class="text-center"><?php  
                                while($row3 = mysqli_fetch_assoc($result3))
                                    {

                                        if(($row3['role_id'])==1) 
                                            {
                                                ?><span>Student</span><br><?php
                                                
                                            }

                                        else if(($row3['role_id'])==2) 
                                            {
                                                ?><span>Teacher</span><br><?php
                                            }

                                        else if(($row3['role_id'])==3) 
                                            {
                                                ?><span>Admin</span><br><?php
                                            }

                                    }

                                ?></td><?php  
                            }
                        else if(!($result3->num_rows)){
                            ?><td></td><?php
                            }    
                ?>

                <td>          
                    <a href="edit_role.php" style="text-decoration:none;" class="text-center"><h1 class="text-light" style="font-size:1.3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-fill bg-success rounded-pill" viewBox="0 0 16 16" style="padding: 6px;">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>&nbsp;&nbsp;</h1>
                    </a>
                </td>
            </tr>
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
                <th>DOB</th>
                <th>Home Town</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</body>
</html>


</div>


<?php require_once("require/footer.php"); ?>