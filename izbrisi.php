<?php


session_start();
if(!isset($_SESSION['prijavljen']))
	header("location:index.php");

	$id = $_GET['id'];


	//$povezivanje = mysql_connect("faradej.comoj.com","a2019926","Kadralija1!") or die("Konekcija je neuspešna");
	$povezivanje = mysqli_connect("localhost","root","") or die("Konekcija je neuspešna");
	//mysql_select_db("bazaip");
	mysqli_select_db($povezivanje, "bazaip");
	
	
	$sql="DELETE FROM `pitanje9_novo` WHERE `id` ='$id'";
	if(mysqli_query($povezivanje, $sql)){
		header("location:zadatak4.php");
	}
	else echo "Greska! " . mysqli_error($povezivanje);
	
	

	


?>