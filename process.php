<?php 
	require_once("require/database_connection.php");
	session_start();
 
 // login validation -----------------------------------------------------------------------------------
if(isset($_REQUEST['login_btn'])){

//echo $_REQUEST['email'];
//echo $_REQUEST['password'];
		 

$query="SELECT * FROM users
		WHERE email = '".$_REQUEST['email']."' 
		AND password = '".$_REQUEST['password']."'
		AND status_id = 1
		AND is_approve = 'approved' "; 
$record = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($record)){

				$_SESSION['email'] 	= $row['email'];
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['last_name'] = $row['last_name'];
			
			//echo $row['email'];
			//echo $row['password']; 
	
	$query="SELECT * from user_role 
			WHERE user_id = '".$row['user_id']."'
			AND status_id = 1 ";
	$result = mysqli_query ($connection, $query);
	while($role = mysqli_fetch_assoc($result)){
			
			if($role['role_id'] == 3){
				header("location:admin/index.php?first_name=".$row['first_name']."&last_name=".$row['last_name']);
			}
			elseif($role['role_id'] == 2){
				header("location:teacher/index.php?first_name=".$row['first_name']."&last_name=".$row['last_name']."&user_role_id=".$role['user_role_id']."&user_id=".$row['user_id']);
			}
			elseif($role['role_id'] == 1){
				header("location:student/index.php?first_name=".$row['first_name']."&last_name=".$row['last_name']);
			}

		}
	}
}





// die();

// if($_SESSION['role_id']==1){
// 	echo "Admin";
// 	}
// 	echo $_SESSION['role_id'];



// 			$admin_email 	  = "admin@gmail.com";
// 			$admin_password   = "admin";

// 			$teacher_email 	  = "teacher@gmail.com";
// 			$teacher_password = "teacher";

// 			$student_email 	  = "student@gmail.com";
// 			$student_password = "student";


// if($email == $admin_email && $password == $admin_password)
// 	{
// 		header("location:admin/index.php");
// 	}
// else if($email == $teacher_email && $password == $teacher_password)
// 	{
// 		header("location:teacher/index.php");
// 	}
// else if($email == $student_email && $password == $student_password )
// 	{
// 		header("location:student/index.php");
// 	}
// else
// 	{
// 		header("location:login.php");
// 	}




	// Registration form Validation---------------------------------------------------------------------

if(isset($_REQUEST['register_btn'])){
	$first_name 	=	$_REQUEST['first_name'];
	$last_name 		=	$_REQUEST['last_name'];
	$email			=	$_REQUEST['email'];
	$password		=	$_REQUEST['password'];
	$gender			=	$_REQUEST['gender'];
	$date_of_birth	=	$_REQUEST['date_of_birth'];
	$image			=	$_FILES['image'];
	$home_town		=	$_REQUEST['home_town'];



	$status =true;
	$error	=null;
	$pattern_first_name = "/^[A-Z]{1}[a-z]{2,}$/";
	$pattern_email = "/^\w{3,11}@gmail.com$/"; 
	$pattern_password = "/^\w{4,}$/";
	$pattern_home_town = "/^\w{4,}/";



	if($first_name 	== '')
		{
			$status = false;
			echo $error .="<li>Please Enter First Name</li>";
		}
	else if(!preg_match($pattern_first_name, $first_name))
		{
			$status	= false;
			$error	.="<li>Invalid Input First Name</li>";
		}
	


	if($last_name =='')
		{
			$status = false;
			$error .="<li>Please Enter Last Name</li>";
		}
	else if(!preg_match($pattern_first_name, $last_name))
		{
			$status	=	false;
			$error .= "<li>Invalid input Last Name</li>";
		}

	if($email == '')
		{
			$status = false;
			echo $error .="<li>Please Enter Email Address</li>";
		}
	else if(!preg_match($pattern_email, $email))
		{
			$status = false;
			echo $error .="<li>Invalid input Email</li>";
		}

	if($password == '')
		{
			$status = false;
			$error .="<li>Please Enter Password</li>";
		}
	else if(!preg_match($pattern_password, $password))
		{
			$status = false;
			$error .="<li>Invalid input Password</li>";
		}

	
	if($gender == null)
		{
			$status = false;
			$error .="<li>Please Specify Gender</li>";  
		}
	

	if($image == null)
		{
			$status = false;
			echo $error .="<li>Profile not Found</li>";
		}
	else
		{
			if($image['size'] <= 1000000)
				{
				
				}
			else
				{
					echo "File must Be Less Then 1 MB";
				}
		}


	if($home_town == null)
		{
			$status = false;
		echo	$error .="<li>Enter Home Town Address</li>";
		}
	elseif (!preg_match($pattern_home_town, $home_town)) 
		{
			$status = false;
		echo	$error .="<li>Invalid Home Town Address</li>";
		}

if($status)
	{

	$query ="INSERT INTO users(first_name, last_name, email, password, gender, date_of_birth, image, home_town, status_id , created_at) 
			 	  VALUES ('".htmlspecialchars($first_name)."', 
					 	  '".htmlspecialchars($last_name)."', 
					 	  '".htmlspecialchars($email)."',
					 	  '".htmlspecialchars($password)."', 
					 	  '".htmlspecialchars($gender)."', 
					 	  '".htmlspecialchars($date_of_birth)."', 
					 	  '".$image['name']."', 
					 	  '".htmlspecialchars($home_town)."', '2', now())";					

	$result = mysqli_query($connection, $query);

	if ($result) {

			// $store = $_SESSION['ok']; 
			// print_r($store);
			header("location:index.php");

		}
		else
		{
			echo "Data not inserted";
		}	
			
			
	}

else
	{
		header("location:register.php?msg=".$error);
	}	

}


	// Admin Registration form Validation---------------------------------------------------------------------

if(isset($_REQUEST['admin_add_user'])){
	$first_name 	=	$_REQUEST['first_name'];
	$last_name 		=	$_REQUEST['last_name'];
	$email			=	$_REQUEST['email'];
	$password		=	$_REQUEST['password'];
	$gender			=	$_REQUEST['gender'];
	$date_of_birth	=	$_REQUEST['date_of_birth'];
	$img			=	$_FILES['img'];
	$home_town		=	$_REQUEST['home_town'];
	$roles			=	$_REQUEST['roles'];
	$status 		=	$_REQUEST['status'];

// filetype($image);	
// print_r($_REQUEST);
// print_r($_FILES['img']);
// die();

	$status =true;
	$error	=null;
	$pattern_first_name = "/^[A-Z]{1}[a-z]{2,}$/";
	$pattern_email = "/^\w{3,11}@gmail.com$/"; 
	$pattern_password = "/^\w{5,}$/";
	$pattern_home_town = "/^\w{5,}/";



	if($first_name 	== '')
		{
			$status = false;
			echo $error .="<li>Please Enter First Name</li>";
		}
	else if(!preg_match($pattern_first_name, $first_name))
		{
			$status	= false;
			$error	.="<li>Invalid Input First Name</li>";
		}
	


	if($last_name =='')
		{
			$status = false;
			$error .="<li>Please Enter Last Name</li>";
		}
	else if(!preg_match($pattern_first_name, $last_name))
		{
			$status	=	false;
			$error .= "<li>Invalid input Last Name</li>";
		}

	if($email == '')
		{
			$status = false;
			echo $error .="<li>Please Enter Email Address</li>";
		}
	else if(!preg_match($pattern_email, $email))
		{
			$status = false;
			echo $error .="<li>Invalid input Email</li>";
		}

	if($password == '')
		{
			$status = false;
			$error .="<li>Please Enter Password</li>";
		}
	else if(!preg_match($pattern_password, $password))
		{
			$status = false;
			$error .="<li>Invalid input Password</li>";
		}

	
	if($gender == null)
		{
			$status = false;
			$error .="<li>Please Specify Gender</li>";  
		}
	

	if($img == null)
		{
			$status = false;
			echo $error .="<li>Profile not Found</li>";
		}
	else
		{
			if($img['size'] <= 1000000)
				{
				
				}
			else
				{
					echo "File must Be Less Then 1 MB";
				}
		}


	if($home_town == null)
		{
			$status = false;
		echo	$error .="<li>Enter Home Town Address</li>";
		}
	elseif (!preg_match($pattern_home_town, $home_town)) 
		{
			$status = false;
		echo	$error .="<li>Invalid Home Town Address</li>";
		}

if($status)
	{

	$query ="INSERT INTO users(first_name, last_name, email, password, gender, date_of_birth, image, home_town, status_id, is_approve, created_at) 
			 	  VALUES ('".htmlspecialchars($first_name)."', 
					 	  '".htmlspecialchars($last_name)."', 
					 	  '".htmlspecialchars($email)."',
					 	  '".htmlspecialchars($password)."', 
					 	  '".htmlspecialchars($gender)."', 
					 	  '".htmlspecialchars($date_of_birth)."', 
					 	  '".$img['name']."', 
					 	  '".htmlspecialchars($home_town)."', 
					 	  ".$status.", 'Approved', now())";					
	$result = mysqli_query($connection, $query);
	if ($result) {

	$user_id = mysqli_insert_id($connection);	
	$query = "INSERT INTO user_role(user_id, role_id, status_id, created_at)
			       VALUES( ".$user_id.",
			        	   '".htmlspecialchars($roles)."', 
					       '".htmlspecialchars($status)."', now())";
	$result_1 = mysqli_query($connection, $query);	
			
			header("location:admin/add_new_user.php");
		}
		else
		{
			echo "Data not inserted";
		}				
	}
else
	{
		header("location:admin/add_new_user.php?msg=".$error);
	}	

}

	// Update or Edit User-info-----------------------

if(isset($_REQUEST['edit_user_info'])){
	$first_name 	=	$_REQUEST['first_name'];
	$last_name 		=	$_REQUEST['last_name'];
	$email			=	$_REQUEST['email'];
	$password		=	$_REQUEST['password'];
	$gender			=	$_REQUEST['gender'];
	$date_of_birth	=	$_REQUEST['date_of_birth'];
		 $img			=	$_FILES['img'];
	$home_town		=	$_REQUEST['home_town'];
	$user_id = $_REQUEST['user_id'];
	
	
	// $roles			=	$_REQUEST['roles'];
	// $status 		=	$_REQUEST['status'];


// print_r($_FILES['img']);
// filetype($image);	
// print_r($_REQUEST);
// die();

	$status =true;
	$error	=null;
	$pattern_first_name = "/^[A-Z]{1}[a-z]{2,}$/";
	$pattern_email = "/^\w{3,11}@gmail.com$/"; 
	$pattern_password = "/^\w{5,}$/";
	$pattern_home_town = "/^\w{5,}/";



	if($first_name 	== '')
		{
			$status = false;
			echo $error .="<li>Please Enter First Name</li>";
		}
	else if(!preg_match($pattern_first_name, $first_name))
		{
			$status	= false;
			$error	.="<li>Invalid Input First Name</li>";
		}
	


	if($last_name =='')
		{
			$status = false;
			$error .="<li>Please Enter Last Name</li>";
		}
	else if(!preg_match($pattern_first_name, $last_name))
		{
			$status	=	false;
			$error .= "<li>Invalid input Last Name</li>";
		}

	if($email == '')
		{
			$status = false;
			echo $error .="<li>Please Enter Email Address</li>";
		}
	else if(!preg_match($pattern_email, $email))
		{
			$status = false;
			echo $error .="<li>Invalid input Email</li>";
		}

	if($password == '')
		{
			$status = false;
			$error .="<li>Please Enter Password</li>";
		}
	else if(!preg_match($pattern_password, $password))
		{
			$status = false;
			$error .="<li>Invalid input Password</li>";
		}

	
	if($gender == null)
		{
			$status = false;
			$error .="<li>Please Specify Gender</li>";  
		}
	

	if($img == null)
		{
			$status = false;
			echo $error .="<li>Profile not Found</li>";
		}
	else
		{
			if($img['size'] <= 1000000)
				{
				
				}
			else
				{
					echo "File must Be Less Then 1 MB";
				}
		}


	if($home_town == null)
		{
			$status = false;
		echo	$error .="<li>Enter Home Town Address</li>";
		}
	elseif (!preg_match($pattern_home_town, $home_town)) 
		{
			$status = false;
		echo	$error .="<li>Invalid Home Town Address</li>";
		}

if($status){
	 $query="UPDATE users SET 
			first_name = '".htmlspecialchars($first_name)."',
			last_name  = '".htmlspecialchars($last_name)."', 
			email = '".htmlspecialchars($email)."',
			password = '".htmlspecialchars($password)."',
			gender = '".htmlspecialchars($gender)."',
			date_of_birth = '".htmlspecialchars($date_of_birth)."',
			image = '".$img['name'] ."',
			home_town = '".htmlspecialchars($home_town)."',
			status_id = 1, is_approve = 'approved', updated_at = now() 
			WHERE user_id = '".$user_id."'  ";

	$result_edit = mysqli_query($connection, $query);
	if ($result_edit) {

	// $user_id = mysqli_insert_id($connection);	
	// $query = "INSERT INTO user_role(user_id, role_id, status_id, created_at)
	// 		       VALUES( ".$user_id.",
	// 		        	   '".htmlspecialchars($roles)."', 
	// 				       '".htmlspecialchars($status)."', now())";
	// $result_1 = mysqli_query($connection, $query);	
			
			header("location:admin/all_users.php");
		}
		else
		{
			echo "Data not inserted";
		}				
	}
else
	{
		header("location:admin/edit_user_info.php?msg=".$error);
	}	

}




	
?>