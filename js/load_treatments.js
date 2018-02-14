//Program to make an ajax request to load a list of treatments for the user to choose from
// function loadTreatmentTypes()
// {
// 	$('#treatment-type').focus(function()
// 	{
// 		$('#treatment-type').load('treatment_type.html');
// 	})
	
// }
// Load treatments

function loadTreatments() 
{
	
	$('#treatment-type').change(function() // When the option changes, execute the function to load the relevant cities
	{
		var treatmentType = ($(this).val().replace(/ /g,'_').toLowerCase());
		console.log(treatmentType)
		$("#treatment-list").load('options_' + treatmentType + '.html');

	})
}

// Treatment select area to load info for a chosen treatment

function loadTreatmentResults() // When the option changes, execute the function to load the relevant info
{
	$('#treatment-list').focus(function()
	{
		var treatmentName = $(this).val();
		getTreatment(treatmentName);	

		$('#treatment-list').change(function()
		{
			var treatmentName = $(this).val();
			getTreatment(treatmentName);	

		
		});

	});
}

//Call functions on document load

$(document).ready(function()
{
	loadTreatments();
	loadTreatmentResults();
});
