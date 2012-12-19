//execute jQUery functions only after jQuery JS has loaded
$(function (){
	//add bootstrap affix to nav
	$('#primary-nav').attr('data-spy','affix');
	$('#primary-nav').attr('data-offset-top','100');
});	
//	$('#main .row .span9').click(function(){
//		$(this).addClass('');
//	});
//	
//	$('#main .row .span3').hover(
//			function(){
//				$(this).addClass('highlight');
//			},
//			function(){
//				$(this).removeClass('highlight');
//			}
//	);
//	
//	//capture double click of paragraphs
//	$('.story-content p').dblclick(function(){
//		$(this).fadeOut(1000);
//	});
//
//	//listen for key up events
//	$(document).keyup(function(e){
//		switch(e.which){
//		case 76:// l
//			// get the url for wp-admin
//			var url = $('footer a.login').attr('href');
//			window.location = url;
//			break;	
//		}
//	}
//)}
//);
//	
