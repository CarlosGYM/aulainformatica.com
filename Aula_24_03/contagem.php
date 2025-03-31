<?php require_once 'cabecalho.php'; ?>


<form action="contagem.php" method="GET">
	<h1>Contagem<h1>
		<p>Digite o início:</p>
		<p><input type="number" name="inicio" step="1" required></p>
		<p>Digite o fim:</p>
		<p><input type="number" name="fim" step="1" required></p>
		<p><input type="submit" name="botao" value="Conte"></p>
	</form>
	<?php
	if (isset($_GET['botao'])) {
		echo "<section class='conteudo'>";
		$inicio=$_GET['inicio'];
		$fim=$_GET['fim'];
		if($inicio<$fim){
			
			for ($contador=$inicio; $contador<=$fim ; $contador++) {
				echo "<p>$contador</p>";
			}
		}else if($inicio>$fim){
			for ($contador=$inicio; $contador>=$fim ; $contador--) {
				echo "<p>$contador</p>";
			}
		}else{
			echo "<p>Os números são iguais!</p>";
		}
		echo "</section>";
	}
	?>

</body>
</html>