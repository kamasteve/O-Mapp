
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://localhost/O-Mapp/ajax/ajaxData.php',
                data:'property_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
				dataType: 'json',
                url:'http://localhost/O-Mapp/ajax/data_preventive.php',
                data:'state_id='+stateID,
                success:function(html){
                    for(var i = 0; i < html.length; i++) {
          var obj = html[i];

          $("#Site_ID").val(obj.Site_ID);
          $("#Owner").val(obj.Owner);
          $("#SiteType").val(obj.SiteType );
		  $("#SiteType").val(obj.SiteType );
                }
				}
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
$(function () {
    $('#update_meter').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			var file_data = $('#input-b3').prop('files')[0];
			var form_data = new FormData();
        form_data.append('file', file_data);
            var url = "http://localhost/O-Mapp/ajax/add_kplc.php";
            $.ajax({
                type: "POST",
                url: url,
				//data : formData,
                data: $(this).serialize(),
				//data: formData,
                success: function (data)
                {
                    var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#update_meter').find('.messages').html(alertBox);
                        $('#update_meter')[0].reset();
						//window.location.reload();
                    }
                }
            });
            return false;
        }
    })
});
$("form#update_meter").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
var url = "http://localhost/O-Mapp/ajax/add_kplc.php";
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
 var currentStep = 1;

$(document).ready(function () {

    $('.li-nav').click(function () {

        var $targetStep = $($(this).attr('step'));
        currentStep = parseInt($(this).attr('id').substr(7));

        if (!$(this).hasClass('disabled')) {
            $('.li-nav.active').removeClass('active');
            $(this).addClass('active');
            $('.setup-content').hide();
            $targetStep.show();
        }
    });

    $('#navStep1').click();

});

        

function step1Next() {
    //You can make only one function for next, and inside you can check the current step
    if (true) {//Insert here your validation of the first step
        currentStep += 1;
        $('#navStep' + currentStep).removeClass('disabled');
        $('#navStep' + currentStep).click();
    }
}

function prevStep() {
    //Notice that the btn prev not exist in the first step
    currentStep -= 1;
    $('#navStep' + currentStep).click();
}

function step2Next() {
    if (true) {
        $('#navStep3').removeClass('disabled');
        $('#navStep3').click();
    }
}

function step3Next() {
    if (true) {
        $('#navStep4').removeClass('disabled');
        $('#navStep4').click();
    }
}
