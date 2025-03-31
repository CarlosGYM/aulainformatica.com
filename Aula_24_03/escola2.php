<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php
	$nome=$_POST['nome'];
	$dianasci=$_POST['dianasci'];
	$dianasci=new DateTime($dianasci);
	$hoje=date('Y-m-d');
	$hoje=new DateTime($hoje);
	$idade=$hoje->diff($dianasci)->y;
	if ($idade<6){
		echo "<p>Menores de 6 anos não podem participar</p>";
	}else if ($idade>=6&&$idade<=11){
		echo "<p>O aluno(a) $nome esta classificado na Turma peixinho</p>";
		echo "<img src='img/peixinho.jpg' class='peixes' alt='peixinho'>";
	}else if ($idade>=12&&$idade<=14){	
		echo "<p>O aluno(a) $nome esta classificado na Turma peixe</p>";
		echo "<img src='img/peixe.jpg' class='peixes' alt='peixe'>";
	}else if ($idade>=15&&$idade<=17){
		echo "<p>O aluno(a) $nome esta classificado na Turma carpa</p>";
		echo "<img src='img/carpa.jpg' class='peixes' alt='carpa'>";
	}else if ($idade>=18&&$idade<=24){
		echo "<p>O aluno(a) $nome esta classificado na Turma Tubarão</p>";
		echo "<img src='img/tubarao.webp' class='peixes' alt='tubarao'>";
	}else if ($idade>=25&&$idade<=95){
		echo "<p>O aluno(a) $nome esta classificado na Turma específica</p>";
	}else{
		echo "<p>O aluno(a) não poderá participar</p>";
	}
		echo "<p><a href='escola.php' class='link'>Concluir</a></p>";
?>
</section>
</body>
</html>