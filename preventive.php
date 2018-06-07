<?php include ('header.php'); 
include ('functions.php');
$sql1 = mysqli_query($mysqli,"SELECT * FROM users");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=75;
}
?>
<div class="ch-container">
<div class="row">
 <?php include('left_sidebar.php');  ?>

 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
<div class="box-inner">
<script src="js/preventive.js"></script>		
				<?php 

 $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT  * from users";

	// mysqli select query
	$results = $mysqli->query($query);

	// mysqli select query
	?>

 <div class="">
        <div class="">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel" id="myNav">
                    <li id="navStep1" class="li-nav active" step="#step-1">
                        <a>
                            <h4 class="list-group-item-heading">Step 1</h4>
                            <p class="list-group-item-text">First step description</p>
                        </a>
                    </li>
                    <li id="navStep2" class="li-nav disabled" step="#step-2">
                        <a>
                            <h4 class="list-group-item-heading">Step 2</h4>
                            <p class="list-group-item-text">Second step description</p>
                        </a>
                    </li>
                    <li id="navStep3" class="li-nav disabled" step="#step-3">
                        <a>
                            <h4 class="list-group-item-heading">Step 3</h4>
                            <p class="list-group-item-text">Electrical Checks</p>
                        </a>
                    </li>
                    <li id="navStep4" class="li-nav disabled" step="#step-4">
                        <a>
                            <h4 class="list-group-item-heading">Step 4</h4>
                            <p class="list-group-item-text">Second step description</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <form class="">
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    
                    <!-- <form> -->

                    <div class="container col-xs-12">
                        <div class="form-group" >
         <div class='messages alert '> </div>
	<div class="form-group col-md-6">
		
		<label class="control-label col-xs-4" for="fname">Select Region:</label>
		<div class=" input-group col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $mysqli->query("SELECT * FROM regions  ORDER BY id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>

    <select class='form-control' name="property" id="property">
        <option value="">Select Region</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['unique_code'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Property not available</option>';
        }
        ?>
    </select>
	</div>
	</div>
	
	
<div class=" form-group  col-md-6">
	<label class="control-label col-xs-4" for="fname">Select Site:</label>
	<div class="input-group  col-xs-8">
			<select class=' form-control' name="unit" id="state">
        <option value="">Select Region first</option>
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Site ID:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Site_ID" type="text" placeholder="Site ID:" value="" id='Site_ID' readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Site Owner:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class=" form-group col-md-6 ">
				        <label class="control-label col-xs-4" for="fname">Capture Date:</label>
				            <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="capture_date" placeholder="Capture Date" data-date-format="<?php echo DATE_FORMAT ?> " />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Site Type:</label>
  <div class="input-group col-xs-8">
			<select class='form-control' name="priority" id="priority">
        <option value="Greenfield">Greenfield</option>
		<option value="Rooftop">Rooftop</option>
		<option value="Wall">Wall</option>
		<option value="Other">Other</option>
		
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Site Status:</label>
  <div class="input-group col-xs-8">
			<select class='form-control' name="priority" id="priority">
        <option value="TKL Property">TKL Property</option>
		<option value="TKL Lease">TKL Lease</option>
		<option value="TKL Tower co-location compound">TKL Tower co-location compound</option>
		<option value="TKL compound co-location tower">TKL compound co-location tower</option>
		<option value="TKL compound co-location tower">TKL compound co-location tower</option>
		<option value="Full Safaricom co-location">Full Safaricom co-location</option>
		<option value="Full Airtel co-location">Full Airtel co-location</option>
		<option value="EATON">EATON</option>
		
		<option value="Other">Other</option>
		
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Tower Type :</label>
  <div class="input-group col-xs-8">
			<select class='form-control' name="priority" id="priority">
        <option value="TKL Property">TKL Property</option>
		<option value="TKL Lease">TKL Lease</option>
		<option value="2 Pole">2 Pole</option>
		<option value="TKL compound co-location tower">TKL compound co-location tower</option>
		<option value="TKL compound co-location tower">TKL compound co-location tower</option>
		<option value="Full Safaricom co-location">Full Safaricom co-location</option>
		<option value="Full Airtel co-location">Full Airtel co-location</option>
		<option value="EATON">EATON</option>
		
		<option value="Other">Other</option>
		
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Tower Height (m):</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="reading" type="text" placeholder=" Tower Height (m):" value="" id='reading' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Aviation warning light:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Present and working">Present and working</option>
		<option value="Present not working">Present not working</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>

</div>
                    </div>
					
                    <input onclick="step1Next()" class="btn btn-md col-xs-3" value="Next">

                    <!-- </form> -->
                </div>
            </div>
        </div>
    </form>
    <form class="">
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                 

                    <!--<form>-->
                    <div class="container col-xs-12">
					 <fieldset>
    <legend class="box-border">Perimeter Configuration  </legend>
                      <div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Wall:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
	</diV>
	                 <div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Razor wire:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Electric fence:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Gate:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Intrusion alarm:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Security lighting:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Site Comments:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <textarea class="form-control" name="Owner" type="text" placeholder="Add any comments relating to the perimiter where attention is required:" value="" id='Owner' ></textarea>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Security Guard on Site:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">On site</option>
		<option value="Not Okay">Absent</option>
		<option value="Not present">Electronic security so no security guard</option>
		<option value="Not present">Rooftop so no physical security</option>
	
    </select>
	</div>
</div>

</fieldset>
<fieldset>
    <legend class="box-border">Compound Configuration  </legend>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Draingage:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Manhole covers:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Meter box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">ATS box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Okay </option>
		<option value="Not Okay">Not Okay</option>
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>	
			</fieldset>	
			
<fieldset>
    <legend class="box-border">Internal Signage *  </legend>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">No Smoking:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Manhole covers:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
         <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Meter box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
         <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">ATS box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>	
			</fieldset>	
			
			<fieldset>
    <legend class="box-border">External Signage *  </legend>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">No Smoking:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Manhole covers:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
         <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">Meter box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
         <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-6 ">

<label class="control-label col-xs-4" for="text">ATS box:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>	
			</fieldset>
                    </div>
		
                    <!--</form> -->

                    <input onclick="prevStep()" class="btn button " value="Prev">
                    <input onclick="step2Next()" class="btn button" value="Next">

                </div>
            </div>
        </div>
    </form>
    <form class="">
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1 class="text-center"> </h1>

                   <div class="form-group col-md-12">
<label class="control-label col-xs-4" for="text">Phase to Phase Voltages & Input :</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Site_ID" type="text" placeholder="Site ID:" value="" id='Site_ID' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12">
<label class="control-label col-xs-4" for="text">Phase to Neutral Voltages & Input :</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12">
<label class="control-label col-xs-4" for="text">Phase to Earth Voltage & Input :</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Site_ID" type="text" placeholder="Site ID:" value="" id='Site_ID' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12">
<label class="control-label col-xs-4" for="text">Neutral to Earth Voltage :</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-4" for="text">Check lightning protectors for visual physical damage:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>	
<div class="form-group col-md-12 ">

<label class="control-label col-xs-4" for="text">Check for defective Surge arrestors (internal DB):</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-4" for="text">Check for exposed conductors of cables *:</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-4" for="text">Test Automatic Change-over between Commercial Power and DEG (where applicable):</label>
<div class="input-group col-xs-8">
	<select class='form-control' name="priority" id="priority">
        <option value="Okay">Present </option>		
		<option value="Not present">Not present</option>
	
    </select>
	</div>
</div>

                    <input onclick="prevStep()" class="btn button" value="Prev">
                    <input onclick="step3Next()" class="btn button" value="Next">

                </div>
            </div>
        </div>
    </form>
    <form class="">

        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                  <fieldset>
    <legend class="box-border">Site Quality Checks  </legend>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-5" for="text">Signal Strength - 2G using NetworkCellInfoLite (dB):</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-5" for="text">Signal Strength - 3G using NetworkCellinfoLite (dB):</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-5" for="text">Signal Strength - 4G using NetworkCellinfoLite (dB):</label>

 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-12 ">

<label class="control-label col-xs-5" for="text">Draingage:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="Owner" type="text" placeholder="Site Owner:" value="" id='Owner' >
  <span class="help-block" id="error"></span> 
</div>
</div>	
			</fieldset>	

                    <!--<form></form> -->
                    <input onclick="prevStep()" class="btn button" value="Prev">
                    <input class="btn btn-md btn-primary" value="Send">
                </div>
            </div>
        </div>
    </form>



<?php
include('footer.php');
?>