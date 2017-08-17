//$(function () {
jQuery(document).ready(function() {
    $('#contactusform').validator();
    alert("hello");
    $('#contactusform').on('click', function (e) {
		alert("in to");
	    
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            alert($(this).serialize());
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
				   alert(data);
					var result=JSON.parse(data);
					
                    var messageAlert = 'alert-' + result.type;
                    var messageText = result.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
					
                        $('#contactusform').find('#msg').html(alertBox);
                        $('#contactusform')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
