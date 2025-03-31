<?php require_once 'cabecalho.php';?>
<form action="soma2.php" method="GET">
	<h1>Somar números</h1>
	<p>Digite um número:</p>
	<p><input type="number" step="0.01" name="numero1" required></p>
	<p>Digite outro número:</p>
	<p><input type="number" step="0.01" name="numero2" required></p>
	<p><input type="submit" name="botao" value="Somar"></p>
</form>
</body>
</html>