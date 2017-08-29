<?php 

/**
* 
*/
class Connect
{
	private	$tipo_Mercadoria;
 	private	$nome_Mercadoria;
 	private	$quantidade;
	private	$preco;
 	private	$tipo_Negocio;
	

	function Cadastrar($tipo_Mercadoria, $nome_Mercadoria, $quantidade, $preco, $tipo_Negocio)
	{
		include("connect.php");			

 		$this->$tipo_Mercadoria = $tipo_Mercadoria;
 		$this->$nome_Mercadoria = $nome_Mercadoria;
 		$this->$quantidade = $quantidade;
 		$this->$preco = $preco;
		$this->$tipo_Negocio = $tipo_Negocio;

 		$sql = $mysqli->query("INSERT INTO produto (tipo_Mercadoria, nome_Mercadoria, quantidade, preco, tipo_Negocio) values('$tipo_Mercadoria', '$nome_Mercadoria', '$quantidade', '$preco', '$tipo_Negocio')");

		if ($sql) {		
    		echo "<script>alert('Cadastro Concluído!')</script>";
    		//header("refresh:0; url=comprar.php");

		} else {
			echo "<script>alert('Fail')</script>";
			//header("refresh:0; url=comprar.php");
		}

	}

}// Fim class


?>