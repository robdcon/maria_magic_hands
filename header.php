
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109156094-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109156094-1');
</script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Rob Connolly">
<meta name="keywords" content="galway, massage, waxing, facials, nails, skin care, treatments, eyes, pedicure, pregnancy massage, deep tissue massage, leisureland, salthill">
<title>Galway Massage Therapy by Maria Magic Hands</title>

<!--JQUERY-->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!--BOOTSTRAP CDN-->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		


<?php wp_head();?>

</head>

<body id="body">
	
	<div id="wrapper">
		
		<header>


			<nav class="fixed">

			<div class="social-media-container-header">	
				<?php echo '<a href="https://www.facebook.com/MariaMagicHands" target="_blank"><span class="icon header"><img src="'.get_template_directory_uri().'/img/facebook-icon.png" alt="facebook link"></span></a>' ?>
				<?php echo '<a href="https://www.twitter.com" target="_blank"><span class="icon header"><img src="'.get_template_directory_uri().'/img/twitter-icon-white.png" alt="twitter"></span></a>' ?>
				<?php echo '<a href="https://ie.linkedin.com/in/maria-kennedy-283356116" target="_blank"><span class="icon header"><img src="'.get_template_directory_uri().'/img/linkedin-icon-white.png" alt="linked in icon"></span></a>' ?>
			</div>


				<div class="navbar-header">			
					<button class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
						<span class="icon-bars glyphicon glyphicon-align-justify"></span>
				        
					</button>
				</div>

				<div id="primary-nav" class="collapse navbar-collapse">

				<?php 
					wp_nav_menu(array(
						'theme_location'=>'primary',
						'container' => 'false',
						'menu_class'=> 'menu'
						))
					?>	
							
				</div>

			</nav>
		

		</header>