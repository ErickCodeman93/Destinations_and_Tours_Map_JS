<?php
header('Content-Type: application/json');
$answer = ['status' => 'error'];
if (isset($_POST['ruinas'])) {
	$ruinas	= $_POST['ruinas'];


}
else
{
	echo "Error!!";

}


switch ($_POST['ruinas']) {
	case 'chichenItza':
		$chichenItza = array(20.6839544,-88.5683359);
		$descripcion = "Aqui es chichenItza";
		$answer = ['status' => 'success','msg' => $chichenItza,'desc' =>$descripcion];
		echo (json_encode($answer));
		break;

	case 'tulum':
		$tulum = array(20.1980259,-87.5024813);
		$descripcion = "Aqui es tulum";
		$answer = ['status' => 'success','msg' => $tulum ,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	case 'coba':
		$coba = array(20.4913354,-87.7263204);
		$descripcion = "Aqui es coba";
		$answer = ['status' => 'success','msg' => $coba ,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	case 'xcaret':
		$xcaret = array(20.5791102,-87.1216336);
		$descripcion = "Aqui es xcaret";
		$answer = ['status' => 'success','msg' => $xcaret ,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	case 'xelHa':
		$xelHa = array(20.2878963,-87.5192117);
		$descripcion = "Aqui es xelHa";
		$answer = ['status' => 'success','msg' => $xelHa ,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	case 'kabah':
		$kabah = array(20.2466419,-89.6500092);
		$descripcion = "Aqui es kabah";
		$answer = ['status' => 'success','msg' => $kabah ,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	case 'Kohunlinch':
		$Kohunlinch = array(18.4196699,-88.7914671);
		$descripcion = "Aqui es Kohunlinch";
		$answer = ['status' => 'success','msg' => $Kohunlinch,'desc' =>$descripcion];
		echo(json_encode($answer));
		break;

	default:
		echo "no te gusta viajar??";
		break;
}	
  
?>