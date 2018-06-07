<?php include ('header.php');
include ('functions.php');
$pageid=7;
?>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script type="text/javascript">
    $(function () {
    $('#new_user').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/O-Mapp/ajax/new_user.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                   var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#new_user').find('.messages').html(alertBox);
                        $('#new_user')[0].reset();
						//window.location.reload();
                    }
                }
				
            });
            return false;
        }
    })
});
    </script>

<script type="text/javascript">
function do_login()
{
 var email=$("#pfno").val();
 var pass=$("#pfno").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
dataType: 'json',
  type:'post',
  url:'oracle.php',
  data:{
   do_login:"do_login",
   email:email,
   password:pass
  },
 success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#PFNO").val(obj.PFNO);
          $("#E_NAME").val(obj.E_NAME);
          $("#REGION").val(obj.REGION);
          $("#DEPARTMENT").val(obj.DEPARTMENT);
          $("#EMAIL").val(obj.EMAIL);
          $("#USER_NAME").val(obj.USER_NAME);
         // $("#mode").val(obj.mode);
          $("#DOMAIN_NAME").val(obj.DOMAIN_NAME);
          }
        }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>
   



<div class="ch-container">
<div class="row">

 <?php include('left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 ">
 <div class="row ">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row ">
		<div class="form-body">
   
	 <div id="errorDiv"></div>
	 
	<div class="panel panel-default">
	 <form class="form-horizontal" onsubmit="return do_login();" >
  <div class="input-group">
      <input type="text" class="form-control" id="pfno"  placeholder="Search PF...">
      <span class="input-group-btn">
	   <button class="btn btn-default" id="btn-signup" type="submit" name="button" value='submit'>SEARCH</button>
		
      </span>
	     </div>
		  </form>
		  </div>
		  <div class="form-control1">
 <form  method="POST" id="new_user" name="new_user" >
<div class='messages alert '> </div>
	<div class="form-group">
<label class="control-label col-xs-3" for="text">NAMES:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name ="E_NAME" value="" id="E_NAME" readonly>
</div>
 <span class="help-block" id="error"></span>   
</div>    
 <div class="form-group ">
<label class="control-label col-xs-3" for="text">PFNO:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="PFNO" id="PFNO" value="" readonly> 
 <span class="help-block" id="error"></span> 
</div> 
</div>      
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Username:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="USER_NAME" id="USER_NAME" value="" placeholder="Username" readonly>
  <span class="help-block" id="error"></span>   
</div>
</div> 
<div class="form-group ">
<label class="control-label col-xs-3" for="text">EMAIL:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="text" class="form-control" name="EMAIL" id="EMAIL" value="">
 <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group ">
<label class="control-label col-xs-3" for="text">DEPARTMENT:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="text" class="form-control" id="DEPARTMENT" name="DEPARTMENT" value="">
 <span class="help-block" id="error"></span> 
</div>
</div> 
<div class="form-group ">
<label class="control-label col-xs-3" for="text">REGION:</label>
<div class=" input-group  col-xs-5">
	<?php
    //Include database configuration file
    
 $mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

    //Get all country data
    $query = $mysqli->query("SELECT * FROM regions  ORDER BY id ASC");
    
    //Count total number of rows
	if (!$query) {
    trigger_error('Invalid query: ' . $mysqli->error);
}
    $rowCount = $query->num_rows;
	//mysqli_num_rows($query);
	
	
    ?>
    <select class='form-control' name="region" id="role">
        <option value="">Select Role</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">No Region Created</option>';
        }
        ?>
    </select>
	
</div>

</div> 	 
 <div class="form-group ">
<label class="control-label col-xs-3" for="text">Phone:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
</div>
</div> 
<div class="form-group ">
<label class="control-label col-xs-3" for="fname">USER TYPE:</label>
<div class=" input-group  col-xs-5">  
   <select class="form-control" name="type" id="type">
		<option value="user">USER</option>
        <option value="admin">ADMIN</option>
		<option value="rtm">RTM</option>
		<option value="noc">NOC</option>
      </select>
</div>
</div>
		<input type="hidden" name="ADDEB_BY" value="<?php echo $_SESSION['USERNAME']; ?> "/>

<div class="form-group ">
<label class="control-label col-xs-3" for="text"></label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <button class="btn btn-default"  type="submit" name="submit" >REGISTER</button>
		
</div>
</div>  
          
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php  include ('footer.php'); ?>
