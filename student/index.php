<?php 
require_once("require/header.php"); 
require_once("../require/database_connection.php");		
?>
<?php 
$query="SELECT * FROM users, user_role, roles
		WHERE users.`user_id` = user_role.`user_id`
		AND roles.`role_id` = user_role.`role_id`
		AND users.`user_id` =  14
		AND roles.`role_id` = 1 ";

$record = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($record)){
?>
<div class="row bg-light p-2">
	<div class="col-sm-12">
		<h1 class="display-6 mx-5 fs-3 p-2" style="color: slategray;"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?></h1>
	</div>
</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6 mt-5" style="font-family: 'Roboto', sans-serif; ">
		<?php 
		$query="SELECT b.`batch_title`, c.course_title, u.first_name, c.`course_description`
				FROM user_role_batch_course_enrollment urbce 
				INNER JOIN user_role ur ON ur.user_role_id = urbce.user_role_id
				AND ur.`user_role_id`= 198
				INNER JOIN batch_course bc ON bc.batch_course_id = urbce.batch_course_id
				INNER JOIN users u ON u.user_id = ur.user_id
				INNER JOIN courses c ON c.course_id = bc.course_id
				INNER JOIN batches b ON b.batch_id = bc.batch_id ";
		$result = mysqli_query($connection, $query);
		while($fetch = mysqli_fetch_assoc($result)){	
		?>

		<div class="card shadow mb-3">
		    <h5 class="card-header"><?php echo $fetch['batch_title']."&nbsp;".$fetch['course_title']; ?></h5>
		  <div class="card-body">
		    <span style="font-size:1em;" class="fw-bold">Course Description</span>
		    <p class="card-text p-2" style="font-size:1em;"><?php echo $fetch['course_description']; ?></p>
		    <a href="show_course_topics.php?batch_course_title=<?php echo $fetch['course_title']; ?>" class="btn shadow float-end" style="font-size:0.8em; background-color: lightblue;">Detailed View</a>
		  </div>
		</div>

<?php 
		}
	} 
?>
	</div>
<div class="col-sm-3"></div>
</div>




<?php require_once("require/footer.php"); 
?>

				