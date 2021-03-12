<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    	body{
			background-image: url(img.png);
			width: 500px;
			height: 300px;
			margin: 10 auto;
			opacity: 0.9;
			border: #00868b;
			margin-top: -20px;
			box-sizing: 50px;
		}
		.konten{
			background:#ff66cc;
			border: #00868b;
			width: 360px;
			margin: 30px auto 0;
			border-radius: 16px;
			overflow: hidden;
		}
		.kepala{
			background: #ffffff;
			padding: 10px 5px;
			height: 50px;
			font-family: Papyrus;
		}
		.lock{
			display: inline-block;
			width: 20px;
			height: 10px;
			margin-top: 10px;
			float: center;
			margin-right: 40px;
			border: #00868b;
		}
		.judul{
			color: #000000;
			font-weight: 20px;
			line-height: 10px;
			display: inline-block;
		}
		.artikel{
			padding:10px 15px;
			color: #000000;
			border-radius: 7px;
			font-family: Times New Roman;
		}
		.grup{
			margin: 7px 0;
		}


    </style>
</head>
<body>
	<div class="konten">
	<div class="kepala">
	<div class="lock"></div>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<h2 class="judul">Form Nilai Siswa</h2>
	</div>
	<div class="artikel">

	<form method="GET" action="form_nilai.php" class="horizontal">
		<div class="row">
            <div class="col-md-8">
            	<div class="grup">
                    <label style="font-weight: bolder;" for="nama">Nama :</label>
                    <input type="text" name="nama" placeholder=" Nama Lengkap " value="" size="30"/><br/>
                </div>
            <div class="grup">
			<label style="font-weight: bolder; padding-right: 20px;" for="nama">Mata Kuliah :</label>
				<select name="matkul">
					<option>--Mata Kuliah--</option>
					<option value="DDP">Dasar-Dasar Pemrograman</option>
					<option value="BDI">Basis Data I</option>
					<option value="WEB1">Pemrograman Web</option>
				</select><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai UTS :</label>
				<input type="text" name="nilai_uts" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai UAS :</label>
				<input type="text" name="nilai_uas" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-2">
				<label style="font-weight: bolder; padding-right: 20px;" for="nama">Nilai Tugas Praktikum :</label>
				<input type="text" name="nilai_tugas" value=""size="6"/><br/>
			</div>
			<div class="form-group mt-4">
				<input type="submit" value="Simpan" name="proses"/>
			</div>
			</div>
		</div>
	</fieldset>
	</form>

<?php
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>


</body>
</html>

