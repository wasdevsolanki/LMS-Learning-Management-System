<?php 
	ob_start();
    ob_clean();
        require_once("require/header.php"); 
        require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
<h1 class="display-6 pt-3 text-center">View All Users <p class="fs-6  p-1" style="font-family:arial;">( Rejected Users )</p> </h1>
        <center>
    
    <div class="w-50 m-3">
		 <div class="btn-group">
		  <button class="btn dropdown-toggle text-light rounded-pill" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false" style="background-color:#3AAFA9;">
		    Select Role Type
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
		    <li><a class="dropdown-item text-center" href="student.php">Student</a></li>
		    <li><a class="dropdown-item text-center" href="teacher.php">Teacher</a></li>
		    <li><a class="dropdown-item text-center" href="admin.php">Admin</a></li>
		    <li><a class="dropdown-item text-center" href="rejected_users.php">Rejected Requests</a></li>
		  </ul>
		</div>
    </div>
        </center>


<!-- data Table Record -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th><input type="checkbox" name="check"></th>
                <th>Profile</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Home Town</th>
                <th>Approve</th>
            </tr>
        </thead>
        <tbody>

<?php 
$query = "SELECT * FROM users WHERE is_approve = 'rejected' AND status_id = '2' ORDER BY user_id DESC;";
$result = mysqli_query($connection, $query);
 
 if($result->num_rows)
    {

    
 ?>
            <tr>
        <?php while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <td><input type="checkbox" name="check"></td>
                <td></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td class="text-center"><?php echo $row['gender']; ?></td>
                <td><?php echo $row['home_town']; ?></td>
                <td>          
                    <a href="?action=approve&user_id=<?php echo $row['user_id'];?>" style="text-decoration:none; float: left;"><h1 class="text-success" style="font-size:1.3rem;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
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
                <th>Profile</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Home Town</th>
                <th>Approve</th>
            </tr>
        </tfoot>
    </table>

</body>
</html>


</div>
<?php 
if(isset($_REQUEST['action']) && $_REQUEST['action']=='approve')
    {
    
    $query = "UPDATE users SET is_approve ='approved', status_id = '1', updated_at = now() WHERE user_id = '".$_REQUEST['user_id']."' ";
    $result = mysqli_query($connection, $query);
        if($result)
        {
            header("location:rejected_users.php");
        }
    } 


 ?>


<?php require_once("require/footer.php") ?>