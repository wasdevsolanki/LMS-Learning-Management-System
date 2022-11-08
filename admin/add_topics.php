<?php 
ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");	
?>

<div class="col-sm-9">
	<h1 class="display-6 p-4 text-center">Add Topics</h1>

	<?php if(isset($_REQUEST['number_of_topics']) && ($_REQUEST['batch_course_id'])){
	$number_of_topics 	= $_REQUEST['number_of_topics'];
	$batch_course_id = $_REQUEST['batch_course_id']; ?>

	<div class="row">
		<div class="col-sm-1"></div> 	
		 <div class="col-sm-8">
	 		<div class="card">
	 			<div class="card-header fs-5">Topics</div>
				<form method="POST" action="add_topics.php">
					<div class="card-body" align="center">
		 				<?php for($i=1; $i<=$number_of_topics; $i++){ ?>
		 				<h5 style="text-align:center;" class="p-2 text-success">Topic <?php echo $i ?> </h5>	
						<div class="mb-4">
							<select class="form-control" name="topic_id_<?php echo $i?>">
								<!-- Topic ID getting ----------------->
								<?php $query = "SELECT * FROM topics ORDER BY topic_title ASC ";
								$record = mysqli_query($connection, $query);
									while($topic = mysqli_fetch_assoc($record)){ $topic['topic_id']; ?>
								<option value="<?php echo $topic['topic_id']; ?>"><?php echo $topic['topic_title']; ?></option>
								<?php } ?>
							</select>
						</div>	
						<div class="mb-4">
							<!-- <input type="number" name="topic_priority_<?php //echo $i?>" placeholder="Topic Priority (By Numbers order) " class="form-control" required> --> 
							<select class="form-control" name="topic_priority_<?php echo $i; ?>">
								<?php for($k=1; $k<=$number_of_topics; $k++ ){ ?>
								<option value="<?php echo $k?>"><?php echo $k?></option>
								<?php } ?>
							</select>
						</div>
						<hr width="300rem">
						<?php } ?>
						<input type="hidden" name="batch_course_id" value="<?php echo $batch_course_id; ?>">
						<input type="hidden" name="number_of_topics" value="<?php echo $number_of_topics ?>">
						<div class="mb-3"> <button type="submit" class="btn border border-info" name="add_topic">Add Topic</button> </div>		
					</div>
				</form>
			</div>
		</div>
		<?php }	?>
		<div class="col-sm-3"></div>
	</div>
</div>

<?php 
if(isset($_REQUEST['add_topic'])){
	$batch_course_id = $_REQUEST['batch_course_id'];
	for ($j=1; $j <= $_REQUEST['number_of_topics']; $j++) { 
		$topic_id = $_REQUEST["topic_id_$j"];
		$topic_priority = $_REQUEST["topic_priority_$j"];	

		$query = 	"INSERT INTO batch_course_topic(batch_course_id, topic_id, status_id, topic_priority, created_at)
					VALUES(".$batch_course_id.", ".$topic_id.", 2, ".$topic_priority.", now()) ";
		$result = mysqli_query($connection, $query);
	}
	if($result){ header("location:assign_batch_course.php"); }
}?>
<?php require_once("require/footer.php"); ?>