$(document).ready(function(){

	// Smooth page scroll to anchor link

	$('.feature-link').click(function(e)
	{
		console.log('success')
	    e.preventDefault();

	    $('html, body').animate({
	        scrollTop: $($(this).attr('href')).offset().top
	    }, 350, 'linear');
	});

})