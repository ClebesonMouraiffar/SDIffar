<?php
include '../../model/Aluno.php';

class AlunoControl{
	function insert($obj){
		$conteudo = new Aluno();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Aluno();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Aluno();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Aluno();
		return $conteudo->findAll();
	}
}

?>