<script type="text/javascript">
(function() {

var form = $('#sign_in');
var login_msg = $('#login_message');

form.submit(function(event) {
	event.preventDefault();
	
	var request = $.ajax({
        url: "sign_in",
        type: "post",
        data: form.serialize(),
        dataType: "json",
    });

    request.done(function(data) {
    	login_msg.html('');
    	if(data.valid) 
    		window.location.href = data.redirect;
    	else {
    		login_msg.append('<br>');
    		login_msg.append(data.errors);
    		login_msg.find('p').
    			addClass('alert-box').
    			addClass('radius').
    			addClass('warning');
    		var email = form.find('input[name="user[user_email]"]');
    		email.focus(function() {
    			this.select();
    		});
    		email.focus();

    		var pass = form.find('input[name="user[user_pass]"]');
    		pass.val('');
    	}
    });

	/*posting.done(function(data) {
		if(data.valid == false) {
			login_msg = $('#login_message');
			for(var index in data.errors) {
				var div = '<div class="alert-box radius warning tag-error">' +
					data.errors[index] + '</div>';
				login_msg.append(div);
			}
		} else {
			window.location.href = data.redirect;
		}
	});*/
});

})();
</script>