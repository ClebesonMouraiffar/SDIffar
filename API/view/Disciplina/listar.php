<?php
include '../../control/DisciplinaControl.php';
$disciplinaControl = new DisciplinaControl();

header('Content-type: application/json; charset=utf-8');

foreach($disciplinaControl->findAll() as $valor){
	echo json_encode($valor);
}

?>