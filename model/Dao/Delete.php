<?php

require '../util/Conn.php';

class delete extends Conn{

	function deleteById($identificador, $tabela, $chavePK){

		$result = parent::getConn()->query("delete from $tabela Where $chavePK = $identificador ");

		if($result){
			echo "<script> alert('Usuário Deletado com Sucesso'); </script>"; 
			echo "<script> location.href='../view/cpadmin/list-usuario.php'; </script>"; 
		}else{
			header("Location: ../view/cpadmin/erro.php");
		}

	}

}