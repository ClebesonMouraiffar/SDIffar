<?php
include '../../model/Disciplina.php';

class DisciplinaControl{
	function insert($obj){
		$conteudo = new Disciplina();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Disciplina();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Disciplina();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Disciplina();
		return $conteudo->findAll();
	}
}

?>