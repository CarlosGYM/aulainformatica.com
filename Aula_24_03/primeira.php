<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<h1>Contas</h1>
<?php
	$numero1=4;
	$numero2=2;
	$soma=$numero1+$numero2;
	echo "<p>A soma de $numero1 + $numero2 é $soma</p>";
	$subtracao=$numero1-$numero2;
	echo "<p>A subtração de $numero1 - $numero2 = $subtracao</p>";
	$divisao=$numero1/$numero2;
	echo "<p>$numero1 &divide; $numero2 = $divisao</p>";
	$potencia=pow($numero1, $numero2);
	echo "<p>$numero1<sup>$numero2</sup> = $potencia</p>";	

?>
</section>
</body>
</html>