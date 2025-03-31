<?php require_once 'cabecalho.php'; ?>
<form action="SENAC2.php" method="GET">
	<h1>Comparativo de Instituições de Ensino</h1>
	<p>Digite a Instituição de Ensino:</p>
	<p><input type="text" name="instituicao" size="50" maxlength="100" pattern="[a-zA-ZçÇãÃéÉ\s]{3,100}" required></p>
	<p><input type="submit" name="botao" value="Enviar"></p>
</form>
</body>
</html>