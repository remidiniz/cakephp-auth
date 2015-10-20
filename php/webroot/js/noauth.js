
$(document).ready(function()
{	
	$.ajax({
        type: "get",
        url: 'http://core-starad24.webreliever.co.uk/index.php/roles/index.json',
        success: function(data) {
        	
        	var options = '';
        	
        	for (var i = data.roles.length - 1; i >= 0; i--) 
        	{
                options += '<option value="' + data.roles[i].id + '">' + data.roles[i].name + '</option>';
            }
               	
        	$('#sa-sign-up-role-input').html(options);
        },
        dataType: 'json'

    });
	

    $('#sa-sign-up-form-submit').click(function() {

        var data = $('#sa-sign-up-form').serialize();
        
        $.ajax({
            type: "post",
            url: 'http://core-starad24.webreliever.co.uk/index.php/users/add.json',
            data: data,
            success: function(data) {
                var alert_div_html = '<div class="alert alert-danger alert-dismissible">';
                if(data.response == 'The user has been saved.'){
                    alert_div_html = '<div class="alert alert-success alert-dismissible">';
                }
                $('#wdc-sign-up-form-flash').html(alert_div_html+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>'+
                    '</button>'+
                    data.response +
                    '</div>');
            },
            error: function(data) {
                $('#wdc-sign-up-form-flash').html(
                    '<div class="alert alert-error alert-dismissible">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>'+
                    '</button>'+
                    data.response +
                    '</div>');

            },
            dataType: 'json'

        });

    });
    
    

    $('#sa-sign-in-form-submit').click(function() {

        var data = $('#sa-sign-in-form').serialize();

        $.ajax({
            type: "post",
            url: 'http://core-starad24.webreliever.co.uk/index.php/users/signin.json',
            data: data,
            success: function(data) {

                var alert_div_html = '<div class="alert alert-danger alert-dismissible">';

                if(data.response == 'Login succeed!')
                {
                    window.location = '/';
                    alert_div_html = '<div class="alert alert-success alert-dismissible">';
                }

                $('#sa-sign-in-form-flash').html(
                    alert_div_html+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>'+
                    '</button>'+
                    data.response + " Redirecting..." +
                    '</div>');
                
              
                	window.location = data.heaviestRole.login_redirect_url;
            },
            error: function(data) {

                $('#sa-sign-in-form-flash').html(
                    '<div class="alert alert-error alert-dismissible">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>'+
                    '</button>'+
                    data.response +
                    '</div>');
            },
            dataType: 'json'
        });

    });

});
