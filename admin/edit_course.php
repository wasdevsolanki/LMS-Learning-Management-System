<?php ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
    <h1 class="display-6 p-5 text-center">Edit Course</h1>
    <form method="POST" action="edit_course.php">
        <table id="example" class="display">
            <thead>
                <tr>     	
                    <th>#</th>
                    <th>Course Title</th>
                    <th>Course Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $query = "SELECT * FROM courses"; 
                $result = mysqli_query($connection, $query);        
                if($result->num_rows) { ?>        
                    <tr>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>    
                        <td><?php echo $row['course_id']; ?></td>
                        <td><?php echo $row['course_title']; ?></td>
                        <td><?php echo $row['course_description']; ?></td>
                        <td>
                            <?php if($row['status_id'] == 1)
                                { echo "Active"; }
                                else if($row['status_id'] == 2)
                                { echo "InActive"; } 
                            ?>
                        </td>
                        <td>
                            <form method="POST" action="edit_course.php">
                                <input type="hidden" name="course_id" value="<?php echo $row['course_id']; ?>">
                                <!-- <input type="submit" name="active_course" value="Edit" class="btn border"> -->
                                <button type="submit" name="edit_course" class="btn border">Edit</button>
                                <button type="submit" name="active_course" class="btn border bg-success text-light">Active</button>
                            	<button type="submit" name="inactive_course" class="btn border bg-danger text-light">In-Active</button>
                                
                            </form>    
                        </td>
                    </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </form>
</div>
<?php  
// Edit Course

// Active Course 
if(isset($_POST['active_course'])){

    $course_id = $_POST['course_id'];
    $query = "UPDATE courses SET status_id = 1 WHERE course_id = ".$course_id." ";
    $result_2 = mysqli_query($connection, $query);
    if($result_2) { header("location:edit_course.php");
    }
    else { echo "Not Inserted";
    }
}

// Inactive Course
if(isset($_POST['inactive_course'])){
    $course_id = $_POST['course_id'];
    $query = "UPDATE courses SET status_id = 2 WHERE course_id = ".$course_id." ";
    $result_3 = mysqli_query($connection, $query);

    if($result_3){  header("location:edit_course.php");
    } else {  echo "Not Inserted"; }
} ?>

<?php require_once("require/footer.php"); ?>