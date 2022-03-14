<?php
session_start();
if(!isset($_SESSION['prijavljen']))
	header("location:index.php");

	$povezivanje = mysqli_connect("localhost","root","") or die("Konekcija je neuspešna");
	mysqli_select_db($povezivanje, "bazaip") or die("Ne mogu da pronadjem bazu!");
	
	$deveto_upit=mysqli_query($povezivanje, "SELECT * FROM `pitanje9_novo`;");
	$deveto_ukupno=mysqli_num_rows($deveto_upit);
	
	$deseto_upit=mysqli_query($povezivanje, "SELECT * FROM `pitanje10_novo`;");
	$deseto_ukupno=mysqli_num_rows($deveto_upit);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Internet programiranje - Jasmin Kadralija</title>
	<meta name="description" content="Projekat iz internet programiranja">
	<meta name="author" content="Jasmin Kadralija">
	<meta charset="UTF-8">
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=windows-1250">
	<link rel="stylesheet" type="text/css" href="stiloviHTML.css">
</head>
<body>
	<div id="header">
		<div id="slika">
			<img src="DUNP.png" alt="slikaa" width="418px" height="85px">
		</div>
		<div id="naslov">
			<h2>Internet programiranje</h2>
			<h3>Jasmin Kadralija</h3>
			<h4>matematika i informatika</h4>
			<h4>15-003/10</h4>
		</div>
		<div id="logout">
			<p>Ukoliko ste pregledali sajt</p>
			<form action="logout.php" method="logout.php">
			<input type="submit" value="Odjavite se">
			</form>
		</div>
	</div>
	<div id="meni">
		<p class="men2">&nbsp;</p>
		<p class="men2">&nbsp;</p>
		<p class="men"><i><b>ADMINISTRATORSKA STRANICA</b></i></p>
		<p class="men2">&nbsp;</p>
		<p class="men2">&nbsp;</p>
	</div>
	<div id="sadrzaj">
		<div class="tekst">
			<br><br>
			<p><b>Odgovori na deveto pitanje:</b></p><br>
			<?php
				while($ispis = mysqli_fetch_assoc($deveto_upit)){
				echo $ispis["id"] . ". " . $ispis["odgovor"] . "    - <a href='izbrisi.php?id=".$ispis['id']."'>Obriši unos</a><br>";
				}
			?>
			
			<br><br>
			<p><b>Odgovori na deseto pitanje:</b></p>
			<?php
				while($ispis2 = mysqli_fetch_assoc($deseto_upit)){
				echo $ispis2["id"] . ". " . $ispis2["odgovor"] . "  - <a href='izbrisi2.php?id=".$ispis2['id']."'>Obriši unos</a><br>";
				}
			?>
		</div>
	</div>
</body>
</html>