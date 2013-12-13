(function() {
	$('.click-icon').click(function(event) {
		elem = $(this).find('i');
		if(elem.attr('class').indexOf('glyphicon-chevron-down') >= 0) {
			elem.removeClass('glyphicon-chevron-down').
				addClass('glyphicon-chevron-right');
		} else {
			elem.
				removeClass('glyphicon-chevron-right').
				addClass('glyphicon-chevron-down');
		}
	});

	var content = $('#page_content');
	$('.content a').click(function(event) {
		event.preventDefault();

		href = $(this).attr('href');

		var req = $.ajax({
			url: href,
			type: 'post'
		});

		req.done(function(data) {
			content.html(data);
		});
	});
})();