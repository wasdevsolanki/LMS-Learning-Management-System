<?php 
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<?php if(isset($_REQUEST['user_id'])){
//$_REQUEST['user_id'];
	$query = "SELECT * FROM users WHERE user_id = '".$_REQUEST['user_id']."' ";
	$record = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($record)){ ?>

		<div class="col-sm-1"></div>
		<div class="col-sm-6" style="background-image: url(../img/vector-1.jpg); background-repeat: no-repeat; background-size: 50rem;">
			<h1 class="display-6 p-5 ">Add New User</h1>
			<div class="card w-75 ms-5">
				<form method="POST" enctype="multipart/form-data" action="../process.php">		<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
						<div class="card-header"> <span>Registeration</span> </div>
						<div class="card-body mt-4" align="center" style="padding: 1rem 4rem 1rem 4rem;">

							<div class="mb-4"> <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" class="form-control"> </div>
							<div class="mb-4"> <input type="text" name="last_name" value="<?php echo  $row['last_name']; ?>" class="form-control"> </div>
							<div class="mb-4"> <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control"> </div>
							<div class="mb-4"> <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control"> </div>

							<div class="mb-4"> 
								<select class="form-control" name="gender">
									<option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
									<option value="female">female</option>
									<option value="male">male</option>
								</select> 
							</div>
													
							<div class="mb-4"> <label style="float:left; font-size: 0.7em;">&nbsp;Date of Birth</label>
								<input type="date" name="date_of_birth" class="form-control" value="<?php echo $row['date_of_birth']; ?>"> </div>
							<div class="mb-4"> <input type="file" name="img" class="form-control" value="<?php echo $row['image']; ?>" > </div>
							<div class="mb-3"> <textarea name="home_town" placeholder="Home Town" class="form-control"><?php echo $row['home_town']; ?></textarea></div>			
							<div class="mb-3"> <button type="submit" class="btn border border-info" name="edit_user_info">Update</button> </div>
						</div>
				</form>			
			</div>
		</div>
	<?php }
} ?>
<?php require_once("require/footer.php"); ?>