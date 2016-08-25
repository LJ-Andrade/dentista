<?php include ('config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php include ('includes/inc.web.head.php'); ?>
	</head>
	<body>
	<header role="banner" id="fh5co-header">
		<?php include ('includes/inc.web.nav.php'); ?>
	</header>
	<section class="mainInfo wow animated fadeInUp mainContact">
		<div class="container">
		  <div class="mainContactTit"><h2>Contacto</h2></div>
		  <div class="row">
		    <div class="col-md-6 pad0 wow animated fadeInUp contactForm">
		      <div id="formDiv">
		        <form id="form" class="topBefore">
		          <input id="name" type="text" placeholder="NOMBRE">
		          <input id="email" type="text" placeholder="TEL&Eacute;FONO">
		          <input id="email" type="text" placeholder="E-MAIL">
		          <textarea id="message" type="text" placeholder="CONSULTA"></textarea>
		        <input id="submit" type="submit" value="ENVIAR">
		        </form>
		      </div>
		    </div>
		    <div class="col-md-6 contactConsult wow animated fadeInUp">
		      <h4>Nuestros Consultorios</h4>
		      <div class="contactCard wow animated fadeInUp">
		        <p><i class="fa fa-phone"></i> Direcci&oacute;n: Av Rivadavia 4545</p>
		        <p><i class="fa fa-map-o"></i> Recoleta</p>
		        <p><i class="fa fa-map-marker"></i> 4545 4556</p>
		      </div>
		      <div class="contactCard wow animated fadeInUp">
		        <p><i class="fa fa-phone"></i> Direcci&oacute;n: Av Rivadavia 4545</p>
		        <p><i class="fa fa-map-o"></i> Recoleta</p>
		        <p><i class="fa fa-map-marker"></i> 4545 4556</p>
		      </div>
		      <div class="contactCard wow animated fadeInUp">
		        <p><i class="fa fa-phone"></i> Direcci&oacute;n: Av Rivadavia 4545</p>
		        <p><i class="fa fa-map-o"></i> Recoleta</p>
		        <p><i class="fa fa-map-marker"></i> 4545 4556</p>
		      </div>
		      <p> info@invisibleortodoncia.com.ar</p>
		    </div>
		  </div>
		</div>
	</section>
	<div class="hideMobile900">
		<br><br><br>
	</div>
	<div class="container-fluid bannerContact"></div><!-- Contact Banner -->
		<?php include ('includes/inc.web.footer.php'); ?>
  <?php include ('includes/inc.web.scripts.php'); ?>
	</body>
</html>
