<?php require_once 'cabecalho.php'; ?>
<form action="tabuada.php" method="GET">
	<h1>Tabuada</h1>
	<p>Digite um número</p>
	<p><input type="number" name="numero" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>		
</form>
<?php
if(isset($_GET['botao'])){
	echo "<section class='conteudo'>"
	$numero=$_GET['multiplica']
	$multiplica=0;
		for ($contador=$numero; $numero<=10 ; $contador++) { 
			$multiplica=$numero*$contador;
			
		}

	}







?>