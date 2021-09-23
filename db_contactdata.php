<?php
include_once 'db_config.php';
if(isset($_POST['save']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $textmsg = $_POST['textmsg'];
 $sql = "INSERT INTO `contact_info`(`name`, `email`, `address`, `phone`, `textmsg`) VALUES ('$name','email','$address','$phone','$textmsg')";
 if (mysqli_query($conn, $sql)) {
		echo "Thanks for the submission. We will get back to you shortly. Please explore our other courses from the website";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
