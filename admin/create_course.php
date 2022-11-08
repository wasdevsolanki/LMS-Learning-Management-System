<?php 
ob_start();
ob_clean();
	require_once("require/header.php"); 
	require_once("../require/database_connection.php");	
?>

<div class="col-sm-9">
 	<h1 class="display-6 p-5 text-center">Add Course</h1>
	<div class="row">
		<div class="col-sm-1"></div> 	
		<div class="col-sm-8">
	 		<div class="card">
	 			<div class="card-header">Add Course</div>
				<div class="card-body" align="center">
					<form method="POST" action="create_course.php">	
						<div class="mb-4"> <input type="text" name="course_title" placeholder="Course Title" class="form-control" required> </div>
						<div class="mb-4"> <textarea name="course_description" placeholder="Course Description" class="form-control" cols="5" rows="5" required></textarea> </div>
						<div class="mb-4">
							<select class="form-control" name="course_status" required>
								<option value="1">Active</option>
								<option value="2">In-Active</option>									
							</select> 
						</div>
						<input type="hidden" name="batch_idd" value="<?php echo $row['batch_id']; ?>">
						<div class="mb-3"> <button type="submit" class="btn border border-info" name="add_course">Add Course</button></div>		
					</form>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="card">
			<span class="card-header bg-dark text-light">Available Courses</span>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">PHP Basic </li>
			    <li class="list-group-item">PHP Advance</li>
			    <li class="list-group-item">Java Basic</li>
			    <li class="list-group-item">Java Advance</li>
			    <li class="list-group-item">Networks Basic</li>
			    <li class="list-group-item">Networks Advance</li>
			    <li class="list-group-item">C++ Basic</li>
			    <li class="list-group-item">C++ Advance</li>
			    <li class="list-group-item">Java Advance</li>
			    <li class="list-group-item">Networks Basic</li>
			    <li class="list-group-item">Networks Advance</li>
			  </ul>
			</div>
		</div>
	</div>
</div>

<?php if(isset($_REQUEST['add_course'])) {
	$course_title = $_REQUEST['course_title'];
	$course_description = $_REQUEST['course_description'];
	$course_status = $_REQUEST['course_status'];

$query = "INSERT INTO courses(course_title, course_description, status_id, created_at) 
		  VALUES('".htmlspecialchars($course_title)."',
				'".htmlspecialchars($course_description)."',
			 	".$course_status.", now() )";
$result = mysqli_query($connection, $query);
	if( $result ) { header("location:create_course.php"); }
}?>

<?php require_once("require/footer.php"); ?>