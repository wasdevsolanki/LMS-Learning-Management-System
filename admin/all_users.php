<?php 
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<div class="col-sm-9">
    <h1 class="display-6 pt-3 text-center">View All Users</h1>
    <center>
    <div class="w-50 ">            
        <div class="btn-group">
          <button class="btn text-light rounded-pill dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false" style="background-color:#3AAFA9;">Select Role Type
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
    <form method="POST" action="edit_user_info.php">
        <!-- data Table Record -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
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

                <?php $count = 1;
                $query = "SELECT * FROM users WHERE is_approve = 'approved' AND status_id = '1' ORDER BY user_id DESC;";
                $result = mysqli_query($connection, $query);
                if($result->num_rows){ ?>         
                            <tr>
                                <?php while($row = mysqli_fetch_assoc($result)){?>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td class="text-center"><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['date_of_birth']; ?></td>
                                <td><?php echo $row['home_town']; ?></td>
                                
                                <?php $query = "SELECT role_id FROM user_role WHERE user_id ='".$row['user_id']."' AND status_id = 1 ";
                                $result3 = mysqli_query($connection, $query);
                                if($result3->num_rows) { ?>

                                    <td class="text-center"><?php  
                                        while( $row3 = mysqli_fetch_assoc( $result3 )) {
                                            if(( $row3['role_id']) == 1) { ?><span>Student</span><br><?php }
                                            else if(($row3['role_id'])==2) { ?><span>Teacher</span><br><?php }
                                            else if(($row3['role_id'])==3) { ?><span>Admin</span><br><?php }
                                        }?>
                                    </td><?php
                                }           else if(!( $result3->num_rows )){ ?><td></td><?php } ?>
                                <td> <a href="edit_user_info.php?user_id=<?php echo $row['user_id']; ?>"  class="text-center btn border">Edit</a> </td>
                            </tr>
                            <?php }
                }?>
                      
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
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
    </form>
<!-- </body>
</html> -->
<!-- </div> -->
<?php require_once("require/footer.php"); ?>