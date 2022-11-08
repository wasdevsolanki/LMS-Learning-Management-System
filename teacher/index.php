
<?php
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<?php 
$query="SELECT * FROM users, user_role, roles
		WHERE users.`user_id` = user_role.`user_id`
		AND roles.`role_id` = user_role.`role_id`
		AND users.`user_id` =  '".$_SESSION['user_id']."'
		AND roles.`role_id` = 2 ";

$record = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($record)){
?>
<div class="row p-5 bg-light" style="background-color:">
	<div class="col-sm-12"><span class="display-6"><?php echo $_SESSION['first_name']."&nbsp;".$_SESSION['last_name']; ?></span></div>
</div>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6 mt-4" style="font-family: 'Roboto', sans-serif; ">
		<?php 
		$query="SELECT b.`batch_title`, c.course_title, u.first_name, c.`course_description`
				FROM user_role_batch_course_enrollment urbce 
				INNER JOIN user_role ur ON ur.user_role_id = urbce.user_role_id
				AND ur.`user_role_id`= '".$_SESSION['user_role_id']."'
				INNER JOIN batch_course bc ON bc.batch_course_id = urbce.batch_course_id
				INNER JOIN users u ON u.user_id = ur.user_id
				INNER JOIN courses c ON c.course_id = bc.course_id
				INNER JOIN batches b ON b.batch_id = bc.batch_id ";
		$result = mysqli_query($connection, $query);
			while($fetch = mysqli_fetch_assoc($result)){	
				// echo $fetch['batch_title'];
		?>
		<div class="card shadow mb-3">
		    <h5 class="card-header"><?php echo $fetch['batch_title']."&nbsp;".$fetch['course_title']; ?></h5>
		  <div class="card-body">
		    <span style="font-size:1em;" class="fw-bold">Course Description</span>
		    <p class="card-text p-2" style="font-size:1em;"><?php echo $fetch['course_description']; ?></p>
		    <a href="show_course_topics.php?batch_course_title=<?php echo $fetch['course_title'];?>" class="btn shadow float-end" style="font-size:0.8em; background-color: lightblue;">Detailed View</a>
		  </div>
		</div>

<?php 
		}
	} 
?>
	</div>
	<div class="col-sm-3"></div>
</div>

<?php require_once("require/footer.php"); ?>