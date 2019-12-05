<?php
include '../../control/ConteudoControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');
echo json_encode($conteudoControl->findAll());
?>