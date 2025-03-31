<?php require_once 'cabecalho.php'; ?>
<form action="compra2.php" method="GET">
	<h1>Cálculo da compra</h1>
	<p>Qual o valor do item:</p>
	<p><input type="number" step="0.01" name="valor" min="0.01" max="1000.00" required></p>
	<p>Digite a quantidade:</p>
	<p><input type="number" step="1" name="quantidade" min="1" max="99" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>

</form>
</body>
</html>
