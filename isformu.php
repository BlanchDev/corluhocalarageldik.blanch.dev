<!DOCTYPE html>
<html>
<head>
	<?php require($_SERVER['DOCUMENT_ROOT']."/head.php"); ?>
	<?php 

	if ( empty($_POST['ad']) ) {
		header("Location:https://corluhocalarageldik.com/insankaynaklari");
	}



	?>
	<title>Hocalara Geldik Çorlu - İş Formu</title>
</head>
<body>
	<?php require($_SERVER['DOCUMENT_ROOT']."/resources/css/main.php"); ?>


	<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>

	<style type="text/css">

		.bosluk{
			width: calc(100% - 200px);
			height: calc(365px - 200px);
			text-align: center;
			padding: 100px;
		}

		.bosluk > a{
			font-size: 1.2em;
			padding: 50px;
			font-family: Light;
			color: lightgreen;
			margin-top: 30px;
		}

	</style>

	<div class="bosluk">
		<h3>

			<?php 


			if (empty($_POST['ad']) OR empty($_POST['soyad']) OR empty($_POST['eposta']) OR empty($_POST['tckimlikno']) OR empty($_POST['dogumtarihi']) OR empty($_POST['dogumyeri']) OR empty($_POST['cinsiyet']) OR empty($_POST['evlilikdurumu']) OR empty($_POST['adres']) OR empty($_POST['telefon']) OR empty($_POST['okul']) OR empty($_POST['bolum']) OR empty($_POST['yil']) OR empty($_POST['pozisyon']) OR empty($_FILES['cv']) ) {

				echo "Lütfen (Zorunlu) ile belirtilmiş tüm alanları doldurunuz. İş başvuru formu gönderilemedi!";

			}else{


				$sorgu = $baglanti->prepare("SELECT COUNT(*) FROM isbasvuruformlari WHERE ip=? ");
				$sorgu->execute(array($ip));
				$say = $sorgu->fetchColumn();

				if ($say > 0) {

					echo "İş başvuru formunuz daha önceden gönderilmiş tekrardan başvuru yapamazsınız.";

				}else{

					$target_dir = $_SERVER['DOCUMENT_ROOT']."/basvuruformlari/";
					$file_name = uniqid().".jpg";
					$target_file = $target_dir . $file_name;
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


					$check = getimagesize($_FILES["cv"]["tmp_name"]);
					if($check !== false) {

						$uploadOk = 1;
					} else {
						echo "Yüklediğiniz cv bir fotoğraf değil lütfen fotoğraf formatında yükleyin. İş başvuru formu gönderilemedi!";
						$uploadOk = 0;
					}



					if (file_exists($target_file)) {
						echo "Üzgünüz, fotoğraf ismini değiştirip tekrar yükleyin. İş başvuru formu gönderilemedi!";
						$uploadOk = 0;
					}


					if ($_FILES["cv"]["size"] > 50000000) {
						echo "Üzgünüz, yüklemek istediğin dosyanın boyutu maksimum 50MB olmalıdır. İş başvuru formu gönderilemedi!";
						$uploadOk = 0;
					}


					if ($uploadOk == 0) {
						echo "Üzgünüm, cv yüklenemedi.";

					} else {

						if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {

							$bilgiler = new stdClass();
							$bilgiler->ad = $_POST['ad'];
							$bilgiler->soyad = $_POST['soyad'];
							$bilgiler->eposta = $_POST['eposta'];
							$bilgiler->tckimlikno = $_POST['tckimlikno'];
							$bilgiler->dogumtarihi = $_POST['dogumtarihi'];
							$bilgiler->dogumyeri = $_POST['dogumyeri'];
							$bilgiler->cinsiyet = $_POST['cinsiyet'];
							$bilgiler->evlilikdurumu = $_POST['evlilikdurumu'];
							$bilgiler->adres = $_POST['adres'];
							$bilgiler->telefon = $_POST['telefon'];
							$bilgiler->okul = $_POST['okul'];
							$bilgiler->bolum = $_POST['bolum'];
							$bilgiler->yil = $_POST['yil'];
							$bilgiler->formasyon = $_POST['formasyon'];
							$bilgiler->pozisyon = $_POST['pozisyon'];
							$bilgiler->kurumgorev1 = $_POST['kurumgorev1'];
							$bilgiler->isegiriscikis1 = $_POST['isegiriscikis1'];
							$bilgiler->kurumgorev2 = $_POST['kurumgorev2'];
							$bilgiler->isegiriscikis2 = $_POST['isegiriscikis2'];
							$bilgiler->kurumgorev3 = $_POST['kurumgorev3'];
							$bilgiler->isegiriscikis3 = $_POST['isegiriscikis3'];
							$bilgiler->refadgorev1 = $_POST['refadgorev1'];
							$bilgiler->reftel1 = $_POST['reftel1'];
							$bilgiler->refadgorev2 = $_POST['refadgorev2'];
							$bilgiler->reftel2 = $_POST['reftel2'];
							$bilgiler->refadgorev3 = $_POST['refadgorev3'];
							$bilgiler->reftel3 = $_POST['reftel3'];
							$bilgiler->cv = $file_name;

							$bilgilerJSON = json_encode($bilgiler, JSON_UNESCAPED_UNICODE);

							$register_request = $baglanti->prepare("INSERT INTO isbasvuruformlari SET basvuru=?, tarih=?, ip=?");
							$register_request->execute(array($bilgilerJSON, $bugun, $ip));

							echo "Tebrikler ".$_POST['ad']."! İş başvuru formun başarıyla gönderildi!";
						}else{
							echo "Üzgünüm, cvni yüklemeye çalışırken bir hata oluştu. İş başvuru formu gönderilemedi!";

						}

					}

				}

			}







			?>

		</h3>

		<a href="/">Ana Menüye Dön</a>

	</div>


	<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>


</body>
</html>