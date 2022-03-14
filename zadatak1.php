<?php
session_start();
if(!isset($_SESSION['prijavljen']))
	header("location:index.php");
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
		<p class="men"><a href="zadatak1.php" class="bela">Informacije o problemu</a></p>
		<p class="men"><a href="zadatak2.php" class="bela">Anketa</a></p>
		<p class="men"><a href="zadatak3.php" class="bela">Rezultati ankete</a></p>
		
		<p class="men2">&nbsp;</p>
		<p class="men2">&nbsp;</p>
	</div>
	<div id="sadrzaj">
		<div class="tekst">
			<br /> 
			<br /> 
			<br /> 
			<h2 style="color:black">Online učenje kao dominantan vid obrazovanja u budućnosti?</h2>
			<br /> 
			<p>Izazovi modernog društva, poput digitalizacije svih aspekata života ali i problemi sa epidemijom virusa SARS-CoV-2 naveli su mnoge škole da započnnu online nastavu.</p>
			<p>Iako ova metoda nesumljivo ima svojih prednosti, mnogi se pitaju da li ovakav vid nastave može uspešno da zameni klasičnu nastavu u učionici.</p>
			<p>U <b>anketi</b> na ovom sajtu odgovorite na pitanja i iskažite svoje mišljenje!</p>
			
		</div>
	</div>
</body>
</html>