<?php

session_start();

$ime = $_POST['imee'];
$sifra = $_POST['sifraa'];

if($ime&&$sifra)
{
	//$povezivanje = mysql_connect("faradej.comoj.com","a2019926","Kadralija1!") or die("Konekcija je neuspešna");
	//$povezivanje = mysqli_connect("localhost","root","") or die("Konekcija je neuspešna");
	$povezivanje = mysqli_connect("localhost","id14891008_root","wH7=_lyQ6cqHUpD1") or die("Konekcija je neuspešna");
	//mysql_select_db("bazaip");
	mysqli_select_db($povezivanje, "id14891008_bazaip");
	$ime = stripslashes($ime);
	$sifra = stripslashes($sifra);
	$ime = mysqli_real_escape_string($povezivanje, $ime);
	$sifra = mysqli_real_escape_string($povezivanje, $sifra);
	
	$sql="SELECT * FROM `korisnici_novi` WHERE ime='$ime';";
	$upit=mysqli_query($povezivanje, $sql);
	$red=mysqli_num_rows($upit);

	if($red!=0)
	{
		while ($red = mysqli_fetch_assoc($upit))
		{
			$bpime = $red['ime'];
			$bpsifra = $red['sifra'];
		}
		if($ime==$bpime&&$bpsifra==$sifra)
		{	
			if($ime=='admin'){$_SESSION['prijavljen']=1; header("location:zadatak4.php");}
			else{
			$_SESSION['prijavljen']=1;
			header("location:zadatak1.php");
				
			}
			
			
		}
		else
			echo "<script type='text/javascript'> window.alert('Uneli ste pogrešnu šifru!'); window.history.back(); </script>";
	}
	else
		echo "<script type='text/javascript'> window.alert('Ne postoji korisnik sa ovim korisničkim imenom!'); window.history.back(); </script>";
}
else
	echo "<script type='text/javascript'> window.alert('Da bi ste pristupili sajtu unesite korisničko ime i šifru!'); window.history.back(); </script>";


?>