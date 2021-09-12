<?php
include_once 'db_config.php';
if(isset($_POST['save']))
{
 $first_name = $_POST['fname'];
 $last_name = $_POST['lname'];
 $fathers_name = $_POST['fathername'];
 $dob = $_POST['dob'];
 $mobile = $_POST['mobile'];
 $schoolname = $_POST['schoolname'];
 $perm_address = $_POST['perm_address'];
 $grade = $_POST['grade'];
 $email = $_POST['email'];
 $course = $_POST['course'];
 $sql = "INSERT INTO `reg_form`(`fname`, `lname`, `fathername`, `dob`, `mobile`, `schoolname`, `perm_address`, `grade`, `email`, `course`) VALUES ('$first_name','$last_name','$fathers_name','$dob','$mobile','$schoolname','$perm_address','$grade','$email','$course')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
