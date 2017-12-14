<?php
header('Content-Type: application/json');
$answer = ['status' => 'error'];
if (isset($_POST['ruinas'])) {
	$ruinas	= $_POST['ruinas'];
	//echo "me enviaste ".$ruinas." ";

}
else
{
	echo "Error!!";

}


switch ($_POST['ruinas']) {
	case 'chichenItza':
		//echo "Debes visitar ".$ruinas;
		$chichenItza = '20.6839544,-88.5683359';
		$answer = ['status' => 'success','msg' => $chichenItza];
		echo json_encode($answer, JSON_FORCE_OBJECT);
		//json_encode($chichenItza);
		break;

	case 'tulum':
		//echo "Debes visitar ".$ruinas;
		$tulum = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $tulum];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'coba':
		//echo "Debes visitar ".$ruinas;
		$coba = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $coba];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'xcaret':
		//echo "Debes visitar ".$ruinas;
		$tulum = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $tulum];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'xelHa':
		//echo "Debes visitar ".$ruinas;
		$xelHa = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $xelHa];
		echo(json_encode($answer));
		//json_encode($xelHa);
		break;

	case 'kabah':
		//echo "Debes visitar ".$ruinas;
		$kabah = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $kabah];
		echo(json_encode($answer));
		//json_encode($kabah);
		break;


	default:
		echo "no te gusta viajar??";
		break;
}	
  
?>