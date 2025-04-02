<?php require_once 'cabecalho.php'; ?>
<form action="tabuada.php" method="GET">
	<h1>Tabuada</h1>
	<p>Digite um número</p>
	<p><input type="number" name="numero" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>		
</form>
<?php
if(isset($_GET['botao'])){
	echo "<section class='conteudo'>";
	$numero=$_GET['numero'];
	for ($contador=1; $contador<=10 ; $contador++) { 
		$multiplicacao=$numero*$contador;
		echo "<p>$numero x $contador = $multiplicacao</p>";

	}
	echo "</section>";
}
?>
</body>
</html>