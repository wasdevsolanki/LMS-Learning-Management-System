
<?php
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<?php 
if(isset($_REQUEST['batch_course_title'])){
 $batch_course_title = $_REQUEST['batch_course_title'];
}


$query="SELECT * FROM users, user_role, roles
		WHERE users.`user_id` = user_role.`user_id`
		AND roles.`role_id` = user_role.`role_id`
		AND users.`user_id` =  27
		AND roles.`role_id` = 2 ";

$record = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($record)){
?>
<div class="row p-3 bg-light" style="background-color:">
	<div class="col-sm-12">
		<span class="display-6"><?php echo $_SESSION['first_name']."&nbsp;".$_SESSION['last_name']; ?></span>
		<span class="fs-5 mx-5 pt-3">&nbsp;<?php echo $batch_course_title ?></span>
	</div>
</div>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h1 class="fs-4 text-center pt-3">Course Topics</h1><br>
		<?php 
		$query="SELECT * FROM batch_course, batch_course_topic, topics
				WHERE  `batch_course`.`batch_course_id` = `batch_course_topic`.`batch_course_id`
				AND topics.`topic_id` = `batch_course_topic`.`topic_id`
				AND `batch_course_topic`.`batch_course_id` = 64";
		 $result = mysqli_query($connection, $query);
		while($fetch = mysqli_fetch_assoc($result)){	
				
		?>
		<div class="card shadow mb-1">
		  <div class="card-body">
		  	
		  		  
		    <a href="topic_files.php?topic_id=<?php echo $fetch['topic_id']; ?>&batch_course_title=<?php echo $batch_course_title; ?>" style="font-size:1.1em; text-decoration: none;" class="fw-bold text-dark card-title">
		    	<?php echo $fetch['topic_title'] ?>
		    <a href="#" class="float-end badge bg-secondary rounded-pill p-2" style="text-decoration:none;">Files  4</a>
	    	</a>
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