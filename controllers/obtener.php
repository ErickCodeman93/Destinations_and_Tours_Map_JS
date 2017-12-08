<?php

if (isset($_POST['ruinas'])) {
	$ruinas	= $_POST['ruinas'];
	echo "me enviaste ".$ruinas;

}
else
{
	echo "Error!!";

}

switch ($_POST['ruinas']) {
	case 'chichenItza':
		echo "Debes visitar ".$ruinas;
		$chichenItza = '20.6839544,-88.5683359';
		print_r(json_encode($chichenItza));
		//json_encode($chichenItza);
		break;

	case 'tulum':
		echo "Debes visitar ".$ruinas;
		$tulum = array(20.6839544,-88.5683359);
		//print_r(json_encode($tulum));
		json_encode($tulum);
		break;

	case 'coba':
		echo "Debes visitar ".$ruinas;
		$coba = array(20.6839544,-88.5683359);
		//print_r(json_encode($coba));
		json_encode($tulum);
		break;

	case 'xcaret':
		echo "Debes visitar ".$ruinas;
		$tulum = array(20.6839544,-88.5683359);
		//print_r(json_encode($tulum));
		json_encode($tulum);
		break;

	case 'xelHa':
		echo "Debes visitar ".$ruinas;
		$xelHa = array(20.6839544,-88.5683359);
		//print_r(json_encode($xelHa));
		json_encode($xelHa);
		break;

	case 'kabah':
		echo "Debes visitar ".$ruinas;
		$kabah = array(20.6839544,-88.5683359);
		//print_r(json_encode($kabah));
		json_encode($kabah);
		break;


	default:
		echo "no te gusta viajar??";
		break;
}
  exit();

?>