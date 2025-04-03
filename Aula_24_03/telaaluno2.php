<?php require_once 'cabecalho.php'; 
require_once 'model/Aluno.php';
$aluno=new Aluno();
$aluno->setNome($_POST['estudante']);
$aluno->setMatricula($_POST['matricula']);
$aluno->setTelefone($_POST['telefone']);
$aluno->setCordefundo($_POST['cordefundo']);
	
	echo "<section class='conteudo' style='background-color:".$aluno->getCordefundo()."'>";
	
	echo "<p>Aluno: ".$aluno->getNome().".</p>";

	echo "<p>Matrícula do estudante: ".$aluno->getMatricula().".</p>";

	echo "<p>Número de telefone: ".$aluno->getTelefone()."</p>";

	echo "<p><a href='telaaluno.php' class='link'>Voltar</a></p>";
	echo "</section>";
?>
</body>
</html>