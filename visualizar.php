<html>
<head>
	<title>Visualizar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<meta charset="UTF-8">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body>
		<header><h1><center>Bem Vindo ao nosso site!</center></h1></header>

	<div class="bge">
		<div class="bg">
	
			<div class="pg">
	
				<nav class="cp">
					<center>	
						<?php
						include("connect.php");
						?>
					<table class="table">
						<thead class="bg-primary">
							<tr>
								<th>#</th>
								<th>Tipo</th>
								<th>Nome</th>
								<th>Quantidade</th>
								<th>Preço</th>
								<th>Tipo de Negócio</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
								<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select cod_mercadoria From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />" . $value;
        									}

    									}
    								}	

								?>
								</th>
								<th scope="row">
								<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select tipo_Mercadoria From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />" . $value;
        									}

    									}
    								}	

								?>
								</th>
								<th scope="row">
								<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select nome_Mercadoria From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />" . $value;
        									}

    									}
    								}	

								?>
								</th>
								<th scope="row">
									<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select quantidade From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />" . $value;
        									}

    									}
    								}	

								?>
								</th>
								<th scope="row">
									<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select preco From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />R$ " . $value;
        									}

    									}
    								}	

								?>									
								</th>
								<th scope="row">
									<?php
									//codigo da mercadoria
									$sql = $mysqli->query("Select tipo_Negocio From produto");

									if($sql){ 
    									while($exibe = $sql->fetch_assoc()){
        									foreach($exibe as $key => $value){
            									echo "<br />" . $value;
        									}

    									}
    								}	

								?>
								</th>
							</tr>
							

							
						</tbody>

					</table>					

					</center>
						

				</nav>

		<footer><ul class="lista"><li><a href="index.php">Home</a></li><li><a href="comprar.php">Comprar</a></li><li><a href="visualizar.php">Visualizar</a></li></ul></footer>
			</div>
		</div>
	</div>



</body>
</html>