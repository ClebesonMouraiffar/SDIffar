<?php
include '../../control/AlunoControl.php';
$alunoControl = new AlunoControl();

header('Content-type: application/json; charset=utf-8');


echo json_encode($alunoControl->findAll());


?>