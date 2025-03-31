<?php require_once 'cabecalho.php'; ?>
<form action="escola2.php" method="POST">
	<div id="logo1">
		<img src="img/fenix.webp" alt="logo da empresa">
	</div>
	<div>
	<h1>Escola de natação - AquaHeroes</h1>
	<h2>Preencha o formulário abaixo</h2>
	<p>Qual seu nome:</p>
	<p><input type="text" name="nome" size="50" maxlength="70" pattern="[a-zA-ZçÇãÃéÉÓóáÁ\s]{2,70}" required></p>
	<h4>Qual sua data de nascimento:</h4>
	<p><input type="date" name="dianasci" min="1930-01-01" max="<?= date('Y-m-d')?>" required></p>
	<p><input type="submit" name="botao" value="Cadastrar" required></p>
	</div>

</form>