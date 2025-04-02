<?php require_once 'cabecalho.php'; ?>
<form action="perfil2.php" method="POST">
	<h1>Cadastro</h1>
	<p>Digite seu nome:</p>
	<p><input type="text" name="nome" size="50"
		maxlength="70" pattern="[a-zA-Z\sçÇãÃéÉ]{2,70}" required>
	</p>
	<p>Digite seu aniversário:</p>
	<p><input type="date" name="nascimento" min="1930-01-01" max="2024-12-31" required>
	</p>
	<p>Escolha uma cor para letra:</p>
	<p><input type="color" name="corletra" required>
	</p>
	<p>Escolha uma cor de fundo:</p>
	<p><input type="color" name="corfundo" value="#FFFFFF" required>
	</p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
</form>
</body>
</html>