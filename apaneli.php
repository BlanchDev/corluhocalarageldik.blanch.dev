<!DOCTYPE html>
<html>
<head>
	<?php
	require($_SERVER['DOCUMENT_ROOT']."/head.php");

	ob_start();
	?>

	<title>Hocalara Geldik Çorlu - Admin Paneli</title>
</head>
<body>
	<?php require($_SERVER['DOCUMENT_ROOT']."/resources/css/main.php"); ?>


	<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>

	<?php

	if ($_POST['id'] == "USER") {

		setcookie("cookie", "test", time() + (86400 * 365), "/");
		header("Location:https://corluhocalarageldik.com/apaneli");

	}

	?>


	<?php if ($_COOKIE['admin'] == "adminsiniz"): ?>

		<style type="text/css">

			.basvurular{
				display: flex;
				flex-direction: column;
				row-gap: 10px;
				column-gap: 10px;

				align-items: center;
				width: 100%;
				height: 100%;
				min-height: 365px;

				margin-bottom: 50px;
			}

			.basvurular > .container{
				display: flex;
				flex-direction: column;
				align-items: center;
				row-gap: 0px;
				column-gap: 0px;
				width: 100%;
			}

			.basvurular > .container > .basvuru{
				display: flex;
				flex-direction: row;
				column-gap: 50px;
				row-gap: 50px;
				align-items: flex-start;
				justify-content: center;
				background: rgba(21, 20, 20, 0.6);
				border-radius: 10px;
				font-size: 1.3em;
				font-family: Light;
				width: calc(90% - 60px);
				height: calc(100% - 60px);
				padding: 30px;
				flex-wrap: wrap;
			}

			.basvurular > .container > .basvuru > div{
				display: flex;
				flex-direction: column;
				row-gap: 10px;
				align-items: flex-start;
			}

			.basvurular > .container > .basvuru > img{
				width: 95%;
			}

			.basvurular > .container > .gelenBasvurular{
				display: flex;
				flex-direction: row;
				column-gap: 20px;
				row-gap: 20px;
				align-items: center;
				justify-content: center;
				font-size: 1.3em;
				font-family: SemiBold;
				width: calc(80% - 60px);
				height: 100%;
				padding: 10px;
				flex-wrap: wrap;
			}

			.basvurular > .container > .gelenBasvurular > a{
				background: rgba(0, 0, 0, 0.4);
				padding: 15px 20px;
				border-radius: 10px;
				outline: 1px solid #444444;
			}

			.basvurular > .container > .basvuru > .idkismi{
				position: relative;
				left: -25px;
				width: 50px;
				height: 100%;
				font-family: SemiBold;
				color: white;
				font-size: 1.3em;
			}

			.basvurular > .container > .basvuru > div > div,
			.basvurular > .container > .basvuru > div > div > div{
				border-bottom: 1px solid #444444;
				display: flex;
				flex-direction: column;
			}

			.basvurular > .container > .basvuru > div > div > span,
			.basvurular > .container > .basvuru > div > div > div > span{
				font-family: SemiBold;
				color: snow;
			}

			@media only screen and (max-width: 800px) {

				.basvurular > .container > .basvuru{
					align-items: center;
					justify-content: flex-start;
				}
				.basvurular > .container > .basvuru > img{
					width: 95%;
				}

				.basvurular > .container > .basvuru > div{
					width: 90%;
				}
			}

		</style>

		<div class="basvurular">

			<h1 style="font-family:SemiBold; color:skyblue;" >İş Başvuru Formları</h1>

			<?php if ( empty($_GET['id']) ): ?>


				<div class="container">
					<?php
					$checkPosts = $baglanti->prepare("SELECT * FROM isbasvuruformlari ORDER BY id DESC");
					$checkPosts->execute( array() );

					while ($Posts = $checkPosts->fetch(PDO::FETCH_ASSOC)) {

						$basvuru = json_decode($Posts["basvuru"], true);

						?>

						<div class="gelenBasvurular">

							<a href="https://corluhocalarageldik.com/apaneli?id=<?php echo $Posts["id"]; ?>">#<?php echo $Posts["id"]." | ".$basvuru["ad"]." ".$basvuru["soyad"] ?></a>

						</div>


						<?php
					}


					?>
				</div>


			<?php else: ?>
				<div class="container">
					<?php
					$checkPosts = $baglanti->prepare("SELECT * FROM isbasvuruformlari WHERE id=?");
					$checkPosts->execute( array($_GET['id']) );
					$Posts = $checkPosts->fetch(PDO::FETCH_ASSOC);

					$basvuru = json_decode($Posts["basvuru"], true);

					if ( empty($basvuru["ad"]) ) {
						header("Location:https://corluhocalarageldik.com/apaneli");
					}

					?>

					<div class="basvuru" style="display: flex; flex-direction: column; align-items: center; gap: 30px;">
						<div class="idkismi">
							#<?php echo $Posts["id"]; ?>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div>Ad: <span><?php echo $basvuru["ad"]; ?></span></div>
							<div>Soyad: <span><?php echo $basvuru["soyad"]; ?></span></div>
							<div>E-Posta: <span><?php echo $basvuru["eposta"]; ?></span></div>
							<div>Tel: <span><?php echo $basvuru["telefon"]; ?></span></div>
							<div>T.C.: <span><?php echo $basvuru["tckimlikno"]; ?></span></div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;">
							<div>Doğum Tarihi: <span><?php echo $basvuru["dogumtarihi"]; ?></span></div>
							<div>Doğum Yeri: <span><?php echo $basvuru["dogumyeri"]; ?></span></div>
							<div>Cinsiyet: <span><?php echo $basvuru["cinsiyet"]; ?></span></div>
							<div>Evlilik Durmu: <span><?php echo $basvuru["evlilikdurumu"]; ?></span></div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div>Adres: <span><?php echo $basvuru["adres"]; ?></span></div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div>Okul: <span><?php echo $basvuru["okul"]; ?></span></div>
							<div>Bölüm: <span><?php echo $basvuru["bolum"]; ?></span></div>
							<div>Mezun yılı: <span><?php echo $basvuru["yil"]; ?></span></div>
							<div>Formasyon: <span><?php echo $basvuru["formasyon"]; ?></span></div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div>Başvurulan Pozisyon: <span><?php echo $basvuru["pozisyon"]; ?></span></div>
							<div>Başarı Merkezi: <span>Çorlu</span></div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div style="display: flex; flex-direction: column;" >
								<div>Kurum1/Görev: <span><?php echo $basvuru["kurumgorev1"]; ?></span></div>
								<div>Giriş/Çıkış: <span><?php echo $basvuru["isegiriscikis1"]; ?></span></div>
							</div>
							<div style="display: flex; flex-direction: column;" >
								<div>Kurum2/Görev: <span><?php echo $basvuru["kurumgorev2"]; ?></span></div>
								<div>Giriş/Çıkış: <span><?php echo $basvuru["isegiriscikis2"]; ?></span></div>
							</div>
							<div style="display: flex; flex-direction: column;" >
								<div>Kurum3/Görev: <span><?php echo $basvuru["kurumgorev3"]; ?></span></div>
								<div>Giriş/Çıkış: <span><?php echo $basvuru["isegiriscikis3"]; ?></span></div>
							</div>
						</div>

						<div style="display: flex; flex-direction: row; gap:20px;" >
							<div style="display: flex; flex-direction: column;" >
								<div>Ad/Soyad: <span><?php echo $basvuru["refadgorev1"]; ?></span></div>
								<div>Referans Tel: <span><?php echo $basvuru["reftel1"]; ?></span></div>
							</div>
							<div style="display: flex; flex-direction: column;" >
								<div>Ad/Soyad: <span><?php echo $basvuru["refadgorev2"]; ?></span></div>
								<div>Referans Tel: <span><?php echo $basvuru["reftel2"]; ?></span></div>
							</div>
							<div style="display: flex; flex-direction: column;" >
								<div>Ad/Soyad: <span><?php echo $basvuru["refadgorev3"]; ?></span></div>
								<div>Referans Tel: <span><?php echo $basvuru["reftel3"]; ?></span></div>
							</div>
						</div>

						<img style="display: block;" src="https://corluhocalarageldik.com/basvuruformlari/<?php echo $basvuru["cv"]; ?>">
					</div>


				</div>
			<?php endif ?>

		</div>


	<?php else: ?>

		<style type="text/css">

			input{
				background: rgba(30, 30, 30, 1.0);
				outline: 3px solid #555555;
				border: none;
				color: white;
				font-family: Light;
				font-size: 1.3em;
				padding: 10px 15px;
				border-radius: 5px;
				width: 400px;
				min-width: 400px;
			}

			button{
				margin-top: 30px;
				margin-bottom: 10px;
				background: none;
				border: 3px solid white;
				color: white;
				padding: 20px 50px;
				border-radius: 10px;
				font-family: BoldFont;
				font-size: 1.6em;
				transition: all 0.3s ease;
				cursor: pointer;
			}

			button:hover{
				background: #FCD21C;
				color: black;
				border: 3px solid black;
				transition: all 0.3s ease;
			}

			.locked{
				display: flex;
				flex-direction: column;
				row-gap: 20px;
				align-items: center;
				justify-content: center;

				width: 90%;
				height: 365px;
			}

		</style>

		<form method="POST" class="locked">
			<input type="text" name="id" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button>Ok</button>
		</form>

	<?php endif ?>


	<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>


</body>
</html>