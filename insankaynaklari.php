<!DOCTYPE html>
<html>
<head>
	<?php require($_SERVER['DOCUMENT_ROOT']."/head.php"); ?>

	<title>Hocalara Geldik Çorlu - İnsan Kaynakları</title>
</head>
<body>
	<?php require($_SERVER['DOCUMENT_ROOT']."/resources/css/main.php"); ?>


	<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>

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

		select{
			background: rgba(30, 30, 30, 1.0);
			outline: 3px solid #555555;
			border: none;
			color: white;
			font-family: Light;
			font-size: 1.5em;
			padding: 10px 15px;
			border-radius: 5px;
			width: 430px;
			min-width: 430px;
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

		.basvuru{
			display: flex;
			flex-direction: column;
			row-gap: 10px;
			align-items: center;
			justify-content: center;
			width: 100%;
			margin-bottom: 50px;
		}

		.basvuru > .container{
			display: flex;
			flex-direction: column;
			row-gap: 30px;
			width: 100%;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}

		.basvuru > .container > .bilgiler{
			display: flex;
			flex-direction: column;
			column-gap: 10px;
			flex-wrap: wrap;
			width: 100%;
			align-items: center;
			justify-content: center;
		}

		.basvuru > .container > .bilgiler > h3{
			padding-bottom: 5px;
			border-bottom: 1px solid #666666;
		}
		.basvuru > .container > .bilgiler > .inputlar{
			display: flex;
			flex-direction: row;
			column-gap: 20px;
			row-gap: 20px;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			width: 55%;
		}


	</style>

	<form action="isformu" method="post" enctype="multipart/form-data" accept-charset="utf-8">

		<div class="basvuru">

			<h1>Hocalara Geldik | Çorlu Başarı Merkezi İş Başvuru Formu</h1>

			<div class="container">


				<div class="bilgiler">
					<h3>Kişisel Bilgiler</h3>
					<div class="inputlar">
						<input type="text" name="ad" placeholder="Ad (Zorunlu)">
						<input type="text" name="soyad" placeholder="Soyad (Zorunlu)">
						<input type="text" name="eposta" placeholder="E-Posta (Zorunlu)">
						<input type="text" name="tckimlikno" placeholder="T.C. Kimlik No (Zorunlu)">
					</div>
				</div>

				<div class="bilgiler">
					<h3>Kimlik Bilgileri</h3>
					<div class="inputlar">
						<input type="text" name="dogumtarihi" placeholder="Doğum Tarihi (Zorunlu)">
						<input type="text" name="dogumyeri" placeholder="Doğum Yeri (Zorunlu)">
						<select name="cinsiyet">
							<option>Kadin</option>
							<option>Erkek</option>
							<option>Diğer</option>
						</select>
						<select name="evlilikdurumu">
							<option>Bekar</option>
							<option>Evli</option>
						</select>
					</div>
				</div>

				<div class="bilgiler">
					<h3>Adres Bilgileri</h3>
					<div class="inputlar">
						<input type="text" name="adres" placeholder="Adres (Zorunlu)">
						<input type="text" name="telefon" placeholder="Telefon (Zorunlu)">
					</div>
				</div>

				<div class="bilgiler">
					<h3>Eğitim Bilgileri</h3>
					<div class="inputlar">
						<input type="text" name="okul" placeholder="Mezun Olduğunuz Okul (Zorunlu)">
						<input type="text" name="bolum" placeholder="Mezun Olduğunuz Bölüm (Zorunlu)">
						<input type="text" name="yil" placeholder="Mezuniyet Yılı (Zorunlu)">
						<input type="text" name="formasyon" placeholder="Formasyon">
					</div>
				</div>

				<div class="bilgiler">
					<h3>Başvurulan Pozisyon & Başarı Merkezi (Zorunlu)</h3>
					<div class="inputlar">
						<select name="pozisyon">
							<option>Müdür</option>
							<option>Müdür Yardımcısı</option>
							<option>Branş Öğretmeni</option>
							<option>Rehber Öğretmen</option>
							<option>Halkla İlişkiler</option>
							<option>Muhasebe</option>
							<option>Güvenlik</option>
							<option>Hizmetli</option>
						</select>
						<select>
							<option>Çorlu</option>
						</select>
					</div>
				</div>

				<div class="bilgiler">
					<h3>İş Deneyim Bilgileri</h3>
					<div class="inputlar">
						<input type="text" name="kurumgorev1" placeholder="Kurum ve Görev">
						<input type="text" name="isegiriscikis1" placeholder="İşe Giriş ve İşten Çıkış">
						<input type="text" name="kurumgorev2" placeholder="Kurum ve Görev">
						<input type="text" name="isegiriscikis2" placeholder="İşe Giriş ve İşten Çıkış">
						<input type="text" name="kurumgorev3" placeholder="Kurum ve Görev">
						<input type="text" name="isegiriscikis3" placeholder="İşe Giriş ve İşten Çıkış">
					</div>
				</div>

				<div class="bilgiler">
					<h3>Referans Bilgileri</h3>
					<div class="inputlar">
						<input type="text" name="refadgorev1" placeholder="Adı Soyadı ve Görevi">
						<input type="text" name="reftel1" placeholder="Telefonu">
						<input type="text" name="refadgorev2" placeholder="Adı Soyadı ve Görevi">
						<input type="text" name="reftel2" placeholder="Telefonu">
						<input type="text" name="refadgorev3" placeholder="Adı Soyadı ve Görevi">
						<input type="text" name="reftel3" placeholder="Telefonu">
					</div>
				</div>

				<div class="bilgiler">
					<h3>CV Ekleyin (Zorunlu)</h3>
					<div class="inputlar">
						<input type="file" name="cv"></td>
					</div>
				</div>

				<div class="bilgiler">
					<button id="GONDER">Gönder</button>
					<input style="display:none;" id="inputbtn" type="submit" name="gonderbtn">
				</div>


			</div>

		</div>

	</form>


	<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>


	<script type="text/javascript">

		$("#GONDER").click(function(){

			$("#inputbtn").click();
			$("#GONDER").html("Cv Yükleniyor...");
			$('#inputbtn').prop('disabled', true);
			$('#GONDER').prop('disabled', true);


		});

	</script>


</body>
</html>