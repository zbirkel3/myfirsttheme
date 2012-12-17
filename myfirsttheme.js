//execute jQUery functions only after jQuery JS has loaded
$(function (){
	$('#main .row .span9').click(function(){
		$(this).addClass('highlight');
	});
	
	$('#main .row .span3').hover(
			function(){
				$(this).addClass('highlight');
			},
			function(){
				$(this).removeClass('highlight');
			}
	);
	
	//capture double click of paragraphs
	$('.story-content p').dblclick(function(){
		$(this).fadeOut(1000);
	});
});