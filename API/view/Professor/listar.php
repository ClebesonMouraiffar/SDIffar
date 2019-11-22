<?php
include '../../control/ProfessorControl.php';
$professorControl = new ProfessorControl();

header('Content-type: application/json; charset=utf-8');

foreach($professorControl->findAll() as $valor){
	echo json_encode($valor);
}

?>