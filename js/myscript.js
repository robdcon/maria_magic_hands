

function revealPrices()
{
	$('.price-reveal').click(function()
	{
		var x = $(this);
		// x.next().toggleClass('hidden');
		x.next().fadeToggle();
		x.addClass('hidden');
	
	})
}

function bind()
{
	revealPrices();
}

function init() 
{
	bind();
}

window.onload = init;


