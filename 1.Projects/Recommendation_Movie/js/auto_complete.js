$(function() {
	$('#auto_autocomplete').autocomplete({
	source: "./get_title.php",
	minLength: 1,
	select: function(event, ui) { 
        $("#auto_autocomplete").val(ui.item.movieId);
        $("#auto_autocomplete").attr('name', 'movieId');
        $("#search-form").submit();
      }
	});
});