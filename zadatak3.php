<?php

session_start();
if(!isset($_SESSION['prijavljen']))
	header("location:index.php");

	$povezivanje = mysqli_connect("localhost","root","") or die("Konekcija je neuspešna");
	mysqli_select_db($povezivanje, "bazaip") or die("Ne mogu da pronadjem bazu!");

if(!empty($_POST['cb1']))
{
	foreach($_POST['cb1'] as $odgovor3)
	{
		if($odgovor3 == "obrada")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje3_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
		}
		if($odgovor3 == "udzbenik")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje3_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
		}
		if($odgovor3 == "provera")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje3_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =3");
		}
		if($odgovor3 == "domaci")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje3_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =4");
		}
		if($odgovor3 == "nista")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje3_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =5");
		}
		
	}
}
if(!empty($_POST['cb2']))
{
	foreach($_POST['cb2'] as $odgovor4)
	{
		if($odgovor4 == "komunikacija")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje4_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
		}
		if($odgovor4 == "video")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje4_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
		}
		if($odgovor4 == "interakt")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje4_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =3");
		}
		if($odgovor4 == "digitalni")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje4_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =4");
		}
		if($odgovor4 == "nijedan2")
		{
			mysqli_query($povezivanje, "UPDATE `pitanje4_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =5");
		}
		
	}
}

	$odgovor1 = (isset($_POST['rb1']) ? $_POST['rb1'] : null);
	if($odgovor1 == 'jesam')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje1_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor1 == 'nisam')
		mysqli_query($povezivanje, "UPDATE `pitanje1_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	
	
	
	$odgovor2 = (isset($_POST['rb2']) ? $_POST['rb2'] : null);
	if($odgovor2 == 'jesam2')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje2_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor2 == 'nisam2')
		mysqli_query($povezivanje, "UPDATE `pitanje2_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	
	
	
	$odgovor7 = (isset($_POST['rb3']) ? $_POST['rb3'] : null);
	if($odgovor7 == 'da')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje7_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor7 == 'ne')
		mysqli_query($povezivanje, "UPDATE `pitanje7_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	
	
	
	
	$odgovor5 = (isset($_POST['peto']) ? $_POST['peto'] : null);
	if($odgovor5 == 'odg1')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje5_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor5 == 'odg2')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje5_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	}
	if($odgovor5 == 'odg3')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje5_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =3");
	}
	
	
	$odgovor6 = (isset($_POST['sesto']) ? $_POST['sesto'] : null);
	if($odgovor6 == 'odg4')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje6_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor6 == 'odg5')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje6_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	}
	if($odgovor6 == 'odg6')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje6_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =3");
	}
	
	
	$odgovor8 = (isset($_POST['osmo']) ? $_POST['osmo'] : null);
	if($odgovor8 == 'odg8')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje8_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =1");
	}
	if($odgovor8 == 'odg9')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje8_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =2");
	}
	if($odgovor8 == 'odg10')
	{
		mysqli_query($povezivanje, "UPDATE `pitanje8_novo` SET `glasovi` = `glasovi`+1 WHERE `id` =3");
	}
	
	
	if(! empty($_POST['minimal']))
		{ 
		$odgovor9=$_POST['minimal']; 
		mysqli_query($povezivanje, "INSERT INTO `pitanje9_novo` (`id`, `odgovor`) VALUES (NULL, '$odgovor9')") or die(mysqli_error($povezivanje));
		}
	
	
	if(! empty($_POST['komentar']))
		{
		$odgovor10=$_POST['komentar'];
		mysqli_query($povezivanje, "INSERT INTO `pitanje10_novo` (`id`, `odgovor`) VALUES (NULL, '$odgovor10')") or die(mysqli_error($povezivanje));
		}
	
	
	$prvo_jesam = mysqli_query($povezivanje, "SELECT * FROM `pitanje1_novo` WHERE `id` =1");
	$niz_pj = mysqli_fetch_array($prvo_jesam);
	$pj_ukupno = $niz_pj['glasovi'];
	
	$prvo_nisam = mysqli_query($povezivanje, "SELECT * FROM `pitanje1_novo` WHERE `id` =2");
	$niz_pn = mysqli_fetch_array($prvo_nisam);
	$pn_ukupno = $niz_pn['glasovi'];
	
	$prvo_ukupno=$pj_ukupno+$pn_ukupno;
	$pj_procenat= round(($pj_ukupno/$prvo_ukupno)*100, 2);
	$pn_procenat=round(($pn_ukupno/$prvo_ukupno)*100, 2);
	
	$drugo_jesam = mysqli_query($povezivanje, "SELECT * FROM `pitanje2_novo` WHERE `id` =1");
	$niz_dj = mysqli_fetch_array($drugo_jesam);
	$dj_ukupno = $niz_dj['glasovi'];
	
	$drugo_nisam = mysqli_query($povezivanje, "SELECT * FROM `pitanje2_novo` WHERE `id` =2");
	$niz_dn = mysqli_fetch_array($drugo_nisam);
	$dn_ukupno = $niz_dn['glasovi'];
	
	$drugo_ukupno=$dj_ukupno+$dn_ukupno;
	$dj_procenat= round(($dj_ukupno/$drugo_ukupno)*100, 2);
	$dn_procenat=round(($dn_ukupno/$drugo_ukupno)*100, 2);
	
	$trece_1=mysqli_query($povezivanje, "SELECT * FROM `pitanje3_novo` WHERE `id` =1");
	$niz_trece1 = mysqli_fetch_array($trece_1);
	$trece1_ukupno = $niz_trece1['glasovi'];
	
	$trece_2=mysqli_query($povezivanje, "SELECT * FROM `pitanje3_novo` WHERE `id` =2");
	$niz_trece2 = mysqli_fetch_array($trece_2);
	$trece2_ukupno = $niz_trece2['glasovi'];
	
	$trece_3=mysqli_query($povezivanje, "SELECT * FROM `pitanje3_novo` WHERE `id` =3");
	$niz_trece3 = mysqli_fetch_array($trece_3);
	$trece3_ukupno = $niz_trece3['glasovi'];
	
	$trece_4=mysqli_query($povezivanje, "SELECT * FROM `pitanje3_novo` WHERE `id` =4");
	$niz_trece4 = mysqli_fetch_array($trece_4);
	$trece4_ukupno = $niz_trece4['glasovi'];
	
	$trece_5=mysqli_query($povezivanje, "SELECT * FROM `pitanje3_novo` WHERE `id` =5");
	$niz_trece5 = mysqli_fetch_array($trece_5);
	$trece5_ukupno = $niz_trece5['glasovi'];
	
	$trece_ukupno=$trece1_ukupno+$trece2_ukupno+$trece3_ukupno+$trece4_ukupno+$trece5_ukupno;
	$trece1_procenat= round(($trece1_ukupno/$trece_ukupno)*100, 2);
	$trece2_procenat= round(($trece2_ukupno/$trece_ukupno)*100, 2);
	$trece2_procenat= round(($trece2_ukupno/$trece_ukupno)*100, 2);
	$trece3_procenat= round(($trece3_ukupno/$trece_ukupno)*100, 2);
	$trece4_procenat= round(($trece4_ukupno/$trece_ukupno)*100, 2);
	$trece5_procenat= round(($trece5_ukupno/$trece_ukupno)*100, 2);
	
	
	
	$cetvrto_1=mysqli_query($povezivanje, "SELECT * FROM `pitanje4_novo` WHERE `id` =1");
	$niz_cetvrto1 = mysqli_fetch_array($cetvrto_1);
	$cetvrto1_ukupno = $niz_cetvrto1['glasovi'];
	
	$cetvrto_2=mysqli_query($povezivanje, "SELECT * FROM `pitanje4_novo` WHERE `id` =2");
	$niz_cetvrto2 = mysqli_fetch_array($cetvrto_2);
	$cetvrto2_ukupno = $niz_cetvrto2['glasovi'];
	
	$cetvrto_3=mysqli_query($povezivanje, "SELECT * FROM `pitanje4_novo` WHERE `id` =3");
	$niz_cetvrto3 = mysqli_fetch_array($cetvrto_3);
	$cetvrto3_ukupno = $niz_cetvrto3['glasovi'];
	
	$cetvrto_4=mysqli_query($povezivanje, "SELECT * FROM `pitanje4_novo` WHERE `id` =4");
	$niz_cetvrto4 = mysqli_fetch_array($cetvrto_4);
	$cetvrto4_ukupno = $niz_cetvrto4['glasovi'];
	
	$cetvrto_5=mysqli_query($povezivanje, "SELECT * FROM `pitanje4_novo` WHERE `id` =5");
	$niz_cetvrto5 = mysqli_fetch_array($cetvrto_5);
	$cetvrto5_ukupno = $niz_cetvrto5['glasovi'];
	
	$cetvrto_ukupno=$cetvrto1_ukupno+$cetvrto2_ukupno+$cetvrto3_ukupno+$cetvrto4_ukupno+$cetvrto5_ukupno;
	$cetvrto1_procenat= round(($cetvrto1_ukupno/$cetvrto_ukupno)*100, 2);
	$cetvrto2_procenat= round(($cetvrto2_ukupno/$cetvrto_ukupno)*100, 2);
	$cetvrto3_procenat= round(($cetvrto3_ukupno/$cetvrto_ukupno)*100, 2);
	$cetvrto4_procenat= round(($cetvrto4_ukupno/$cetvrto_ukupno)*100, 2);
	$cetvrto5_procenat= round(($cetvrto5_ukupno/$cetvrto_ukupno)*100, 2);
	
	
	
	$peto_1=mysqli_query($povezivanje, "SELECT * FROM `pitanje5_novo` WHERE `id` =1");
	$niz_peto1 = mysqli_fetch_array($peto_1);
	$peto1_ukupno = $niz_peto1['glasovi'];
	
	$peto_2=mysqli_query($povezivanje, "SELECT * FROM `pitanje5_novo` WHERE `id` =2");
	$niz_peto2 = mysqli_fetch_array($peto_2);
	$peto2_ukupno = $niz_peto2['glasovi'];
	
	$peto_3=mysqli_query($povezivanje, "SELECT * FROM `pitanje5_novo` WHERE `id` =3");
	$niz_peto3 = mysqli_fetch_array($peto_3);
	$peto3_ukupno = $niz_peto3['glasovi'];
	
	$peto_ukupno=$peto1_ukupno+$peto2_ukupno+$peto3_ukupno;
	$peto1_procenat= round(($peto1_ukupno/$peto_ukupno)*100, 2);
	$peto2_procenat= round(($peto2_ukupno/$peto_ukupno)*100, 2);
	$peto3_procenat= round(($peto3_ukupno/$peto_ukupno)*100, 2);
	
	
	$sesto_1=mysqli_query($povezivanje, "SELECT * FROM `pitanje6_novo` WHERE `id` =1");
	$niz_sesto1 = mysqli_fetch_array($sesto_1);
	$sesto1_ukupno = $niz_sesto1['glasovi'];
	
	$sesto_2=mysqli_query($povezivanje, "SELECT * FROM `pitanje6_novo` WHERE `id` =2");
	$niz_sesto2 = mysqli_fetch_array($sesto_2);
	$sesto2_ukupno = $niz_sesto2['glasovi'];
	
	$sesto_3=mysqli_query($povezivanje, "SELECT * FROM `pitanje6_novo` WHERE `id` =3");
	$niz_sesto3 = mysqli_fetch_array($sesto_3);
	$sesto3_ukupno = $niz_sesto3['glasovi'];
	
	$sesto_ukupno=$sesto1_ukupno+$sesto2_ukupno+$sesto3_ukupno;
	$sesto1_procenat= round(($sesto1_ukupno/$sesto_ukupno)*100, 2);
	$sesto2_procenat= round(($sesto2_ukupno/$sesto_ukupno)*100, 2);
	$sesto3_procenat= round(($sesto3_ukupno/$sesto_ukupno)*100, 2);
	
	
	$sedmo_da = mysqli_query($povezivanje, "SELECT * FROM `pitanje7_novo` WHERE `id` =1");
	$niz_sd = mysqli_fetch_array($sedmo_da);
	$sd_ukupno = $niz_sd['glasovi'];
	
	$sedmo_ne = mysqli_query($povezivanje, "SELECT * FROM `pitanje7_novo` WHERE `id` =2");
	$niz_sn = mysqli_fetch_array($sedmo_ne);
	$sn_ukupno = $niz_sn['glasovi'];
	
	$sedmo_ukupno=$sd_ukupno+$sn_ukupno;
	$sd_procenat= round(($sd_ukupno/$sedmo_ukupno)*100, 2);
	$sn_procenat=round(($sn_ukupno/$sedmo_ukupno)*100, 2);
	
	$osmo_1=mysqli_query($povezivanje, "SELECT * FROM `pitanje8_novo` WHERE `id` =1");
	$niz_osmo1 = mysqli_fetch_array($osmo_1);
	$osmo1_ukupno = $niz_osmo1['glasovi'];
	
	$osmo_2=mysqli_query($povezivanje, "SELECT * FROM `pitanje8_novo` WHERE `id` =2");
	$niz_osmo2 = mysqli_fetch_array($osmo_2);
	$osmo2_ukupno = $niz_osmo2['glasovi'];
	
	$osmo_3=mysqli_query($povezivanje, "SELECT * FROM `pitanje8_novo` WHERE `id` =3");
	$niz_osmo3 = mysqli_fetch_array($osmo_3);
	$osmo3_ukupno = $niz_osmo3['glasovi'];
	
	$osmo_ukupno=$osmo1_ukupno+$osmo2_ukupno+$osmo3_ukupno;
	$osmo1_procenat= round(($osmo1_ukupno/$osmo_ukupno)*100, 2);
	$osmo2_procenat= round(($osmo2_ukupno/$osmo_ukupno)*100, 2);
	$osmo3_procenat= round(($osmo3_ukupno/$osmo_ukupno)*100, 2);
	
	
	
	$deveto_upit=mysqli_query($povezivanje, "SELECT * FROM `pitanje9_novo`");
	$deveto_ukupno=mysqli_num_rows($deveto_upit);
	
	$deveto_odg=mysqli_query($povezivanje, "SELECT * FROM `pitanje9_novo` WHERE `id` ='$deveto_ukupno'");
	$niz_deveto = mysqli_fetch_array($deveto_odg);
	$deveto_odgovor = $niz_deveto['odgovor'];
	
	$deseto_upit=mysqli_query($povezivanje, "SELECT * FROM `pitanje10_novo`");
	$deseto_ukupno=mysqli_num_rows($deseto_upit);
	
	$deseto_odg=mysqli_query($povezivanje, "SELECT * FROM `pitanje10_novo` WHERE `id` ='$deseto_ukupno'");
	$niz_deseto = mysqli_fetch_array($deseto_odg);
	$deseto_odgovor = $niz_deseto['odgovor'];
	
	
	
	
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
			<br><p>1. Na pitanje da li ste zadovoljni standardnim modelom nastave posetioci sajta su odgovorili:</p>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Jesu:</td><td  style="background-color: #00ffff; width:<?php $sirina1=round(4*$pj_procenat, 0); echo $sirina1; ?>px";><?php echo $pj_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Nisu:</td><td  style="background-color: #ffccff; width:<?php $sirina2=round(4*$pn_procenat, 0); echo $sirina2;  ?>px"; display:inline-block;><?php echo $pn_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<br><p>2. Na pitanje da li ste nekada koristili neki od vidova online nastave posetioci sajta su odgovorili:</p>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Jesu:</td><td  style="background-color: #00ffff; width:<?php $sirina1=round(4*$dj_procenat, 0); echo $sirina1; ?>px";><?php echo $dj_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Nisu:</td><td  style="background-color: #ffccff; width:<?php $sirina2=round(4*$dn_procenat, 0); echo $sirina2;  ?>px"; display:inline-block;><?php echo $dn_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>3. Na pitanjekoje elemente klasične nastave bi želeli da promenite posetioci sajta su odgovorili:</p>
			<table align="center" style="width:600px"><tr><td style="width:200px">Postupak obrade gradiva:</td><td  style="background-color: #00ffff; width:<?php $sirina3=round(4*$trece1_procenat, 0); echo $sirina3; ?>px"><?php echo $trece1_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Udžbenike:</td><td  style="background-color: #ffccff; width:<?php $sirina4=round(4*$trece2_procenat, 0); echo $sirina4; ?>px"><?php echo $trece2_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Način provere znanja:</td><td  style="background-color: #ffffcc; width:<?php $sirina5=round(4*$trece3_procenat, 0); echo $sirina5; ?>px"><?php echo $trece3_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Način izrade domaćih zadataka:</td><td  style="background-color: #d9ffb3; width:<?php $sirina6=round(4*$trece4_procenat, 0); echo $sirina6;  ?>px"><?php echo $trece4_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Ni jedan od ponuđenih odgovora:</td><td  style="background-color: #ffbf80; width:<?php $sirina7=round(4*$trece5_procenat, 0); echo $sirina7; ?>px"><?php echo $trece5_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
		
			<p>4. Na pitanje koji elementi online nastave bi želeli da postanu stalni u nastavi posetioci sajta su odgovorili:</p>
			<table align="center" style="width:600px"><tr><td style="width:200px">Komunikacija sa profesorima elektronskim putem:</td><td  style="background-color: #00ffff; width:<?php $sirina3=round(4*$cetvrto1_procenat, 0); echo $sirina3; ?>px"><?php echo $cetvrto1_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Nastava putem video linka:</td><td  style="background-color: #ffccff; width:<?php $sirina4=round(4*$cetvrto2_procenat, 0); echo $sirina4; ?>px"><?php echo $cetvrto2_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Interaktivnost nastave:</td><td  style="background-color: #ffffcc; width:<?php $sirina5=round(4*$cetvrto3_procenat, 0); echo $sirina5; ?>px"><?php echo $cetvrto3_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Digitalni udžbenici:</td><td  style="background-color: #d9ffb3; width:<?php $sirina6=round(4*$cetvrto4_procenat, 0); echo $sirina6;  ?>px"><?php echo $cetvrto4_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Ni jedan od ponuđenih odgovora:</td><td  style="background-color: #ffbf80; width:<?php $sirina7=round(4*$cetvrto5_procenat, 0); echo $sirina7; ?>px"><?php echo $cetvrto5_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>5. Na pitanje koji predmeti u srednjoškolskom obrazovanju su najpogodniji za klasičnu nastavu posetioci sajta su odgovorili:</p>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe prirodnih nauka:</td><td  style="background-color: #00ffff; width:<?php $sirina3=round(4*$peto1_procenat, 0); echo $sirina3; ?>px"><?php echo $peto1_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe filoloških nauka:</td><td  style="background-color: #ffccff; width:<?php $sirina4=round(4*$peto2_procenat, 0); echo $sirina4; ?>px"><?php echo $peto2_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe društvenih nauka:</td><td  style="background-color: #ffffcc; width:<?php $sirina5=round(4*$peto3_procenat, 0); echo $sirina5; ?>px"><?php echo $peto3_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>6. Na pitanje koji predmeti u srednjoškolskom obrazovanju su najpogodniji za online nastavu posetioci sajta su odgovorili:</p>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe prirodnih nauka:</td><td  style="background-color: #00ffff; width:<?php $sirina3=round(4*$sesto1_procenat, 0); echo $sirina3; ?>px"><?php echo $sesto1_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe filoloških nauka:</td><td  style="background-color: #ffccff; width:<?php $sirina4=round(4*$sesto2_procenat, 0); echo $sirina4; ?>px"><?php echo $sesto2_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Predmeti iz grupe društvenih nauka:</td><td  style="background-color: #ffffcc; width:<?php $sirina5=round(4*$sesto3_procenat, 0); echo $sirina5; ?>px"><?php echo $sesto3_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>7. Na pitanje  da li je korišćenje tablet uređaja pogodno za pravilan razvoj motoričkih sposobnosti najmlađih učenika posetioci sajta su odgovorili:</p>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Da:</td><td  style="background-color: #00ffff; width:<?php $sirina1=round(4*$sd_procenat, 0); echo $sirina1; ?>px";><?php echo $sd_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center"  style="width:600px"><tr><td style="width:200px">Ne:</td><td  style="background-color: #ffccff; width:<?php $sirina2=round(4*$sn_procenat, 0); echo $sirina2;  ?>px"; display:inline-block;><?php echo $sn_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>8. Na pitanje koja od ponuđenih platformi je najpogodnija za online nastavu posetioci sajta su odgovorili:</p>
			<table align="center" style="width:600px"><tr><td style="width:200px">Moodle:</td><td  style="background-color: #00ffff; width:<?php $sirina3=round(4*$osmo1_procenat, 0); echo $sirina3; ?>px"><?php echo $osmo1_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Google Classroom:</td><td  style="background-color: #ffccff; width:<?php $sirina4=round(4*$osmo2_procenat, 0); echo $sirina4; ?>px"><?php echo $osmo2_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<table align="center" style="width:600px"><tr><td style="width:200px">Microsoft Teams:</td><td  style="background-color: #ffffcc; width:<?php $sirina5=round(4*$osmo3_procenat, 0); echo $sirina5; ?>px"><?php echo $osmo3_procenat ?>%</td><td>&nbsp;</td></tr></table>
			<br><br>
			
			<p>9. Na deveto pitanje pristiglo je ukupno <b><?php echo  $deveto_ukupno ?></b> odgovora.</p><p>Pristup svim odgovorima ima samo <b>administrator sajta (ime: admin, sifra: admin)</b></p>
			<br><br>
			
			<p>10. Na pitanje da li Zemljina gravitacija privlači Mesec pristiglo je <b><?php echo $deseto_ukupno ?></b> odgovora. Pristup svim odgovorima ima samo <b>administrator sajta (ime: admin, sifra: admin)</b></p>
			
		</div>
	</div>
</body>
</html>