<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/myjs.js"></script>

<link href="css/styles.css" rel="stylesheet" >
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
$(function () {
    $('#login_otp').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/o-mapp/sendmail.php";
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
                        //$('#login_otp').find('.messages').html(alertBox);
                        //$('#edit_tentant')[0].reset();
						
                    }
                }
            });
            return false;
        }
    })
});
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
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Please Enter Your Phone Number</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login_otp" action="test.php" method="post" role="form" style="display: block;">
								 <div class='messages alert'>
 </div>
									<div class="form-group">
									<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">+254</span>
  <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1" required>
</div>
</div>
<div class="form-group">
										<div class="row">
		
		<div class="col-md-6">						
<button type="submit" class="form-control btn btn-login" name="login_otp" id="login_otp" >Send Verification</button>
</div>
<div class="col-md-6">	
<button type="button" class="form-control col-md-6 btn btn-login" onclick="location.href='login.php'" ><span class="glyphicon glyphicon-log-in"></span>  Login</button

</div>

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
	</div>
	</body>