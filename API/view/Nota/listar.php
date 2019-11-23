<?php
include '../../control/NotaControl.php';
$notaControl = new NotaControl();

header('Content-type: application/json; charset=utf-8');

foreach($notaControl->findAll() as $valor){
	echo json_encode($valor);
}

?>