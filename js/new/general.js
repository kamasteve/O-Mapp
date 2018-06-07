var App = {
	show_loading:function() {
		$("#myModal").append("<div class='ajax_overlay'></div><div class='ajax_load'><img src='"+base_url+"images/loadingAnimation.gif' /></div>");
		$('.ajax_overlay, .ajax_load').show();
	},
	hide_loading:function() {
		$('.ajax_load, .ajax_overlay').hide();
	}
}
function get_owner_property(id){
	var val = 'change';
	var parms = 'id='+id+"&type_val="+val;
	$.ajax({
		type: "POST",
		url: base_url+'/ajax_handler.php',
		data: parms,
		success: function(str){ 
			$('#type_id').html(str);
		}
     });	
}
function get_owner_edit_property(id){
	var val = 'change';
	var parms = 'id='+id+"&type_val="+val;
	$.ajax({
		type: "POST",
		url: base_url+'/ajax_handler.php',
		data: parms,
		success: function(str){  //salert(str);
			$('#type_edit_id').html(str);
		}
     });	
}

function ajax_submit_edit_form(){
var ajaxData = new FormData(jQuery('#edit_tentant')[0]);
	ajaxData.append('type_val', 'edit_tentant');
	$.ajax({
		beforeSend: function(){ 
			App.show_loading();
		},
		complete: function(){   
			App.hide_loading();
		},
		type: "POST",
		url: base_url+'/ajax_handler.php',
		data: ajaxData,
		contentType: false,
		processData: false,
		success: function(str){ 
			if(str==1){
				$("#alert_msg").css('display','block');
				$("#alert_msg").html('Your have successfully add your tentant.');
				$('#alert_msg').scrollTop();
				setTimeout(function(){
				$("#alert_msg").fadeOut("slow", function () {});
					location.reload();
				}, 3000);
			}else{
				$("#alert_msg").css('display','block');
				$("#alert_msg").html('Error ocurred to add your tentant.');
				$('#alert_msg').scrollTop();
				setTimeout(function(){
				$("#alert_msg").fadeOut("slow", function () {});
					location.reload();
				}, 3000);
			}
		}
     });

}
	
function ajax_submit_form(){
	var ajaxData = new FormData(jQuery('#add_tentant')[0]);
	ajaxData.append('type_val', 'add_tentant');
	$.ajax({
		beforeSend: function(){ 
			App.show_loading();
		},
		complete: function(){   
			App.hide_loading();
		},
		type: "POST",
		url: base_url+'/ajax_handler.php',
		data: ajaxData,
		contentType: false,
		processData: false,
		success: function(str){ 
			if(str==1){
				$("#alert_msg").css('display','block');
				$("#alert_msg").html('Your have successfully add your tentant.');
				$('#alert_msg').scrollTop();
				setTimeout(function(){
				$("#alert_msg").fadeOut("slow", function () {});
					location.reload();
				}, 3000);
			}else{
				$("#alert_msg").css('display','block');
				$("#alert_msg").html('Error ocurred to add your tentant.');
				$('#alert_msg').scrollTop();
				setTimeout(function(){
				$("#alert_msg").fadeOut("slow", function () {});
					location.reload();
				}, 3000);
			}
		}
     });	
}

function delete_tenate(id){
		var agree = confirm("Are you sure, you want to delete it? ");
		if (!agree) {
			return false;
		}
		var ajaxData = 'id='+id+"&type_val=delete";
		$.ajax({
		beforeSend: function(){ 
			App.show_loading();
		},
		complete: function(){   
			App.hide_loading();
		},
		type: "POST",
		url: base_url+'/ajax_handler.php',
		data: ajaxData,
		success: function(str){ 
			if(str==1){
				$("#alert_msg1").css('display','block');
				$("#alert_msg1").html('Your have successfully delete your tentant.');
				setTimeout(function(){location.reload();$("#alert_msg").fadeOut("slow", function () {});}, 1000);
			}else{
				$("#alert_msg1").css('display','block');
				$("#alert_msg1").html('Error ocurred to delete your tentant.');
				setTimeout(function(){location.reload();$("#alert_msg").fadeOut("slow", function () {});}, 1000);
			}
		}
     });
}
