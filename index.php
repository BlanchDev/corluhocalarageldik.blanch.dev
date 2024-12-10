<!DOCTYPE html>
<html lang="tr">
<head>
	<?php require($_SERVER['DOCUMENT_ROOT']."/head.php"); ?>

	<meta name="description" content="Hocalara Geldik Çorlu ile Lise, Üniversite ve KPSS için gerekli tüm dersleri güncel müfreda uygun Online çalışabilirsin.">

	<title>Hocalara Geldik Çorlu - Başarı Merkezi</title>
</head>
<body>
	<?php require($_SERVER['DOCUMENT_ROOT']."/resources/css/main.php"); ?>


	<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>


	<style type="text/css">

		@keyframes gradientText {
			to {
				background-position: 200% center;
			}
		}

		.videoContainer{
			height: 100%;
			width: 100%;
		}

		.videoContainer > .videoDiv{
			width: 100%;
			height:100%;
		}

		.videoContainer > .videoDiv > .video{
			width: 100%;
			height:100%;
			filter: brightness(0.9);
		}

		.videoContainer > .sliderSelect{
			display: flex;
			flex-direction:row;
			align-items: center;
			justify-content: center;
			height: 100%;
		}

		.videoContainer > .sliderSelect > .sliderOpen{
			font-size: 1.5em;
			padding: 10px 30px;
			width: calc(100% - 60px);
			height: calc(100% - 20px);
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			cursor: pointer;
		}

		.hosgeldin{
			width: 100%;
			height: 100%;
			padding: 50px 0px;
			display: flex;
			flex-direction: column;
			row-gap: 25px;
			align-items: center;
			background: rgba(10, 10, 10, 0.3);

			font-size: 1.3em;
		}
		.hosgeldin > .hosgeldinTitle{
			display: flex;
			flex-direction:row;
			align-items: center;
			column-gap: 20px;
			width: 45%;
			font-size:1em;
			flex-wrap: wrap;
		}
		.hosgeldin > .hosgeldinTitle > h1{
			font-size:2em;
			white-space: nowrap;
			font-family: BoldFont;
			text-shadow: none;
			background: linear-gradient(to right, whitesmoke 20%, silver 40%, #FCD21C 60%, silver 80%, whitesmoke 100%);
			background-size: 200% auto;
			animation: gradientText 3s ease infinite;
			background-clip: text;
			text-fill-color: transparent;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}
		.hosgeldin > p{
			width: 45%;
			margin-top: -15px;
			font-size: 1.1em;
		}

		.hizmetÖzeti{
			padding: 80px 50px;
			width: calc(100% - 100px);
			height: calc(100% - 160px);

			display: flex;
			flex-direction: row;
			column-gap: 100px;
			row-gap: 100px;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;

		}

		.hizmetÖzeti > img{
			width: 35%;
		}

		.hizmetÖzeti > .yazi{
			display: flex;
			flex-direction: column;
			row-gap: 20px;
			width: 45%;

			font-size: 1.4em;
			font-family: Light;
		}

		.hizmetÖzeti > .yazi > .yönlendirme{
			margin-top: 20px;
			font-family: SemiBold;

			padding: 15px;
			background: #FCD21C;
			border-radius: 10px;
			color: black;
			width: max-content;
		}

		.hizmetÖzeti > .yazi > .yönlendirme:hover{
			background: rgba(0, 0, 0, 0.5);
			transition: all 0.3s ease;
			color: whitesmoke;
		}

		.yorumlar{
			width: calc(100% - 40px);
			height: 100%;

			display: flex;
			flex-direction: column;
			row-gap: 0px;
			align-items: center;
			padding: 20px;
			padding-bottom: 50px;
			background: rgba(25, 60, 25, 0.3);
		}

		.yorumlar > .container{
			display: flex;
			flex-direction: row;
			column-gap: 50px;
			row-gap: 50px;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			width: 90%;
			height: 100%;

		}

		.yorumlar > .container > .yorum{
			display: flex;
			flex-direction: column;
			row-gap: 35px;
			align-items: center;
			width: calc(550px - 100px);
			height: calc(100% - 100px);
			box-shadow: 0px 15px 15px #101010;
			padding: 50px;
			white-space: nowrap;
		}

		.yorumlar > .container > .yorum > img{
			width: 100px;
			height: 100px;
			box-shadow: 1px 1px 15px #101010;
		}

		.yorumlar > .container > .yorum > .isim{
			font-family: SemiBold;
			font-size: 1.3em;
		}

		.yorumlar > .container > .yorum > .yazı{
			font-family: Regular;
			font-size: 1.2em;
			margin-top: -20px;
			white-space: normal;
		}

		video {
			pointer-events: none;
		}

		video::-webkit-media-controls {
			display: none;
		}

		video::-webkit-media-controls-start-playback-button {
			display: none;
		}

	</style>

	<div class="videoContainer">
		<!--<div class="videoDiv" id="slider1Div" style="cursor: pointer;" onclick="location.href = 'https://hocalarageldik.com/burslulukkayit';">
			<video class="video" id="slider1" autoplay muted controls="false">
				<source src="/resources/photos/slider1.mp4" type="video/mp4" />
				Tarayıcınız video etiketini desteklemiyor.
			</video>
		</div>-->

		<a href="https://basarimerkezleri.com/hakkimizda/#franchise-basvuru-formu" target="_blank" class="videoDiv" id="slider2Div" style="display: flex; filter: brightness(0.9); cursor: pointer;">
			<video class="video" id="slider2" muted controls="false">
				<source src="/resources/photos/slider2.mp4" type="video/mp4" />
				Tarayıcınız video etiketini desteklemiyor.
			</video>
		</a>
		<script>
			document.getElementById('slider2').play();
		</script>

		<a href="https://corluhocalarageldik.com/hakkimizda" class="videoDiv" id="slider3Div" style="filter: brightness(0.9); cursor: pointer; display:none;">
			<video class="video" id="slider3" muted controls="false">
				<source src="/resources/photos/slider3.mp4" type="video/mp4" />
				Tarayıcınız video etiketini desteklemiyor.
			</video>
		</a>

		<a href="https://corluhocalarageldik.com/merkezimizde" class="videoDiv" id="slider4Div" style="filter: brightness(0.9); cursor: pointer; display:none;">
			<video class="video" id="slider4" muted controls="false">
				<source src="/resources/photos/slider4.mp4" type="video/mp4" />
				Tarayıcınız video etiketini desteklemiyor.
			</video>
		</a>

		<div class="videoDiv" id="slider5Div" style="filter: brightness(0.9); display:none;" >
			<video class="video" id="slider5" muted controls="false">
				<source src="/resources/photos/slider5.mp4" type="video/mp4" />
				Tarayıcınız video etiketini desteklemiyor.
			</video>
		</div>

		<div class="sliderSelect">
			<!--<div class="sliderOpen" data-id="slider1" style="color: orangered;" >1</div>-->
			<div style="color:orangered;" class="sliderOpen" data-id="slider2">1</div>
			<div class="sliderOpen" data-id="slider3">2</div>
			<div class="sliderOpen" data-id="slider4">3</div>
			<div class="sliderOpen" data-id="slider5">4</div>
		</div>

	</div>

	<script type="text/javascript">

		var vids = $("video"); 
		$.each(vids, function(){
			this.controls = false; 
		}); 

		$( ".sliderOpen" ).click(function() {
			$(".video").trigger('pause');
			$(".videoDiv").css({"display":"none"});

			var videoID = $(this).attr("data-id");
			var sliderId = document.getElementById(videoID);
			sliderId.currentTime = 0;
			$("#"+videoID+"Div").css({"display":"flex"});
			$("#"+videoID).trigger('play');

			$(".sliderOpen").css({"color":"white"});
			$(this).css({"color":"orangered"});
		});

	</script>

	<div class="hosgeldin">

		<div class="hosgeldinTitle">
			<i style="color:indianred;" class="fa-solid fa-location-dot">
			</i><h1>BAŞARI İÇİN DOĞRU YERDESİNİZ!</h1>
			🫡
		</div>

		<p><span style="font-family: BoldFont;">HOCALARA GELDİNİZ, HOŞGELDİNİZ!</span> Video kanalları, online eğitim veren internet siteleri, yeni nesil masaüstü yayınları ve başarı merkezleri ile büyüyen, ihtiyaçlara ve günün şartlarına göre çözüm üreten, sürekli güncellenerek yeniliklerle ilerleyen bir aile <span style="font-family: BoldFont; color:#2D5EA7; filter:brightness(1.4);">HOCALARA GELDİK!</span> Başarı Merkezleri ile de yeni bir model ve anlayış ortaya koyarak bu sahada bir ilki gerçekleştiriyor.</p>

	</div>

	<div class="hizmetÖzeti">

		<img src="/resources/photos/bm_kitap_2022_ana_sayfa.png">

		<div class="yazi">
			<h1 style="margin-bottom: 5px; width: 100%; font-family: BoldFont; font-size: 2em; color: #FCD21C; text-shadow: 1px 1px 2px black;" >Başarı Nasıl Gerçekleşİr?</h1>


			<span>Elbette ‘’çalışmak’’ başarının anahtarıdır.</span>

			<span>Ancak plan, hedef ve bunlara uygun disiplinle ‘’çalışmak’’ başarının kapısını açar.</span>

			<span>Hocalara Geldik Başarı Merkezleri de doğru hedefleme yaparak ihtiyaçları belirler, günün şartlarına göre uyarlanabilir planlamalarla alanında uzman ekiplerle çalışır.</span>

			<span>Elbette bunları ‘’Hibrit Eğitim Modeli’’ olarak adlandırdığı materyal ve uygulamalarla da destekleyip tamamlar.</span>

			<div style="margin-top:20px; font-weight: bold;">
				• Online Eğitim Paketleri,<br><br>
				• Yeni Nesil Soru Bankaları,<br><br>
				• İhtiyaca Özel Fasiküller,<br><br>
				• Kurumsal Denemeler,<br><br>
				• Sürekli Analiz ve Takip.<br><br>
			</div>

			<a class="yönlendirme" href="/hakkimizda">Daha Fazla <i class="fa-solid fa-location-arrow"></i></a>

		</div>


	</div>

	<div class="yorumlar">

		<h1 style="font-size:2em; font-family:BoldFont; margin-bottom: 40px;">ÖĞRENCİ YORUMLARI</h1>

		<div class="container">

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/woman-avatar-3.jpg">
				<div class="isim">Y. Tufan</div>
				<div class="yazı">
					Hocam 12 yil sonra yeniden girdigim sinavdan, okul puanimla 500puan aldim. Eski bir sayisalci olarak ömrümce tarih dinleyememistim sevememistim. Sizlerin sayesinde tarih dinlemenin, bilmenin, yorumlamanın keyfini yaşadım. Emeklerinize saglik. Yaptiginiz isin kiymetini bilenlere denk gelin insallah. Tesekkur ederim hersey icin. Sevgiler 🤗
				</div>
			</div>

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/man_avatar.png">
				<div class="isim">H. Uzun</div>
				<div class="yazı">
					Merhabalar, Öncelikle kısa, öz ve oldukça nitelikli ders videolarınız için sonsuz teşekkürler, bu kadar kısa sürede aldığım yolu ve çözebildiğim sorulara ben bile şaşırıyorum bunlar hep siz değerli öğretmenlerimin ve emeği geçenlerin sayesinde. Her şey için tekrar çok çok teşekkür ederim. Saygılarımla...
				</div>
			</div>

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/women_avatar.png">
				<div class="isim">Deniz</div>
				<div class="yazı">
					Sizin yardımınızla coğrafyayı full çıkardım. Bu süreçte konu anlatımlarınızla yanımızda olduğunuz için teşekkürler.
				</div>
			</div>

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/women_avatar-2.png">
				<div class="isim">Yağmur</div>
				<div class="yazı">
					Hocam sanırım AYT'deki tek şansım sizi izlemekti. Sene başı biyoloji hakkında en ufak şey bilmezken son 4 ay kala sizinle çalışmaya başladım. Tüm AYT videolarınızı izledim. Sınavda tek yapabildiğim biyoloji sorularıydı ve 2 yanlış 11 doğru yapmışım size minnettarım. Çok teşekkürler.
				</div>
			</div>

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/man-avatar-3.jpg">
				<div class="isim">Berk Hasar</div>
				<div class="yazı">
					Hocam sınava son 2 ay kala eşit ağırlık çalışmaya başladım ve bu videolardan notlar çıkararak edebiyattan 22 net yaptım emeklerine sağlık çok teşekkürler...
				</div>
			</div>

			<div class="yorum">
				<img src="https://hocalarageldik.com/assets/img/avatar/man_avatar-2.png">
				<div class="isim">Biyolagiya</div>
				<div class="yazı">
					Men azerbeynaclıyam sizin derslerinizden de faydalanıram çox teşekkür edirem. Teşekkürler Hocam.
				</div>
			</div>

		</div>

	</div>



	<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>



	<style type="text/css">

		@media only screen and (max-width: 800px) {
			.slogan{
				top: 200px;
				width: 80%;

				font-size: 1.1em;
			}

			.hosgeldin > .hosgeldinTitle{
				width: 90%;
				font-size:0.9em;
				justify-content: center;
			}
			.hosgeldin > .hosgeldinTitle > h1{
				font-size:1.4em;
			}
			.hosgeldin > p{
				width: 90%;
			}

			.hizmetÖzeti > img{
				width: 90%;
			}
			.hizmetÖzeti > .yazi{
				width: 90%;
				font-size: 1.4em;
			}
			.yorumlar > .container > .yorum{
				width: 90%;
				height: 100%;
				text-align: center;
			}

		}

	</style>

</body>
</html>