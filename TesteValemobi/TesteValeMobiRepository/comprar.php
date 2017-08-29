<html>
<head>
	<title>Comprar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<meta charset="UTF-8">
	
</head>
<body>
	<? //include("connect.php"); ?>
	<?php
	require_once "cadastro.php";
	if (isset($_POST['enviar'])) {
		$conn = new Connect();
		$tipo_Mercadoria = $_POST['tipo_Mercadoria'];
 		$nome_Mercadoria = $_POST['nome'];
 		$quantidade = $_POST['quantidade'];
		$preco = $_POST['preco'];
 		$tipo_Negocio = $_POST['tipo_negocio']; 

	$conn->cadastrar($tipo_Mercadoria, $nome_Mercadoria, $quantidade, $preco, $tipo_Negocio);
	}



	?>
	<header><h1><center>Bem Vindo ao nosso site!</center></h1></header>

	<div class="bge">
		<div class="bg">
	
			<div class="pg">
	
				<nav class="cp">
					<form action="" method="POST">


						<ul class="op2" type="none">	
							<li><p>Tipo: <input type="text" name="tipo_Mercadoria" id="tipo_Mercadoria " placeholder="Tipo de mercadoria" required="required"></p></li>
							<li><p>Nome: <input type="text" name="nome" id="nome" placeholder="Nome da Mercadoria" required="required"></p></li>
							<li><p>Quantidade: <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade de Mercadoria" required="required"></p></li>
							<li><p>Preço: <input type="number" name="preco" id="preco" placeholder="Preço da Mercadoria" id="preco"></p></li>
							<li><p>Tipo de Negócio: <select name="tipo_negocio" id="tipo_negocio" >
								<option id="compra">Compra</option>
								<option id="venda">Venda</option>
							</select></p></li>
							<br><br><br>
							
						</ul>
						<input type="submit" value="Enviar" id="enviar" name="enviar" placeholder="Enviar Formulário">

					</form>

				</nav>

		<footer><ul class="lista"><li><a href="index.php">Home</a></li><li><a href="">Comprar</a></li><li><a href="visualizar.php">Visualizar</a></li></ul></footer>
			</div>
		</div>
	</div>

</body>
</html>