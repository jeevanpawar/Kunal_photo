$(document).ready(function(){
	var sampleMenuStt, topBttStt, customizeMeStt, sampleMenuWithBttStt, sampleMenuWithBttSttOneActive, sampleFormStt;
	
	//init main menu
	sampleMenuStt = {
		'effect' : 'fx3',
		'particleWidth' : '9',
		'particleHeight' : '9',
		'labelActiveColor' : '#303030',
		'labelInactiveColor' : '#f0f0f0',
		'particleColorOne' : '#FF0000',
		'particleColorTwo' : '#CCCCCC',
		'background-color' : '#000000',
		'width' : '150',
		'height' : '35'
	};
	$('ul#menu a').lhpTwoColorButton(sampleMenuStt);
	$('ul#menu a').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
	

});