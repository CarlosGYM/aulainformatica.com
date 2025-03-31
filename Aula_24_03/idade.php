<?php require_once 'cabecalho.php'; ?>
<form action="idade2.php" method="GET">
	<h1>Cálculo da Idade</h1>
	<!-- (Forma simples de cálculo de idade)
	<p>Digite o ano de nascimento:</p>
	<p><input type="number" name="nascimento" step="1" min="1930" max="<?= date('Y') ?>" required></p>
	-->
	<p>Digite a data de nascimento:</p>	
	<p><input type="date" name="dianasci" min="1930-01-01" max="<?= date('Y-m-d')?>" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>