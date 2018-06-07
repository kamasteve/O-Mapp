<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/styles.css" rel="stylesheet" >
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
function do_login()
{
 var email=$("#emailid").val();
 var pass=$("#password").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'otp_validate.php',
  data:{
   do_login:"do_login",
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="dashboard.php";
  }
  else
  {
    $("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
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
<body  class="image-responsive">
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
						<div class="col-xs-3">
								
							</div>
							
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								 <form method="post"  onsubmit="return do_login();">
								 <div class='error alert'>
 </div>
									<div class="form-group">
									<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">+254</span>
<input type="text" class="form-control" placeholder="Phone" id="emailid" name="emailid" aria-describedby="basic-addon1" required>
</div>
</div>
 <div class="form-group">

    <input type="password" class="form-control" id="password" name="password" placeholder="Verification Code">
  </div>

										<div class="row">
							
<input type="submit" name="login" value="DO LOGIN" id="login_button">
</div>

										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></body>