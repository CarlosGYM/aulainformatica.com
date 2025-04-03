<?php require_once 'cabecaçho.php'; ?>
<form action="nomes.php" method="POST">
	<h1>Ordenar nomes</h1>
	<p>Quantos nomes você quer digitar?</p>
	<p><input type="number" name="quantidade" min="1" max="12" step="1" required></p>
	<p><input type="submit" name="botao" value="Enviar"></p>
</form>
<?php 
	if (isset($_POST['botao'])){
		$quantidade=$_POST['quantidade'];
		echo "<form action='nomes.php' method='POST'>";
		for($cont=1;$cont<=$quantidade;$cont++){
			echo "<p>$cont&ordm; nome:
			<input type='text' name='nome$cont'
			size='50' required></p>";
		}
		echo "<p><input type='submit' name='botao2' value='Enviar'></p>";
		echo "</form>";
	}
?>