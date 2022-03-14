<?php

session_start();

$ime = $_POST['imee'];
$sifra = $_POST['sifraa'];
$status1 = $_POST['status1'];
$status2 = $_POST['status2'];

//if($ime && $sifra)
//{
	//$povezivanje = mysql_connect("faradej.comoj.com","a2019926","Kadralija1!") or die("Konekcija je neuspešna");
	$povezivanje = mysqli_connect("localhost","root","") or die("Konekcija je neuspešna");
	//mysql_select_db("bazaip");
	mysqli_select_db($povezivanje, "bazaip");
	$ime = stripslashes($ime);
	$sifra = stripslashes($sifra);
	$ime = mysqli_real_escape_string($povezivanje, $ime);
	$sifra = mysqli_real_escape_string($povezivanje, $sifra);
	
	$sql="SELECT * FROM `korisnici_novi` WHERE ime='$ime';";
	$upit=mysqli_query($povezivanje, $sql);
	$broj_poklapanja=mysqli_num_rows($upit);

	if($broj_poklapanja==0)
	{
		mysqli_query($povezivanje, "INSERT INTO `korisnici_novi` (`ime`, `sifra`, `status`, `razlog`) VALUES ('$ime', '$sifra', '$status1', '$status2')") or die(mysql_error());
		$_SESSION['prijavljen']=1;
			header("location:zadatak1.php");
		/*while ($broj_poklapanja = mysqli_fetch_assoc($upit))
		{
			$bpime = $broj_poklapanja['ime'];
			$bpsifra = $broj_poklapanja['sifra'];
		}
		if($ime==$bpime&&$bpsifra==$sifra)
		{
			$_SESSION['prijavljen']=1;
			header("location:zadatak1.php");
		}
		else
			echo "<script type='text/javascript'> window.alert('Uneli ste pogrešnu šifru!'); window.history.back(); </script>";
		*/
	}
	else
		echo "<script type='text/javascript'> window.alert('Korisnik sa zadatim imenom već postoji!'); window.history.back(); </script>";
//}
//else
//	echo "<script type='text/javascript'> window.alert('Da bi ste pristupili sajtu unesite korisničko ime i šifru!'); window.history.back(); </script>";


?>