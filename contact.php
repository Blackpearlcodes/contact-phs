<?php
// database connection code
if(isset($_POST['txtName']))
{

$con = mysqli_connect('localhost', 'root', 'Charbel','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Thank you. We will get back to you as soon as possible.";
}
}
else
{
	echo "Invalid Credentials, try again.";
}
?>