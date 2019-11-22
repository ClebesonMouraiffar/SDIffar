<?php
include '../../control/AlunoControl.php';
$alunoControl = new AlunoControl();

header('Content-type: application/json; charset=utf-8');

foreach($alunoControl->findAll() as $valor){
	echo json_encode($valor);
}

?>