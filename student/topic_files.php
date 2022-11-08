<?php 

require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<?php 
 if (isset($_REQUEST['batch_course_title'])){
 	$batch_course_title = $_REQUEST['batch_course_title'];
 }
 
 if(isset($_REQUEST['topic_id'])){ 


$query="SELECT * FROM users, user_role, roles
		WHERE users.`user_id` = user_role.`user_id`
		AND roles.`role_id` = user_role.`role_id`
		AND users.`user_id` =  14
		AND roles.`role_id` = 1 ";

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
	<div class="col-sm-6 mt-5">
		<!-- <h1 class="fs-4  pt-3">Topics Files</h1><br> -->
		<div class="card shadow mb-1">
		  <div class="card-body p-4">
		  <h5 class="card-title text-center">Topic Title </h5>
		  <div class="mx-4">
		  	<table class="table">
		<?php 
		$query="SELECT file_name FROM topic_file WHERE topic_id = '".$_REQUEST['topic_id']."' AND status_id = 1 ";
		 $result = mysqli_query($connection, $query);
		while($fetch = mysqli_fetch_assoc($result)){	
		?>	<tr>
				<td>&nbsp;&nbsp;
		    		<a href="" style="font-size:1.1em; text-decoration: none;" class="fw-bold text-dark card-title">
		    		<?php echo $fetch['file_name']; ?>
	    			</a>
	    		</td>
	    	</tr>
<?php 
		}
	} 
 }			
?>			
	</table>		</div>
		  </div>
		</div>
	</div>
	<div class="col-sm-3"></div>
</div>

<?php require_once("require/footer.php"); ?>