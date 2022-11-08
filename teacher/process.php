<?php 
if(isset($_REQUEST['enrolled_users'])){
$batch_course_id = $_REQUEST['batch_course_id'];

    header("location:view_users.php?batch_course_id=".$batch_course_id);
}




?>