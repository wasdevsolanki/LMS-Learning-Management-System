<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");	
?>

<div class="col-sm-1"></div>
<div class="col-sm-6" style="background-image: url(../img/vector-1.jpg); background-repeat: no-repeat; background-size: 50rem;">
	<h1 class="display-6 p-5 ">Add Batch</h1>
	<div class="card w-75 ms-5">
		<div class="card-header">
			<span>Add Batch</span>
		</div>
		<div class="card-body mt-4" align="center" style="padding: 1rem 4rem 1rem 4rem;">
			<form method="POST" action="add_batches.php">	
				<div class="mb-4"> <input type="text" name="batch_title" placeholder="Batch Title" class="form-control" required> </div>
				<div class="mb-3"> <textarea name="batch_description" placeholder="Batch Description" class="form-control" required></textarea> </div>
				<div class="pb-1" style="float:left;"> <p>Start Date &nbsp;&nbsp;</p> </div>
				<div class="mb-4 w-75" style="float:left"> <input type="date" name="batch_start_date"  class="form-control" required> </div>
				<div class="pb-1" style="float:left;"> <p>End Date&nbsp;&nbsp;&nbsp;&nbsp;</p> </div>
				<div class="mb-4 w-75" style="float:left"> <input type="date" name="batch_end_date"  class="form-control" required> </div>
				<div class="mb-3"> <button type="submit" name="add_batch" class="btn border border-info">Add Batch</button></div>
			</form>		
		</div>	
	</div>
</div>

<!-- Add Batches  -->
<?php 
if(isset($_REQUEST['add_batch'])){
	$batch_title 		= $_REQUEST['batch_title'];
	$batch_description  = $_REQUEST['batch_description'];
	$batch_start_date   = $_REQUEST['batch_start_date'];
	$batch_end_date     = $_REQUEST['batch_end_date'];

$query = "INSERT INTO batches(batch_title, batch_description, batch_start_date, batch_end_date, status_id) 
		   VALUES('".htmlspecialchars($batch_title)."', 
		   		  '".htmlspecialchars($batch_description)."', 
		   		  '".htmlspecialchars($batch_start_date)."', 
		   		  '".htmlspecialchars($batch_end_date)."', 
		   		  3)";
$result = mysqli_query($connection, $query);

	if( $result ){
		header("location:show_batches.php");
	}else{ 
		?> <script type="text/javascript"> alert("Batch not added"); </script> <?php
	}
}?>
<?php require_once("require/footer.php"); ?>
