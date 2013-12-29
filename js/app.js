(function() {

var show_off_canvas = (function() {
	var large_content = $('#large-content');
	var dashboard_left = $('#dashboard-left-menu');
	//var dashboard_right = $('#dashboard-right-menu');
	var dashboard_content = $('#dashboard-content');
	var main_content = $('#main_content');

	var canvas_left = $('#dashboard-left-canvas');
	var canvas_content = $('#canvas-content');
	//var canvas_right = $('#dashboard-right-canvas');

	var left_html = dashboard_left.html();
	var content_html = dashboard_content.html();
	//var right_html = dashboard_right.html();

	return function() {
		if(dashboard_left.length > 0) {
			if(large_content.css('display') == 'none') {

				dashboard_left.html('');
				canvas_left.html(left_html);

				dashboard_content.html('');
				canvas_content.html(content_html);

				/*dashboard_right.html('');
				canvas_right.html(right_html);*/

			} else {
				dashboard_left.html(left_html);
				canvas_left.html('');

				dashboard_content.html(content_html);
				canvas_content.html('');

				/*dashboard_right.html(right_html);
				canvas_right.html('');*/
			}
		}
	};
})();

show_off_canvas();

$(window).resize((function() {
	var id ;

	return function() {
		clearTimeout(id);
		id = setTimeout(show_off_canvas, 10);
	};
})());

})();


