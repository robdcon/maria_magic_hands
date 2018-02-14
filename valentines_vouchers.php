<?php /* Template Name: Valentines Vouchers */ ?>

<?php get_header(); ?>
	
	<section>

		<div id="gift-vouchers">
			
			<div id="logo" class="center">				
					<?php echo "<h1><img src='".get_template_directory_uri()."/img/mariamagichands-lilac-lite-to-dark.png' class='logo-img' alt='logo'></h1>"?>					
			</div>
			<!-- <div class="voucher-link-container">
				<a href="mailto:mariamagichands@yahoo.ie?Gift Voucher Request" class="voucher-request">Request Gift Voucher</a>
			</div> -->
			<h2>Valentines Gift Vouchers</h2>

			<div id="voucher-container">

				<ul id="voucher-list">

						<?php echo "<li class='voucher'><div class='voucher-back'><img alt='voucher' src='".get_template_directory_uri()."/img/valentines_back_purple.png'></div></li>";?>
						<?php echo "<li class='voucher'><div class='voucher-back'><img alt='voucher' src='".get_template_directory_uri()."/img/valentines_back_pink.png'></div></li>";?>
					
				</ul>
	
				<div id="buy-now-container">

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LR5UESKMXPXHJ">
<table>
<tr><td><input type="hidden" name="on0" value="Pamper Package Options">Pamper Package Options</td></tr><tr><td><select name="os0">
	<option value="Pamper Package">Pamper Package €75.00 EUR</option>
	<option value="Top 2 Toe Pamper Package">Top 2 Toe Pamper Package €85.00 EUR</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>




				</div><!--buy now container-->

			</div><!--voucher container-->

		</div>

	</section>

<?php get_footer(); ?>