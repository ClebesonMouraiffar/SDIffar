<?php
include '../../control/DisciplinaControl.php';
$disciplinaControl = new DisciplinaControl();

header('Content-type: application/json; charset=utf-8');
echo json_encode($disciplinaControl->findAll());
?>