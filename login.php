<?php require_once("require/header.php"); ?>

<div class="row">
  <div class="col-sm-12 bg-light p-5 text-center"> 
    <h1 class="display-6 ">Online Learning mangement System</h1>
  </div>
</div>

<div class="row">

	<div class="col-sm-3"></div>
	<div class="col-sm-4 p-4">
		<div class="card">
			<div class="card-header">
				<span>Login Here</span>
			</div>
			<form method="POST" action="process.php">
			<div class="card-body mt-4" align="center" style="padding: 1rem 4rem 1rem 4rem;">
				<div class="mb-4">
					<input type="email" name="email" placeholder="johnkin@gmail.com" class="form-control">
				</div>

				<div class="mb-3">
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>

				<div class="mb-3 text-start">
					<input type="checkbox" name="remember_me" class="form-check-input"> Remember me
				</div>

				<div class="mb-3">
					<button type="submit" class="btn border border-info" name="login_btn">Login</button>
				</div>
			</div>
		</form>
			<div class="card-footer text-center">
				<a href="#" style="text-decoration:none;" class="text-dark"><span>Forgetten ID/Password</span></a>				
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<img src="img/vector-3.jpg">
	</div>

</div>





<?php require_once("require/footer.php"); ?>