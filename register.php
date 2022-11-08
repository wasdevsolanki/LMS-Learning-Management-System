<?php require_once("require/header.php"); 
	  require_once("require/database_connection.php");

?>

<div class="row">
	<h1 class="display-5 p-5 text-center">Registration Form</h1>
	<div class="col-sm-2"></div>
	<div class="col-sm-4 mt-3">
		
		<div class="card">
			<div class="card-header">
				<span>Registration</span>
			</div>
			<div class="card-body mt-4" align="center" style="padding: 1rem 4rem 1rem 4rem;">
			<form method="POST" enctype="multipart/form-data" action="process.php">
				<div class="mb-4"> <input type="text" name="first_name" placeholder="First Name" class="form-control"> </div>
				<div class="mb-4"> <input type="text" name="last_name" placeholder="Last Name" class="form-control"> </div>
				<div class="mb-4"> <input type="text" name="email" placeholder="johnkin@gmail.com" class="form-control"> </div>
				<div class="mb-4"> <input type="password" name="password" placeholder="Password" class="form-control"> </div>

				<div class="mb-4">
					<select class="form-control" name="gender">
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</div>
				
				<div class="mb-4"> <input type="date" name="date_of_birth" class="form-control"> </div>
				<div class="mb-4"> <input type="file" name="image" class="form-control" accept="image/*"> </div>
				<div class="mb-3"> <textarea name="home_town" placeholder="Home Town" class="form-control"></textarea> </div>
				<div class="mb-3"> <button type="submit" class="btn border border-info" name="register_btn">Register</button> </div>
			</form>
			</div>
			<div class="card-footer text-center">
				<span></span>				
			</div>
		</div>

	</div>
	<div class="col-sm-6 mt-5">
		<img src="img/vector-3.jpg">
	</div>
</div>




<?php require_once("require/footer.php"); ?>