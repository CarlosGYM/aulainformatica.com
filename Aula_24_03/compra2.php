<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php
	$valor=$_GET['valor'];
	$quantidade=$_GET['quantidade'];
	$total=$valor*$quantidade;
	$valor=number_format($valor,2,',','.');
	$total=number_format($total,2,',','.');
	echo "<p>As $quantidade unidades de R$ $valor cada ficam por R$ $total.</p>";
	echo "<p><a href='compra.php' class='link'>Nova compra?</a></p>";
?>
</section>
</body>
</html>