
<?php echo 

"<div class='treatment-section'>

	<div id='$treatmentID' class='treatment'>

		<div class='treatment-container'>

			<div class='container'>

				<div class='header-row'>

					<div class='treatment-header'>					

							<h2>
								$treatmentTitle
							</h2>

					</div>

				</div><!--header row-->

				<div class='tag-row'>

					<div class='tag-container'>
						
						<h3 class='treatment-tag'>
							$treatmentTag
						</h3>

					</div><!--tag container-->

				</div><!--row-->

				<div class='treatment-content'>

					<div style='background-image:url(".get_template_directory_uri()."/img/$treatmentImage);"."' class='image-container'></div>

						<div class='price-container'>

							$treatmentPrices

						</div><!--price-container-->

					

				</div><!--row-->

				<button  class='treatments-page price-reveal'>Read More...</button>

				<div class='price-row'>

					<div class='offset col-sm-1 col-md-2'></div>
					<div class='treatment-description'>
					
						$treatmentDescription
					
					</div>

				</div><!--row-->

			</div><!--container fluid-->

		</div><!--treatment-container-->

	</div><!--treatment-->

</div><!--treatment section-->"

?>
