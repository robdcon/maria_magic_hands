function Treatment()
{
	this.treatmentTitle;
	this.treatmentTag;
	this.treatmentCaption;
	this.treatmentImage;
	this.treatmentDescription;
	this.treatmentPricelist;

	this.setTitle = function(title)
	{
		this.treatmentTitle = title;	
	}
	this.getTitle = function()
	{
		return this.treatmentTitle;	
	}
}