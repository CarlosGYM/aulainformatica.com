<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
<?php
	$instituicao=$_GET['instituicao'];
	//if ($instituicao=="SENAC"||$instituicao=="Senac"||$instituicao=="senac") {

	if (strtolower($instituicao)=="senac") {
		echo "<p>Parabéns! Boa Escolha!!</p>";
	}else{
		echo "<p>meh melhor fazer Senac!";
}
		echo "<p><a href='SENAC.php' class='link'>Tente outra vez</a></p>";
?>
</section>
</body>
</html>