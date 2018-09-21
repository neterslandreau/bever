$(function() {
/*	$('#description').markdown(); */

$('#description').summernote();

$('#toggle-panels').on('click', function() {
	$('#site-configuration').toggle();
	$('#site-projects').toggle();
});

});

