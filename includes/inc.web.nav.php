<div class="container navContainer">
	<!-- <div class="row"> -->
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<div class="mainLogo"><a class="navbar-brand" href="index.php"><img src="images/weblogo.png" class="img-responsive" alt="" /></a></div>
			</div>
			<div id="navbar" class="navbar-collapse collapse mainMenu">
				<ul class="nav navbar-nav navbar-right">
					<li class="<?php echo $thisPage == 'index' ? 'active' : ''; ?>"><a href="index.php?view=index"><span>Inicio</span></a></li>
					<li class="dropdown OrtodonciaLink <?php echo $thisPage == 'ortodoncia' ? 'active' : '';?>"><a href="ortodoncia.php?view=ortodoncia"><span>Ortodoncia </span><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="damon.php">DAMON</a></li>
              <li><a href="invisalign.php">INVISALIGN</a></li>
            </ul>
					</li>
					<li class="<?php echo $thisPage == 'pediatria' ? 'active' : '';?>"><a href="ondontologia_pediatrica.php?view=pediatria"><span>Odontolog&iacute;a pedi&aacute;trica</span></a></li>
					<li class="<?php echo $thisPage == 'ortopedia' ? 'active' : '';?>"><a href="ortopedia.php?view=ortopedia"><span>Ortop&eacute;dia Maxilofacial</span></a></li>
					<li class=""><a href="?view=doctora"><span>Doctora</span></a></li>
					<li class="<?php echo $thisPage == 'contacto' ? 'active' : '';?>"><a href="contacto.php?view=contacto"><span>Contacto</span></a></li>
				</ul>
			</div>
		</nav>
	<!-- </div> -->
</div>

<!-- ortodoncia.php?view=ortodoncia -->
