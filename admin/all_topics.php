<?php 
ob_start(); ob_clean();
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>

<div class="col-sm-9">
    <h1 class="display-6 p-5 text-center">All Topics</h1>
    <form method="POST" action="all_topics.php">
        <table id="example" class="display">
            <thead>
                <tr>     	
                    <th>#</th>
                    <th>Topic Title</th>
                    <th>Topic Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
                <?php $count = 1;
                $query = "SELECT * FROM topics"; 
                $result = mysqli_query($connection, $query);        
                if($result->num_rows){ ?>        
                    <tr><?php 
                        while($row = mysqli_fetch_assoc($result)){ ?>    
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['topic_title']; ?></td>
                            <td><?php echo $row['topic_description']; ?></td>
                            <td><?php  if($row['status_id'] == 1){ echo "Active"; }
                                else if($row['status_id'] == 2){ echo "InActive"; } 
                            ?></td>
                            <td>
                                <form method="POST" action="all_topics.php">
                                    <input type="hidden" name="topic_id" value="<?php echo $row['topic_id']; ?>">
                                    <!-- <button type="submit" name="edit_course" class="btn border">Edit</button> -->
                                    <button type="submit" name="active_topic" class="btn border bg-success text-light">Active</button>
                                	<button type="submit" name="inactive_topic" class="btn border bg-danger text-light">In-Active</button>
                                </form>    
                            </td>
                    </tr>
                        <?php }
                }?>

            </tbody>
        </table>
    </form>
</div>

<?php  
// Active Topic 
if(isset($_POST['active_topic'])){
    $topic_id = $_POST['topic_id'];
    $query = "UPDATE topics SET status_id = 1 WHERE topic_id = ".$topic_id." ";
    $result_2 = mysqli_query($connection, $query);
    if($result_2){ header("location:all_topics.php"); }
}

// Inactive Topics
if(isset($_POST['inactive_topic'])){
    $topic_id = $_POST['topic_id'];
    $query = "UPDATE topics SET status_id = 2 WHERE topic_id = ".$topic_id." ";
    $result_2 = mysqli_query($connection, $query);
    if($result_2){ header("location:all_topics.php"); }
}?> <?php require_once("require/footer.php"); ?>