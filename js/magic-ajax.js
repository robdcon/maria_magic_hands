	function getTreatment(treatmentName) 
{
	var treatmentObj = new Treatment(); 
	var txt = '';

	$.ajax(
	{

		url:'treatmentsinfo.json',
		type:'GET',
		dataType:'json',
		success:function(response)
		{			
			$.each(response.treatments, function(index)
			{
				if (response.treatments[index].title == treatmentName) 
				{
					treatmentObj.treatmentTitle = response.treatments[index].title;

					treatmentObj.treatmentTag = response.treatments[index].tag;

					treatmentObj.treatmentImage = response.treatments[index].image;
				};
				
			})
			txt += '<h1>' + treatmentObj.treatmentTitle + '</h1>' +
				   '<h2>' + treatmentObj.treatmentTag + '</h2>' +
				   '<img src="img/' + treatmentObj.treatmentImage + '" alt="treatment image">';
			
				$('#treatment-display').fadeOut(100, function()
				{
					$('#treatment-display').html(txt);

				}).fadeIn(100);
				
			
		},
		error : function (xhr, ajaxOptions, thrownError)
	    {  
	        console.log(xhr.status);          
	        console.log(thrownError);

	    } 


	})
}
window.onload = function()
{
	var d = new Date(1406106000)
	console.log(d)
}