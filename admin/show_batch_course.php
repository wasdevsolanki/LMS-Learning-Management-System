<?php 
ob_start();
ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
<h1 class="display-6 p-5 text-center">Batches & Courses</h1>

<?php 
    if(isset($_REQUEST['status'])){
        
    ?> 
    <center>
    <div class="alert alert-success d-flex align-items-center w-50" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>&nbsp;&nbsp;&nbsp;
        <div>
            <?php 
            if($_REQUEST['status'] == 4){
                echo "<b>Batch - Courses</b> has been complete"; 
            }else if($_REQUEST['status'] == 3){   
                echo "<b>Batch - Courses</b> in In-Process"; 
            }?>
        </div>
    </div>
    </center>
    <?php } ?>
<form method="POST" action="show_batch_course.php">
<table id="example" class="display">
    <thead>
        <tr>     	
            <th>#</th>
            <th>Batch</th>
            <th>Course</th>
            <th class="text-center"> Current Status</th>
            <th class="w-25 text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $count = 1; 
    $query= "SELECT `batches`.`batch_title`,`courses`.`course_title`, `batch_course`.`status_id`,`batch_course`.`batch_course_id`
            FROM batch_course , `batches`, `courses`
            WHERE `batch_course`.`batch_id` = `batches`.`batch_id`
            AND `batch_course`.`course_id`= `courses`.`course_id`";
    $result = mysqli_query($connection, $query);
     ?>   
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td class="text-center"><?php echo $count++ ;?></td> 
            <td><?php echo $row['batch_title']?></td>
            <td><?php echo $row['course_title']?></td>
            <td class="text-center">
                <?php   if($row['status_id'] == 3){ echo "In-Process"; }
                        elseif ($row['status_id']== 4){ echo "Complete"; } 
                ?>
            </td>
            <td class="text-center">
            <form method="POST" action="show_batch_course.php">
                <input type="hidden" name="batch_course_id" value="<?php echo $row['batch_course_id'] ?>">
                <button type="submit" name="complete" class="btn border bg-success text-light">Complete</button>
            	<button type="submit" name="inprocess" class="btn border bg-danger text-light">In-Process</button>
            </form>    
            </td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
</form>
</div>
<?php  
// Compelete Status
if(isset($_POST['complete'])){
    $query = "UPDATE batch_course SET status_id = 4 WHERE batch_course_id = '".$_REQUEST['batch_course_id']."' ";
    $result_2 = mysqli_query($connection, $query);
    if($result_2)
        {   $status = 4;
            header("location:show_batch_course.php?status=".$status); }
}
// Inprocess Status
if(isset($_POST['inprocess'])){
    $query = "UPDATE batch_course SET status_id = 3 WHERE batch_course_id = '".$_REQUEST['batch_course_id']."' ";
    $result_2 = mysqli_query($connection, $query);
    if($result_2)
        {  $status = 3 ;
         header("location:show_batch_course.php?status=".$status); }
}?>

<?php require_once("require/footer.php"); ?>