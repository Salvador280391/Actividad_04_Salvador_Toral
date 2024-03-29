<!DOCTYPE HTML>
<html>
<head>
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Costamar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=base_url()?>css/flexslider.css" type="text/css" media="screen" />
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>

<div class="banner-1">
<div class="container">
		<div class="header">
				<div class="logo">
					<a href="<?=base_url()?>index.php/HotelAlameda/index"><img src="<?=base_url()?>images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li><a href="<?=base_url()?>index.php/HotelAlameda/index" data-hover="INICIO">INICIO</a></li>
								<li class="active"><a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" data-hover="HABITACIONES">HABITACIONES</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/nosotros" data-hover="NOSOTROS">NOSOTROS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/comentarios" data-hover="COMENTARIOS">COMENTARIOS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/contacto" data-hover="CONTACTO">CONTACTO</a></li>
									<div class="clearfix"> </div>
							</ul>
				</div>
						<div class="clearfix"> </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
			</div>
		</div>
  </div>
<!-- header -->
<!-- about -->	
		<div class="about">
		<div class="container">
								<div class="clearfix"> </div>
								<div class="ourteam">
									<h3>Habitaciones</h3>
									<div class="section group">
										<div class="col-md-3 grid_1_of_4 images_1_of_4">
											 <img src="<?=base_url()?>images/t1.jpg"  class="img-responsive">
											 <h3>Habitación 01 </h3>
											 <p>1 CAMA MATRIMONIAL <br>
												 2 PERSONAS <br>
												  $319.00 noche <br>
												  <a href="#">[...]</a></p>
										</div>
										<div class="col-md-3 grid_1_of_4 images_1_of_4">
											 <img src="<?=base_url()?>images/t2.jpg"  class="img-responsive">
											 <h3>Habitación 02 </h3>
											 <p> HABITACIÓN DOBLE <br>
												 2 CAMAS MATRIMONIALES <br>
												 2 PERSONAS <br>
												 $449.00 noche <br>
												 <a href="#">[...]</a></p>
										</div>
										<div class="col-md-3 grid_1_of_4 images_1_of_4">
											 <img src="<?=base_url()?>images/t3.jpg"  class="img-responsive">
											 <h3>Habitación 03 </h3>
											 <p> 1 CAMA MATRIMONIAL <br>
												2 PERSONAS <br>
												 $319.00 noche <br><a href="#">[...]</a></p>
										</div>
										<div class="col-md-3 grid_1_of_4 images_1_of_4">
											 <img src="<?=base_url()?>images/t4.jpg"  class="img-responsive">
											 <h3>Habitación 04 </h3>
											 <p> 1 CAMA MATRIMONIAL <br>
												2 PERSONAS <br>
												 $319.00 noche <br><a href="#">[...]</a></p>
										</div>
									</div>
								</div>
			</div>
</div>
<!-- about -->	
<!-- footer -->
<div class="footer">
		<div class="container">
			<p>© 2019 Todos los derechos reservados | Diseñado por </a></p>
			<div class="social">
				<ul>
					<li><a href="#"><i class="fb"></i></a></li>
					<li><a href="#"><i class="twt"></i></a></li>
					<li><a href="#"><i class="goop"></i></a></li>
					<li><a href="#"><i class="pp"></i></a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			<h3>Teléfono : 01 447 690 1152</h3>
		</div>
	</div>
<!-- footer -->
</body>
</html>