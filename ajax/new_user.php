<?php
include_once('config.php');
    $DEPARTMENT = $_REQUEST['DEPARTMENT'];
	$ENAME = $_REQUEST['E_NAME'];
	$PFNO = $_REQUEST['PFNO'];
	$EMAIL = $_REQUEST['EMAIL'];
	$PHONE = $_REQUEST['phone'];
	$REGION = $_REQUEST['region'];
	$TYPE = $_REQUEST['type'];
	$USERNAME = $_REQUEST['USER_NAME'];
	$ADDEB_BY = $_REQUEST['ADDEB_BY'];
	$OTP= '1234';
$add_unit ="INSERT into users(DEPARTMENT,E_NAME,PFNO,EMAIL,tel_no,REGION,TYPE,USERNAME,ADDEB_BY,OTP) VALUES('$DEPARTMENT','$ENAME','$PFNO','$EMAIL','$PHONE','$REGION','$TYPE','$USERNAME','$ADDEB_BY','$OTP')";
 $result_addunits = mysqli_query($mysqli, $add_unit);

            if (!$result_addunits) {
             print "Error: " . $add_unit . "<br>" . mysqli_error($mysqli);
			}
			else{
			echo " USER Added Successfully";

}
?>