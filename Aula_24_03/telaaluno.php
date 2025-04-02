<?php require_once 'cabecalho.php'; ?>
<form action="telaaluno2.php" method="POST">
	<h1>Cadastro de Aluno(a)</h1>
	<p>Digite o nome do aluno:</p>
	<p><input type="text" name="estudante" size="50" maxlength="70" pattern="[a-zA-Z\sçÇãÃéÉ]{2,70}" required>
	</p>
	<p>Número de matricula:</p>
	<p><input type="number" name="matricula" size="30" maxlength="50" required>
	</p>
	<p>Digite o N telefone:</p>
	<p><input type="number" name="telefone" size="30" maxlength="50" required>
	</p>
	<p>Selecione uma Cor:</p>
	<p><input type="color" name="cordefundo" value="#FFFFFF" required>
	</p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
	
</form>
</body>
</html>
