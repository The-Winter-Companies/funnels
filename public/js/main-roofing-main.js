(function () {

    //namespace objects
    var homehub;
    homehub = {
		//if template is the landing page
        homepage: function () {
          home_page = true;
        },
		power_company: function(state){
			var company = JSON.parse(power_company);
			var result = company[state];
			var $s = $('<option>');
			$s.val('');
			$s.html('Select energy provider');
			$('#utility_provider').append($s);

			for (var i = 0; i < result.length; i++) {
			  var $o = $('<option>');
			  $o.val(result[i].name);
			  $o.html(result[i].name);
			  $('#utility_provider').append($o);
			}
		}
		
    };
    window.hh = homehub;

	

})();
