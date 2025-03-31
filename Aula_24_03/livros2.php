<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
<?php
	$buscapagina1=$_GET['buscapagina1'];
	$buscapagina2=$_GET['buscapagina2'];
	$buscaautor1=$_GET['buscaautor1'];
	$buscaautor2=$_GET['buscaautor2'];
	$buscatitulo1=$_GET['buscatitulo1'];
	$buscatitulo2=$_GET['buscatitulo2'];
	if ($buscapagina1>$buscapagina2){
		echo "<p>O autor <b>$buscaautor1</b>, do livro <u>$buscatitulo1</u> é o maior.</p>";
	}else if($buscapagina2>$buscapagina1){
		echo "<p>O autor <b>$buscaautor2</b>, do livro <u>$buscatitulo2</u> é o maior.</p>";
	}else{
		echo "<p>Os livros são iguais!
		Mesmo número de páginas!</p>";
	}
		echo "<p><a href='livros.php' class='link'>Outra busca?</a></p>";
?>
</section>
</body>
</html>