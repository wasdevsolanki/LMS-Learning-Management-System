<?php 
require_once("require/header.php"); 
require_once("../require/database_connection.php");
?>
<div class="col-sm-9">
    <h1 class="display-6 p-5 text-center">Batches <!-- <span class="fs-5">(Active | In-Active)</span> --></h1>
<!-- data Table Record -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            	<th style="width:3px;">Batch ID</th>
                <th>Batch Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <td>Status</td>
                <td>Action</td>                
            </tr>
        </thead>
        <tbody>
        <?php $count = 1;
        $query = "SELECT * FROM batches ORDER BY batch_id DESC";
        $result = mysqli_query($connection, $query);
        if($result->num_rows){
        ?><tr>
            <?php 
            while($row = mysqli_fetch_assoc($result)){    
            ?>               	
                <td class="text-center"><?php echo $count++ ; ?></td>
                <td class="text-center"><b><?php echo $row['batch_title']; ?></b></td>
                <td width="500" style="font-size: 0.8em"><?php echo $row['batch_description']; ?></td>
                <td><?php echo $row['batch_start_date']; ?></td>
                <td><?php echo $row['batch_end_date']; ?></td>
                <td><?php if($row['status_id'] == 1 )
                    {   echo "<b>Active</b>";  }
                    elseif($row['status_id']==2) { 
                        echo "<b>In-Active</b>";  }
                     ?>         
                </td>
                <td style="display:inline-grid;">
                    <button type="submit" name="active_topic" class="btn border bg-success text-light" >Active</button>
                    <button type="submit" name="inactive_topic" class="btn border bg-danger text-light">In-Active</button>
                </td>
            </tr>
        <?php 
            }
        }
        ?>                                
        </tbody>
        <tfoot>
            <tr>
            	<th>Batch ID</th>
                <th>Batch Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th> 
                <td>Status</td>
                <td>Action</td>
            </tr>
        </tfoot>
    </table>
<?php require_once("require/footer.php"); ?>

