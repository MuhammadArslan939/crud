<?php
session_start();
$errmsg_arr = array();
$errflag = false;

include('connect.php');

// new data

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

if($fname == '') {
	$errmsg_arr[] = 'You must enter your First Name';
	$errflag = true;
}
if($lname == '') {
	$errmsg_arr[] = 'You must enter your Last Name';
	$errflag = true;
}
if($age == '') {
	$errmsg_arr[] = 'You must enter your Age';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
// query
$sql = "INSERT INTO members (fname,lname,age) VALUES (:sas,:asas,:asafs)";
$q = $db->prepare($sql);
$q->execute(array(':sas'=>$fname,':asas'=>$lname,':asafs'=>$age));
header("location: index.php");


?>