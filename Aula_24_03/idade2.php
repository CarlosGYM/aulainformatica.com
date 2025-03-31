<?php require_once 'cabecalho.php';?>
<section class="conteudo">
<?php

	//$nascimento=$_GET['nascimento'];
	//$idade=date('Y')-$nascimento;
	$dianasci=$_GET['dianasci'];
	$dianasci=new DateTime($dianasci);
	$hoje=date('Y-m-d');
	$hoje=new DateTime($hoje);
	$idade=$hoje->diff($dianasci)->y;

	echo "<p>Você tem $idade anos</p>";
	echo "<p><a href='idade.php' class='link'>Novo Cálculo?</a></p>";
?>

</section>
</body>
</html>