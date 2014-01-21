<script type="text/javascript">

theseus.fn = {
	'user/countries': function(countries, target) {
		for(var index in countries) {
			var country = countries[index];
			target.append('<option value="' + country['id'] + '">' + country['name'] + '</option>')
		}
	}
};

</script>