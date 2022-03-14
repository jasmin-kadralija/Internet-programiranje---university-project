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
	<div id="header1">
		<div id="naslov1">
			<h2>Državni univerzitet u Novom Pazaru</h2><br>
			<div id="slika1"><img src="DUNP1.png" alt="slikaa" width="150px" height="120px"><br><br></div>
			<h2>Internet Programiranje</h2><br>
			<h3>Jasmin Kadralija</h3>
			<h3>matematika i informatika</h3>
		</div>
	</div>

	<div id="sadrzaj">
		<div class="tekst">
			<br>
			
			<form action='login.php' method='POST'>
				<table align="center">
					<tr>
						<td class="log1">Korisnicko ime: </td>
						<td><input type="text" name="imee"><br></td>
					</tr>
					<tr>
						<td class="log1">Šifra: </td>
						<td><input type="password" name="sifraa"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="prijava" value="Prijavi se!"></td>
					</tr>
				
				</table>
			</form>
			<br /><br />
			Ukoliko niste registrovani, napravite <a href="registr.php">novi nalog</a>.
			
		</div>
	</div>
</body>
</html>