<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<?php 
if(isset($_REQUEST['batch_course_title'])){
	$batch_course_title = $_REQUEST['batch_course_title'];
}

 if(isset($_REQUEST['topic_id'])){ 



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
		<h1 class="fs-4  pt-3"></h1><br>
		<div class="card shadow mb-1">
			<div class="card-header text-center">Files View and Upload </div>
		  <div class="card-body p-4">
		  <!-- <h5 class="card-title text-center">Topic Title </h5> -->
		  <div class="mx-4">
		  	<table class="table">
		<?php 
		$query="SELECT file_name, topic_file_id, status_id FROM topic_file WHERE topic_id = '".$_REQUEST['topic_id']."' ";
		$result = mysqli_query($connection, $query);
		while($fetch = mysqli_fetch_assoc($result)){	
		?>	<tr>
				<td>&nbsp;&nbsp;
		    		<a href="" style="font-size:1.1em; text-decoration: none;" class="fw-bold text-dark card-title">
		    		<?php echo $fetch['file_name']; ?>
	    			</a>

	    			<span class="mx-5 ">
	    				<?php  if($fetch['status_id']==1) {
	    					echo "(Active)";
	    					}
	    				else if($fetch['status_id']==2){
	    					echo "(InActive)";
	    					}
	    				?>	
	    			</span>
	    			
	    			<a href="?inactive=<?php echo $fetch['topic_file_id'] ?>" class="btn float-end border bg-danger text-light">InActive</a>
	    			<a href="?active=<?php echo $fetch['topic_file_id'] ?>" class="btn float-end border mx-2">Active</a>
	    		</td>
	    	</tr>
<?php 
		}
	} 
 }			
?>			<form method="POST" action="topic_files.php" enctype="multipart/form-data">
	    		<td style="font-size:0.9em;" class="m-2">
	    			<input type="file" name="file_upload" class="form-control w-75" style="float:left;">
	    			<input type="submit" name="upload" value="Upload New File" class=" btn border mx-2 bg-light fw-bold">
	    		</td>
	    	</form>	
	</table>
		</div>
		  </div>
		</div>
	</div>
	<div class="col-sm-3"></div>
</div>

<?php 
if(isset($_REQUEST['active'])){
	$query = "UPDATE topic_file SET status_id = 1 WHERE topic_file_id = '".$_REQUEST['active']."'   ";
	$file_active = mysqli_query($connection, $query);
		
		if($file_active){
			header("location:topic_files.php");
		}
}

if(isset($_REQUEST['inactive'])){
	$query = "UPDATE topic_file SET status_id = 2 WHERE topic_file_id = '".$_REQUEST['inactive']."'   ";
	$file_inactive = mysqli_query($connection, $query);
		
		if($file_inactive){
			header("location:topic_files.php");
		}
}

if(isset($_REQUEST['upload'])){
	print_r($_FILES['name']);
}


?>


<?php require_once("require/footer.php"); ?>