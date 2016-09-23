jQuery.noConflict();
$ = jQuery;


$(document).ready(function(){
	

	// var data = {};
	
	// $.post('http://goorahna.com/api/ext/guest/register').success(function(reg_data) {
		
	// 	data = reg_data;
	// 	console.log();
	// 	// $('select#wave-select').html(wave_default +  wave_select);

	// }).error(function(race_data) {});

	// var data = $('#form').serialize();
	
	// console.log(data);

	// $.post('http://goorahna.com/api/ext/guest/register', data,
		
	// 	function(response){

	// 	}, function(response){

	// });

	$('#register').submit(function(){

		var data = $(this).serialize();

		console.log(data);
		
		event.preventDefault();
		return false;
	});


	
});


