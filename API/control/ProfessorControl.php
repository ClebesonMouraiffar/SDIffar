<?php
include '../../model/Professor.php';

class ProfessorControl{
	function insert($obj){
		$conteudo = new Professor();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Professor();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Professor();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Professor();
		return $conteudo->findAll();
	}
}

?>