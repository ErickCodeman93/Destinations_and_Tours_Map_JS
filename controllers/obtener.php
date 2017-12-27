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
		$chichenItza = array(20.6839544,-88.5683359);
		$answer = ['status' => 'success','msg' => $chichenItza];
		echo (json_encode($answer));
		//json_encode($chichenItza);
		break;

	case 'tulum':
		//echo "Debes visitar ".$ruinas;
		$tulum = array(20.1980259,-87.5024813);
		$answer = ['status' => 'success','msg' => $tulum];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'coba':
		//echo "Debes visitar ".$ruinas;
		$coba = array(20.4913354,-87.7263204);
		$answer = ['status' => 'success','msg' => $coba];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'xcaret':
		//echo "Debes visitar ".$ruinas;
		$tulum = array(20.5791102,-87.1216336);
		$answer = ['status' => 'success','msg' => $tulum];
		echo(json_encode($answer));
		//json_encode($tulum);
		break;

	case 'xelHa':
		//echo "Debes visitar ".$ruinas;
		$xelHa = array(20.2878963,-87.5192117);
		$answer = ['status' => 'success','msg' => $xelHa];
		echo(json_encode($answer));
		//json_encode($xelHa);
		break;

	case 'kabah':
		//echo "Debes visitar ".$ruinas;
		$kabah = array(20.2466419,-89.6500092);
		$answer = ['status' => 'success','msg' => $kabah];
		echo(json_encode($answer));
		break;

	case 'Kohunlinch':
		//echo "Debes visitar ".$ruinas;
		$Kohunlinch = array(18.4196699,-88.7914671);
		$answer = ['status' => 'success','msg' => $Kohunlinch];
		echo(json_encode($answer));
		break;

	default:
		echo "no te gusta viajar??";
		break;
}	
  
?>