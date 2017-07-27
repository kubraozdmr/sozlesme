<?php
	include_once('DB.php');
	
	$evsahibi   = $_POST['evsahibi'];
	$evsahibitc = $_POST['evsahibitc'];
	$evsahibiadres= $_POST['evsahibiadres'];
	$kiraci= $_POST['kiraci'];
	$kiracitc= $_POST['kiracitc'];
	$kiraciadres= $_POST['kiraciadres'];
	$kiralananyer= $_POST['kiralananyer'];
	$odemeduzeni= $_POST['odemeduzeni'];
	$baslangic= $_POST['baslangic'];
	$bitis= $_POST['bitis'];
	$kirabedeli= $_POST['kirabedeli'];
	$parabirimi= $_POST['parabirimi'];
	$banka= $_POST['banka'];
	$sube= $_POST['sube'];
	$subeno= $_POST['subeno'];
	$iban= $_POST['iban'];
	$hesapno= $_POST['hesapno'];
	$teminat= $_POST['teminat'];
	
	
	if(mysqli_query($conn,"INSERT INTO test(evsahibi,evsahibitc,evsahibiadres,kiraci,kiracitc,kiraciadres,kiralananyer,odemeduzeni,baslangic,bitis,kirabedeli,parabirimi,banka,sube,subeno,iban,hesapno,teminat) VALUES ('$evsahibi', '$evsahibitc','$evsahibiadres','$kiraci','$kiracitc','$kiraciadres','$kiralananyer','$odemeduzeni','$baslangic','$bitis','$kirabedeli','$parabirimi','$banka','$sube','$subeno','$iban','$hesapno','$teminat')"))
	    echo "Successfully Inserted";
	else
	    echo "Insertiıon Failed" ;
	
?>