<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php"); ?>

<div class="col-sm-9">
<h1 class="display-6 pt-3 text-center">Pending Requests</h1>
<center><a href="rejected_users.php" class="btn text-light rounded-pill" style="width:9rem; height: 2.3rem; background-color:#3AAFA9 ;">Rejected Users</a></center>

<?php if(isset($_REQUEST['user_id'])&&($_REQUEST['status'])){
        $query = "  SELECT * FROM users WHERE user_id = '".$_REQUEST['user_id']."' ";
        $result00 =mysqli_query($connection, $query);
        while($row00 = mysqli_fetch_assoc($result00)){ $first_namee =  $row00['first_name'];
        if($_REQUEST['status'] == 1){ $color = 'success'; }
        elseif($_REQUEST['status']== 2) { $color = 'danger'; } 
?> 
    <center>
    <div class="alert alert-<?php echo $color; ?> d-flex align-items-center w-50 mt-2" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" 
            class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>&nbsp;&nbsp;&nbsp;
    <div>
            <?php 
            if($_REQUEST['status'] == 1){ echo "<b>".$first_namee."</b>"." Request has Accepted"; }
            if($_REQUEST['status'] == 2){ echo "<b>".$first_namee."</b>"." Request has Rejected"; }            
            }?>
        </div>
    </div>
    </center>
<?php } ?>

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
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php 
$query = "SELECT * FROM users WHERE is_approve = 'Pending' AND status_id = '2' ORDER BY user_id DESC;";
$result = mysqli_query($connection, $query);
    if($result->num_rows)
    { 
 ?>
        <tr>
        <?php while($row = mysqli_fetch_assoc($result))
        { ?>   
        	<td><input type="checkbox" name="check"></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['home_town']; ?></td>
            <td>
            	<a href="?action=approve&user_id=<?php echo $row['user_id'];?>" style="text-decoration:none; float: left;"><h1 class="text-success" style="font-size:1.3rem;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                     </svg>&nbsp;&nbsp;</h1>
                </a>
            	
                <a href="?action=reject&user_id=<?php echo $row['user_id']; ?>" style="text-decoration:none;"><h1 class="text-danger" style="font-size:1.3rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
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
            <th>Action</th>
        </tr>
    </tfoot>
    </table>
</body>
</html>
</div>
<?php 

if(isset($_REQUEST['action']) && $_REQUEST['action']=='approve'){
    
    $query = "UPDATE users SET is_approve ='approved', status_id = '1', updated_at = now() WHERE user_id = '".$_REQUEST['user_id']."' ";
    $result = mysqli_query($connection, $query);
        if($result)
        {
            $status = 1;
            header("location:pending_requests.php?user_id=".$_REQUEST['user_id']."&status=".$status);
        }
    } 

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'reject')
    {
        $query = "UPDATE users SET is_approve = 'rejected' WHERE user_id = '".$_REQUEST['user_id']."';";
        $result = mysqli_query($connection, $query);
    
    if($result)
        {
            $status = 2;
            header("location:pending_requests.php?user_id=".$_REQUEST['user_id']."&status=".$status);
        }
    }

?>

<?php require_once("require/footer.php"); ?>