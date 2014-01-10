<script type="text/javascript">

(function() {

$('#add-submit').click(function(e){
	var href = $(this).data('href');
	$.post(href, {'entity[name]': $('#add-name').val()},
	function(data) {
		if(data['success']) {
			location.reload();
		} else {
			for(var e in data['errors'])
				$('#' + e).append('<small class="error">' + e + '</small>');
			$(document).foundation();
		}
	}, 'json');

	e.preventDefault();
});

$('.remove').click(function(e) {
	var href = $(this).data('href');
	$('#remove-link').attr('href', href);
	e.preventDefault();
});

$('.view').click(function(e) {
	$.post($(this).attr('href'), function(data) {
		$('#view-id').text(data.id);
		$('#view-name').text(data.name);
	}, 'json');
	e.preventDefault();
});

$('#edit-modal').bind('opened', function() {
	$('#edit-name').focus();
});

$('#add-modal').bind('opened', function() {
	$('#add-name').focus();
});

var edit = null;
var search = null;

$('.edit').click(function(e) {
	search = $('.view').attr('href');
	edit = $(this).attr('href');

	$.post(search, function(data) {
		$('#edit-id').val(data.id);
		$('#edit-name').val(data.name);
		$('#edit-submit').attr('href', edit);
	}, 'json');
	e.preventDefault();
});

$('#edit-submit').click(function(e) {
	$.post(edit, {
		'entity[id]': $('#edit-id').val(),
		'entity[name]': $('#edit-name').val()
	}, function(data){
		if(data['success']) {
			location.reload();
		} else {
			$('#edit-errors').html(data['errors']);
			$(document).foundation();
		}
	}, 'json');
	e.preventDefault();
});

$('.other-close').click(function(e){
	$('.close-reveal-modal').click();
});

})();
	
</script>