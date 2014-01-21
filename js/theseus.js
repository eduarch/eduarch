(function(w, j) {

var app = w.theseus = {};

app.form = {};
app.fn = {};

var parse_fn = {
	'complete-trim': function(string) {
		return string.replace(/\s+/g, ' ');
	},
	'title_case': function(string) {
		var els = string.split(' ');
		for(var index in els) {
			var word = els[index];
			if(word.length > 0) {
				els[index] = word[0].toUpperCase();
				if(word.length > 0)
					els[index] += word.substr(1);
			}
		}
		return els.join(' ');		
	}
};

var form_error_event_binder = function(input, field, event, callback) {
	input.bind(event, function(e) {
		if(typeof(callback) != 'undefined')
			callback(e);
		field.find('small.error').remove();
		input.unbind(event);
	});
};

var field_ajax = function(url, method, input) {
	$.ajax({
		url: url,
		type: method,
		data: input.serialize(),
		success: function(response) {
			response = JSON.parse(response);
			if(response['valid']) {
				if(typeof(app.fn[url]) != 'undefined')
					app.fn[url](response['data']);

				var message = response['message'];
				if(typeof(message) != 'undefined')
					input.after('<small class="success">' + message[input.attr('name')] + '</small>');
			} else {
				var error = response['error'];
				input.after('<small class="error">' + error[input.attr('name')] + '</small>');
			}
		}
	}, 'json');
};

var clear_field = function(field) {
	field.find('small.error').remove();
	field.find('small.success').remove();
};

app.form = {
	init: function() {
		var forms = $('form[data-form]');
		
		forms.each(function() {

			var form = $(this);
			var action = form.data('action');
			var method = form.attr('method');
			var fields = form.find('[data-field]');

			form.parent('[data-reveal]').on('closed', function() {
				form.find('small.error').remove();
				form.find('small.success').remove();
				form[0].reset();
			}).on('opened', function() {
				form.find('[name]').each(function() {
					$(this).focus();
					return false;
				});
			});

			fields.find('input[type="radio"]').focus(function() {
				$(this).attr('checked', '');
			});

			fields.filter('[data-parse]').each(function() {
				var field = $(this);
				var input = field.find('[name]');
				var parse = field.data('parse').split('|');

				input.keyup((function() {
					var change = '';
					return function(e) {
						var rs = input.val();
						if(change != rs) {
							for(var index in parse) {
								var fn = parse[index];
								if(typeof(parse_fn[fn]) != 'undefined')
									rs = parse_fn[fn](rs);
							}
							change = rs;
							input.val(rs);
						}
						
					}
				})());
			});

			fields.filter('[data-validate]').each(function() {
				var field = $(this);
				var input = field.find('[name]');
				var url = field.data('validate');

				if(input.is('input')) {
					switch(input.attr('type')) {
						case 'text': case 'email': case 'password':
							input.bind('keydown', function(e) {
								if(e.keyCode != 9)
									clear_field(input.parent());
							});

							input.bind('blur', function(e) {
								if(input.parent().find('small.error').length == 0) {
									clear_field(input.parent());
									field_ajax(url, method, input);
								}
							});
						break;
					}
				}
			});

			fields.filter('[data-get]').each(function() {

				var field = $(this);
				var url = field.data('get');
				$.ajax({
					url: url,
					type: 'post',
					success: function(data) {
						if(typeof(app.fn[url]) != 'undefined')
							app.fn[url](JSON.parse(data), $(field.data('target')));
					}
				}, 'json');
			});

			form.submit(function(e) {


				$.ajax({
					url: action,
					type: method,
					data: form.serialize(),
					success: function(response) {
						response = JSON.parse(response);
						form.find('small.error').remove();
						if(response['valid']) {
							if(typeof(response['redirect']) != 'undefined')
								window.location.replace(response['redirect']);
							if(typeof(app.fn[action]) != 'undefined')
								app.fn[action](response['data']);
						} else {
							var errors = response['errors'];
							var focused = false;
							fields.each(function() {
								var field = $(this);
								var input = field.find('[name]');
								
								if(typeof(errors[input.attr('name')]) != 'undefined') {
									if(focused == false) {
										focused = true;
										input.focus();
									}

									input.after('<small class="error">' + response['errors'][input.attr('name')] + '</small>');

									switch(input.attr('type')) {
										case 'text': case 'email': case 'password':
											form_error_event_binder(input, field, 'keydown');
										break;
									}
								}
							});
						}
					}
				}, 'json');

				e.preventDefault();
				return false;
			});
		});
	}
};

app.modal = {
	init: function() {

	}
};

app.init = function() {
	app.form.init();
	app.modal.init();
};

})(window, jQuery);