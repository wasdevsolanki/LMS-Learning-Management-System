<?php ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");	
?>

<div class="col-sm-9">
 	<h1 class="display-6 p-5 text-center">Assign Batch Course</h1>
	<div class="row">
		<div class="col-sm-1"></div> 	
		<div class="col-sm-8">
	 		<div class="card">
	 			<div class="card-header">Assign Batch & Course Topics Details</div>
				<form method="POST" action="assign_batch_course.php">	
					<!-- <input type="hidden" name="batch_course_id" value="<?php //echo $batch_course['batch_course_id']; ?>"> -->
					<div class="card-body" align="center">
						<div class="mb-4 w-75">
							<span class="text-center mx-1 p-1"  style="font-size:1em; float: left;">Select Batch</span>						
							<select class="form-control m-1" name="batch_id">

								<?php $query = "SELECT * FROM batches WHERE status_id = 3";
								$result = mysqli_query($connection, $query);
								while($row = mysqli_fetch_assoc($result)){ ?>
			                		<option value="<?php echo $row['batch_id']; ?>"><?php echo $row['batch_title']; ?></option><?php
								}?>
			                </select>
		            	</div>

		            	<div class="mb-4 w-75">
							<span class="text-center mx-1 p-1"  style="font-size:1em; float: left;">Select Course</span>	
							<select class="form-control m-1" name="course_id">
								<?php $query = "SELECT * FROM courses WHERE status_id = 1 ";
								$result = mysqli_query($connection, $query);
									while($row = mysqli_fetch_assoc($result)) {
				                	?><option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_title']; ?></option><?php
								}?>
			                </select>
		            	</div>
							<div class="mb-4 w-75"> 
								<span class="text-center mx-1 p-1"  style="font-size:1em; float: left;">Number of topics</span>	
								<input type="number" name="number_of_topics" placeholder="Number of Topics" class="form-control" required> 
							</div>
						<div class="mb-3"><button type="submit" class="btn border border-info" name="add_topic">Add Topic</button> </div>		
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<?php if(isset($_REQUEST['add_topic'])) {
$query = "	INSERT INTO batch_course(batch_id, course_id, status_id, number_of_topics)
		  	VALUES( '".$_REQUEST['batch_id']."', '".$_REQUEST['course_id']."', 3, '".$_REQUEST['number_of_topics']."' ) ";
$result1 = mysqli_query($connection, $query);
	if($result1){
		$batch_course_id = mysqli_insert_id($connection);
		$number_of_topics = $_REQUEST['number_of_topics'];
		header("location:add_topics.php?number_of_topics=".$number_of_topics."&batch_course_id=".$batch_course_id);
	}
}?>

<?php require_once("require/footer.php"); ?>