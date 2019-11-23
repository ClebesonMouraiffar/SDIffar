<?php
include '../../model/Nota.php';

class NotaControl{
	function insert($obj){
		$conteudo = new Nota();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$conteudo = new Nota();
		return $conteudo->update($obj,$id);
	}

	function delete($obj,$id){
		$conteudo = new Nota();
		return $conteudo->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Nota();
		return $conteudo->findAll();
	}
}

?>