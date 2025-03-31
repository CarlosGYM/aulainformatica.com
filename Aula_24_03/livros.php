<?php require_once 'cabecalho.php'; ?>
<form action="livros2.php" method="GET">
 	<!--1&ordm;-->
<h1>Consulta de Livros</h1>
	<p>Autor1</p>
	<p><input type="text" name="buscaautor1" size="30" maxlength="70" pattern="[a-zA-ZçÇãÃéÉÓóáÁ\s]{3,100}" required></p>
	<p>Titulo1</p>
	<p><input type="text" name="buscatitulo1" size="30" maxlength="100" pattern="[a-zA-ZçÇãÃéÉóÓáÁ\s]{3,100}" required></p>
	<p>Número de páginas1</p>
	<p><input type="number" name="buscapagina1" min="1" step="1" 
		max="1500" required></p>
<h1>Nova busca</h1>
	<p>Autor2</p>
	<p><input type="text" name="buscaautor2" size="30" maxlength="70" pattern="[a-zA-ZçÇãÃéÉóÓáÁ\s]{3,100}" required></p>
	<p>Titulo2</p>
	<p><input type="text" name="buscatitulo2" size="30" maxlength="100" pattern="[a-zA-ZçÇãÃéÉóÓáÁ\s]{3,100}" required></p>
	<p>Número de páginas2</p>
	<p><input type="number" name="buscapagina2" min="1" step="1"		
		max="1500" required></p>
		<p><input type="submit" name="botao" value="Pesquisar"></p>

	</form>
</body>
</html>