	<?php require($_SERVER['DOCUMENT_ROOT']."/dbFolder/includes.php"); ?>
	<?php require($_SERVER['DOCUMENT_ROOT']."/dbFolder/Mobile-Detect/Mobile_Detect.php"); ?>
	<?php $detect = new Mobile_Detect; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.7">
	<link rel="icon" href="/resources/logo.png">

	<script src="/resources/js/jquery361.js?v=002"></script>

	<link rel="stylesheet" href="/resources/fontawesome-free-6.2.1-web/css/fontawesome.css?v=002" >
	<link rel="stylesheet" href="/resources/fontawesome-free-6.2.1-web/css/brands.css?v=002">
	<link rel="stylesheet" href="/resources/fontawesome-free-6.2.1-web/css/solid.css?v=002">

	<meta name="author" content="Emir Yılmaz">
	<meta name="keywords" content="TYT AYT LGS KPSS">


	<?php 

	$snowFall = date("m");

	if ( $snowFall == "12" OR $snowFall == "01" ) {

		if ( $detect->isMobile() ): ?>

		<?php else: ?>

			<script src="/resources/js/snow.js?v=002"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js?v=002"></script>

		<?php endif;
	}
	?>


	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EVN5XGTVLX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-EVN5XGTVLX');
	</script>
