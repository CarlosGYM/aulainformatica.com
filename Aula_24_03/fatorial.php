<?php require_once 'cabecalho.php'; ?>
<form action="fatorial.php" method="GET">
	<h1>Calculo Fatorial</h1>
	<p>Digite um número</p>
	<p><input type="number" name="fator" step="1" required></p>
	<p><input type="submit" name="botao" value="Calculo"></p>
</form>
<?php
	if(isset($_GET['botao'])){
		echo "<section class='conteudo'>";
		$fator=$_GET['fator'];
		$fatorial=1;
		for ($contador=$fator;$contador>=1;$contador--) { 
			$fatorial=$fatorial*$contador;
		}
		echo "<p>$fator ! = $fatorial </p>";
	}
       echo "</section>";


?>
</body>
</html>

