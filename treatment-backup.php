
<?php 
echo 
"<div class='treatment' >
<!--style='background-image:url(".get_template_directory_uri().'/img/$treatmentImage'.")'-->

	<div class='treatment-container'>

		<div class='container-fluid'>

			<div class='header-row row'>

				<div class='treatment-header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>

					

						<h1>
							$treatmentTitle
						</h1>

					

				</div>

			</div><!--header row-->

			<div class='row'>

				<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>

					<div class='row'>

						<div class='treatment-description  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>

							<h2>
								$treatmentTag
							</h2>
						
							$treatmentDescription
						
						</div>

					</div><!--row-->

					<div class='row'>

						<div class='treatment-prices col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>

							$treatmentPrices

						</div><!--treatment prices-->

					</div><!--row-->

				</div><!--inner row container-->

				<div class='image-container col-xl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>

					<img src='".get_template_directory_uri()."/img/$treatmentImage"."'>

				</div>

			</div><!--row-->

		</div><!--container fluid-->

	</div><!--treatment-container-->

</div><!--treatment-->"
?>