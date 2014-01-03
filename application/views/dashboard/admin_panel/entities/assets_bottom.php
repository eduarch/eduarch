<script type="text/javascript">

(function() {

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

var search = null;
var edit = null;

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
	$.post(edit, JSON.stringify({
		'entity[id]': $('#edit-id').val(),
		'entity[name]': $('#edit-name').val()
	}), function(data){

	}, 'json');
	e.preventDefault();
});

$('.other-close').click(function(e){
	$('.close-reveal-modal').click();
});

})();
	
</script>