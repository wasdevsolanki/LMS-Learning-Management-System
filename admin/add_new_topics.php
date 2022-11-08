<?php ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");	
?>
<div class="col-sm-9">
	<h1 class="display-6 p-5 text-center">Add New Topics</h1>
	<div class="row">
		<div class="col-sm-1"></div> 	
		<div class="col-sm-8">
	 		<div class="card">
				<div class="card-header fs-5">Topics</div>
				<form method="POST" action="add_new_topics.php" enctype="multipart/form-data">
					<div class="card-body p-4" align="center">
						<div class="mb-4"><input type="text" name="topic_title" placeholder="Topic Title" class="form-control" required></div>
						<div class="mb-4"><textarea name="topic_description" placeholder="Topic Description" class="form-control" cols="5" rows="5" required></textarea></div>
						<div class="mb-4">
							<span style="float: left; font-size: 0.8em;" class="p-1 text-secondary"> <b>Upload Topic Files:</b> &nbsp;&nbsp;&nbsp;farmat: (doc , jpeg , jpg , pdf , png , ppt)</span>
							<input type="file" name="topic_file[]" placeholder="Upload Files" class="form-control" required multiple>
						</div>
						<div class="mb-3"> <button type="submit" class="btn border border-info" name="add_topic">Add Topic</button></div>		
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<?php 
if(isset( $_REQUEST['add_topic'] )){
	$query = "INSERT INTO topics(topic_title, topic_description, status_id, created_at)
			  VALUES('".htmlspecialchars($_REQUEST['topic_title'])."', 
			  		'".htmlspecialchars($_REQUEST['topic_description'])."', 
			  		2 , now()) ";
	$record = mysqli_query($connection, $query);
	$last_topic_id = mysqli_insert_id($connection);
	$filename = $_FILES['topic_file']['name'];
	$file_path = $_FILES['topic_file']['tmp_name'];
	$a = 0;

	foreach ( $filename as  $value ) {		
		$ext =  explode('.', $value);
		$query ="INSERT INTO topic_file( topic_id, status_id, file_name, file_path, file_type ) 
				VALUES( '".htmlspecialchars($last_topic_id)."', 2,
						'".htmlspecialchars($value)."', 
						'".htmlspecialchars($file_path[$a])."', 
						'".htmlspecialchars($ext[1])."')";

		$result = mysqli_query($connection, $query);			
		$a++;
	}
	if($result){ header("location:add_new_topics.php"); }
}?>
<?php require_once("require/footer.php"); ?>