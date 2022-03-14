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
		<div class="tekst">
			<form method="POST" action="zadatak3.php" name="pitanja1" onsubmit="if(
																					//((document.getElementById('id1').checked)||(document.getElementById('id2').checked))&&
																					//((document.getElementById('id3').checked)||(document.getElementById('id4').checked))&&
																					//((document.getElementById('id5').checked)||(document.getElementById('id6').checked)||(document.getElementById('id7').checked)||(document.getElementById('id8').checked)||(document.getElementById('id9').checked))&&
																					//((document.getElementById('id10').checked)||(document.getElementById('id11').checked)||(document.getElementById('id12').checked)||(document.getElementById('id13').checked)||(document.getElementById('id14').checked))&&
																					//((document.getElementById('id15').selected)||(document.getElementById('id16').selected)||(document.getElementById('id17').selected))&&
																					//((document.getElementById('id19').selected)||(document.getElementById('id20').selected)||(document.getElementById('id21').selected))&&
																					//((document.getElementById('id22').checked)||(document.getElementById('id23').checked))&&
																					((document.getElementById('id24').selected)||(document.getElementById('id25').selected)||(document.getElementById('id26').selected))
																				)
																					{ return alert('Hvala na odgovoru!'); } 
																					else { alert('Morate dati odgovor na sva pitanja sa ponuđenim odgovorom. Izaberite neki od ponuđenih odgovora.!'); return false;}">
				<p><b>1. Da li ste zadovoljni standardnim modelom nastave?</b></p>
					<label><input type="radio" name="rb1" value="jesam" class="opcija" id="id1">Jesam<br></label>
					<label><input type="radio" name="rb1" value="nisam" class="opcija" id="id2">Nisam<br><br></label>
				
				<p><b>2. Da li ste nekada koristili neki od modela online nastave?</b></p>
					<label><input type="radio" name="rb2" value="jesam2" class="opcija" id="id3">Jesam<br></label>
					<label><input type="radio" name="rb2" value="nisam2" class="opcija" id="id4">Nisam<br><br></label>
				
			
				<p><b>3. Koje elemente klasične nastave bi želeli da promenite?</b></p>
					<label><input type="checkbox" name="cb1[]" value="obrada" class="opcija" id="id5">Postupak obrade gradiva<br></label>
					<label><input type="checkbox" name="cb1[]" value="udzbenik" class="opcija" id="id6">Udžbenike<br></label>
					<label><input type="checkbox" name="cb1[]" value="provera" class="opcija" id="id7">Način provere znanja<br></label>
					<label><input type="checkbox" name="cb1[]" value="domaci" class="opcija" id="id8">Način izrade domaćih zadataka<br></label>
					<label><input type="checkbox" name="cb1[]" value="nista" class="opcija" id="id9">Ni jedan od ponuđenih odgovora<br><br><br></label>
					
				<p><b>4. Koje elemente online nastave bi želeli da postanu stalni u obrazovanju?</b></p>
					<label><input type="checkbox" name="cb2[]" value="komunikacija" class="opcija" id="id10">Komunikacija sa profesorima elektronskim putem<br></label>
					<label><input type="checkbox" name="cb2[]" value="video" class="opcija" id="id11">Nastava putem video linka<br></label>
					<label><input type="checkbox" name="cb2[]" value="interakt" class="opcija" id="id12">Interaktivnost nastave<br></label>
					<label><input type="checkbox" name="cb2[]" value="digitalni" class="opcija" id="id13">Digitalni udžbenici<br></label>
					<label><input type="checkbox" name="cb2[]" value="nijedan2" class="opcija" id="id14">Ni jedan od ponuđenih odgovora<br><br><br></label>
				
				<p><b>5. Koji predmeti u srednjoškolskom obrazovanju su najpogodniji za klasičnu nastavu?</b></p>
				<select name="peto">
					<option value="odg1" >--- Izaberite jedan od ponuđenih odgovora ---</option>
					<option value="odg1" id="id15">Predmeti iz grupe prirodnih nauka</option>
					<option value="odg2" id="id16">Predmeti iz grupe filoloških nauka</option>
					<option value="odg3" id="id17">Predmeti iz grupe društvenih nauka</option>
				</select>
				<br><br><br>
				
				<p><b>6. Koji predmeti u srednjoškolskom obrazovanju su najpogodniji za online nastavu?</b></p>
				<select name="sesto">
					<option value="odg4" >--- Izaberite jedan od ponuđenih odgovora ---</option>
					<option value="odg4" id="id19">Predmeti iz grupe prirodnih nauka</option>
					<option value="odg5" id="id20">Predmeti iz grupe filoloških nauka</option>
					<option value="odg6" id="id21">Predmeti iz grupe društvenih nauka</option>
				</select>
				<br><br><br>
					
				<p><b>7. Da li je, po Vašem mišljenju, korišćenje tablet uređaja pogodno za pravilan razvoj motoričkih sposobnosti najmlađih učenika?</b></p>
					<label><input type="radio" name="rb3" value="da" class="opcija" id="id22">Da<br></label>
					<label><input type="radio" name="rb3" value="ne" class="opcija" id="id23">Ne<br><br><br></label>
				
				<p><b>8. Koja od ponuđenih platformi je najpogodnija za online nastavu?</b></p>
				<select name="osmo">
					<option value="odg8" >--- Izaberite jedan od ponuđenih odgovora ---</option>
					<option value="odg8" id="id24">Moodle</option>
					<option value="odg9" id="id25">Google Classroom</option>
					<option value="odg10" id="id26">Microsoft Teams</option>
				</select>	<br><br><br>
				
				<p><b>9. Koji je minimalan broj godina neophodan za online učenje?</b> <input type="text" name="minimal"></p><br><br><br>
				
				<p><b>10. Da li imate neki komentar o online ili klasičnom učenju?</b></p>
				<p><textarea rows="10" cols="70" value="odgovor"  name="komentar">
				
				</textarea></p>
				
				<input type="submit" value="Pošaljite odgovore!">
				
				
			</form>
		</div>
	<div id="sadrzaj">
		
	</div>
</body>
</html>