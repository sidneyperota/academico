<?php


		include "banco.php";	



		function ultimoCaixa() { 
			$conexao = conectar();
			$sql = 'SELECT max(data) as data FROM caixa';
			$resultado = mysqli_query($conexao, $sql );
    		$lancamento = array();
    		$lancamento = mysqli_fetch_assoc($resultado);
			return $lancamento['data'];
		}



		// Listar todos os caixas 
		function listarCaixas() { 
			$conexao = conectar(); 
			$sql = "SELECT * FROM caixa order by data"; 
			$resultado = mysqli_query($conexao, $sql );
    		return $resultado; 
		}



?>

