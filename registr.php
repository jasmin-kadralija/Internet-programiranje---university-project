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
			<p>Ukoliko želite da odustanete</p>
			<form action="index.php">
			<input type="submit" value="Povratak na početnu stranu">
			</form>
		</div>
	</div>

	<div id="sadrzaj">
		<div class="tekst">
			<br>
			<h2 style="color:#456896">Popuni sledeća polja kako bi napravio novi nalog:</h2>
			<br><br><br>
			
			<form action='regIN.php' method='POST' onsubmit="if ( 
																	((document.getElementById('imee').value.length > 3) && (document.getElementById('imee').value.length < 30)) && 
																	( (document.getElementById('sifraa').value.length > 3) && (document.getElementById('sifraa').value.length < 30) &&
																		( (document.getElementById('sifraa').value) == (document.getElementById('sifraa2').value) ))  && 
																	( (document.getElementById('op2').selected) || (document.getElementById('op3').selected) || (document.getElementById('op4').selected) || (document.getElementById('op5').selected) ) && 
																	( (document.getElementById('oop2').selected) || (document.getElementById('oop3').selected) || (document.getElementById('oop4').selected) ) && 
																	(document.getElementById('potvrdio').checked) ) 
																{ return true; } 
																else { alert('Proverite da li ste pravilno ukucali lozinku, i da li imate dovoljno karaktera u imenu i lozinci!'); return false;}">
				<table align="center">
					<tr height=45px;>
						<td class="log1">Korisnicko ime*: </td>
						<td><input type="text" name="imee" id="imee" ><br></td>
					</tr>
					<tr height=45px;>
						<td class="log1">Šifra*: </td>
						<td><input type="password" name="sifraa" id="sifraa"></td>
					</tr>
					<tr height=45px;>
						<td class="log1">Potvrdi šifru: </td>
						<td><input type="password" name="sifraa2" id="sifraa2"></td>
					</tr>
					<tr height=45px;>
						<td class="log1">Status: </td>
						<td><select name="status1" style="width: 174px;"><option> --- Izaberi opciju ---</option><option id="op2">Student</option><option id="op3">Profesor</option><option id="op4">Asistent</option><option id="op5">Posmatrac</option></select></td>
					</tr>
					<tr height=45px;>
						<td class="log1">Razlog pristupa sajtu: </td>
						<td><select name="status2" style="width: 174px;"><option> --- Izaberi opciju ---</option><option id="oop2">Informisanje o Faradeju</option><option id="oop3">Ocenjivanje rada</option><option id="oop4">Znatizelja</option></select></td>
					</tr>
					<tr height=45px;>
						<td colspan="2"><input type="checkbox" name="cb" value="potvrda" class="opcija" id="potvrdio"><label for="potvrdio">Potvrđujem da neću kopirati delove ili celokupni rad u cilju svoje promocije.</label><br></td>
					</tr>
					<tr height=45px;>
						<td colspan="2" style="color:red">*Ime i šifra moraju imati između 3 i 30 karaktera</td>
					</tr>
					<tr height=45px;>
						<td colspan="2"><input type="submit" name="kreiraj" value="Kreiraj nalog!"></td>
					</tr>
				
				</table>
			</form>
			
			
		</div>
	</div>
</body>
</html>