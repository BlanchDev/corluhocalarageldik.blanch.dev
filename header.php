	<?php 

	if ($url == "corluhocalarageldik.com" OR $url == "corluhocalarageldik.com/") {
		$anasayfa = "color: #FCD21C;";
	}

	if (strstr($url, "/merkezimizde")) {
		$merkezimizde = "color: #FCD21C;";
	}

	if (strstr($url, "/hakkimizda")) {
		$hakkimizda = "color: #FCD21C;";
	}

	if (strstr($url, "/insankaynaklari")) {
		$insankaynaklari = "color: #FCD21C;";
	}
	

	$snowFall = date("m");

	if ( $snowFall == "12" OR $snowFall == "01" ) {

		if ( $detect->isMobile() ): ?>

		<?php else: ?>
			<style type="text/css">

				#snow-animation-container {
					position: absolute;
					width: 100%;
					height: 100%;
					overflow: hidden;
					z-index: -1;
					top: 70px;
				}
			</style>
			<div id="snow-animation-container"></div>

		<?php endif;
	}

	?>

	<div class="mainflexbox">

		<div class="header1">
			<div class="container">
				<div class="sosyalMedya">
					<a href="https://www.facebook.com/corlubasarimerkezi"><i style="color:white; " class="fa-brands fa-facebook"></i></a>
					<a href="https://twitter.com/hocalarageldik"><i style="color:#1D9BF0;" class="fa-brands fa-twitter"></i></a>
					<a href="https://www.instagram.com/hocalarageldikcorlu/"><i style="color:#FF8704;" class="fa-brands fa-instagram"></i></a>
					<a href="https://www.youtube.com/@Hocalarageldik"><i style="color:#F60000;" class="fa-brands fa-youtube"></i></a>
					<a href="https://goo.gl/maps/L29taq8nMiGiVFxAA"><i style="color: lightgreen;" class="fa-solid fa-map-location-dot"></i></a>
				</div>

				<div class="destek">
					<a href="https://wa.me/905433745596"><span style="font-size: 0.7em; font-family:BoldFont; text-shadow: 1px 1px 2px black; color: #FCD21C;">Hocalara Yazın </span> <i style="color:#0DC143;" class="fa-brands fa-whatsapp"></i></a>
				</div>
			</div>
		</div>

		<div class="header2">
			<div class="container">
				<div class="logo">
					<a href="https://corluhocalarageldik.com/"><h1>HOCALARA <img style="width:30px;" src="/resources/logo.png"> GELDİK <span style="color: #FF9027; margin-left:10px;">ÇORLU</span></h1></a>
				</div>

				<div class="navbtns">
					<a href="/" style="<?php echo $anasayfa; ?>" ><i class="fa-solid fa-house"></i></a>
					<a href="/merkezimizde" style="<?php echo $merkezimizde; ?>" >Merkezimizde</a>
					<a href="/hakkimizda" style="<?php echo $hakkimizda; ?>">Hakkımızda</a>
					<a href="/insankaynaklari" style="color:silver; <?php echo $insankaynaklari; ?>">İnsan Kaynakları</a>
				</div>

				<div id="PhoneMenu" class="navmenubtns">
					<i class="fa-solid fa-bars"></i>
					<div id="NavMenu" class="phonenavs">

						<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;  font-size:1.5em; margin-bottom: 10px; margin-top: -50px; font-family: BoldFont; color:#2D5EA7; text-align:right; width:100%;">
							<span style="color:indianred;"><i class="fa-solid fa-x"></i></span>
							<span>MENÜ</span>
						</div>
						<a href="/" style="<?php echo $anasayfa; ?>" ><i style="color:#FF9027;" class="fa-regular fa-compass"></i> Anasayfa</a>
						<a href="/merkezimizde" style="<?php echo $merkezimizde; ?>" ><i style="color:#FF9027;" class="fa-regular fa-compass"></i> Merkezimizde</a>
						<a href="/hakkimizda" style="<?php echo $hakkimizda; ?>" ><i style="color:#FF9027;" class="fa-regular fa-compass"></i> Hakkımızda</a>
						<a href="/insankaynaklari" style="color:silver; <?php echo $insankaynaklari; ?>"><i style="color:#FF9027;" class="fa-regular fa-compass"></i> İnsan Kaynakları</a>
					</div>
				</div>

				<script type="text/javascript">

					$("#PhoneMenu").click(function() {

						if ($("#NavMenu").css("display") == "flex" ) {
							$("#NavMenu").css({"display":"none"})
						}else{
							$("#NavMenu").css({"display":"flex"});
						}


					});

				</script>

			</div>
		</div>