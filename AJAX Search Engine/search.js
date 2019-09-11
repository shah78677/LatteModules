$(document).ready(function(){
	$('#search_input').keyup(function(){
		
		var terms = $(this).val();
		var table = $('#results_table');
		
		$(table).children().remove();
		
		if(terms == '')
		{
			$(table).children().remove();
		}
		
		$.ajax({
			url: 'http://localhost/get_books.php?b=' + terms,
			dataType: 'json',
			type: 'GET',
			cache: false,
			success: function(data) {
					$(data).each(function(index, value){
					$(table).append(
						'<tr>' +
						'<td>' +
						value.Name +
						'</td>' +
						'</tr>'
						);
				});	
			},
			error: function() {
				if(terms != '')
				{
					$(table).append(
					'<tr>' + 
						'<td> No matches found!</td>' +
					'</tr>');
				}
			}
		});
	});
});