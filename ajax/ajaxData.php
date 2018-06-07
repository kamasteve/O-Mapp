<?php
//Include database configuration file
include('config.php');

if(isset($_POST["property_id"]) && !empty($_POST["property_id"])){
    //Get all state data
	$region= $_POST['property_id'];
	echo $region;
    $query = $mysqli->query("SELECT * FROM telkom_sites WHERE Region='$region' ORDER BY Site_ID ASC");
    if (!$query) {
    trigger_error('Invalid query: ' . $mysqli->error);
	}
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Unit</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Site_ID'].'">'.$row['Sitename'].'</option>';
        }
    }else{
        echo '<option value="">No Vacant Unit</option>';
    }
}
function makeJsonResponse($my_result){
  		// initialize array
  		$arr=[];

	    /* fetch associative array */
	    while ($row = $my_result->fetch_assoc()) {
	  			// push row to array
    			array_push($arr,$row);
		  }

  		// return result
  		return json_encode($arr);
	}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
	$unit=$_POST["state_id"];
	
    //Get all city data
    $query = $mysqli->query("SELECT meter_number,serial_number,current_reading FROM meter_records WHERE site_id = '$unit' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
         echo makeJsonResponse($query);
    }else{
        echo 'no results found';
    }
}
?>