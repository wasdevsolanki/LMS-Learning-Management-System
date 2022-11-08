<?php require_once("require/header.php"); ?>
<div class="col-sm-1"></div>
<div class="col-sm-6" style="background-image: url(../img/vector-1.jpg); background-repeat: no-repeat; background-size: 50rem;">
	<h1 class="display-6 p-5 ">Add New User</h1>
	<div class="card w-75 ms-5">
		<form method="POST" enctype="multipart/form-data" action="../process.php">		
			<div class="card-header"><span>Registeration</span></div>
			<div class="card-body mt-4" align="center" style="padding: 1rem 4rem 1rem 4rem;">

				<div class="mb-4"> <input type="text" name="first_name" placeholder="First Name" class="form-control"> </div>
				<div class="mb-4"> <input type="text" name="last_name" placeholder="Last Name" class="form-control"> </div>
				<div class="mb-4"> <input type="text" name="email" placeholder="johnkin@gmail.com" class="form-control"> </div>
				<div class="mb-4"> <input type="password" name="password" placeholder="Password" class="form-control"> </div>

				<div class="mb-4"> 
					<select class="form-control" name="gender">
						<option value="male">Male</option>
						<option value="female">Female</option>							
					</select> 
				</div>

				<div class="mb-4"> <input type="date" name="date_of_birth" class="form-control"> </div>
				<div class="mb-4"> <input type="file" name="img" class="form-control"> </div>
				<div class="mb-3"> <textarea name="home_town" placeholder="Home Town" class="form-control"></textarea></div>
				
				<div class="mb-4"> 
					<select class="form-control" name="roles">
						<option value="1">Student</option>
						<option value="2">Teacher</option>									
						<option value="3">Admin</option>
					</select> 
				</div>
				<div class="mb-4"> 
					<select class="form-control" name="status">
						<option value="1">Active</option>
						<option value="2">Inactive</option>									
					</select> 
				</div>

				<div class="mb-3"> <button type="submit" class="btn border border-info" name="admin_add_user">Register</button> </div>
			</div>
		</form>			
	</div>
</div>
<?php require_once("require/footer.php"); ?>