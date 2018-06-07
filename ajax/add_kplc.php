<?php
include_once('config.php');
    $region = $_REQUEST['property'];
	$site_id = $_REQUEST['unit'];
	$date = $_REQUEST['capture_date'];
	$previous_reading = $_REQUEST['current_reading'];
	$reading = $_REQUEST['reading'];
	$meter_number = $_REQUEST['meter_number'];
	$serial_number = $_REQUEST['serial_number'];
	//$photo = $_REQUEST['input-b3[]'];
	$image = $_FILES['image']['name'];
	$ADDEB_BY = $_REQUEST['ADDEB_BY'];
	$OTP= '1234';
$add_unit ="INSERT into meter_numbers(Station,site_id,date,old_reading,current_reading,meter_number,serial_number,photo_evidence,username) VALUES('$region','$site_id','$date','$previous_reading','$reading','$meter_number','$serial_number','$image','$ADDEB_BY')";
 $result_addunits = mysqli_query($mysqli, $add_unit);

            if (!$result_addunits) {
             print "Error: " . $add_unit . "<br>" . mysqli_error($mysqli);
			}
			else{
			echo "ok";

}
?>