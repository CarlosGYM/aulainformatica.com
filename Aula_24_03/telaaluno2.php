<?php require_once 'cabecalho.php'; 
require_once 'model/Aluno.php';
$aluno=new Aluno();
$aluno=setMatricula($_POST['matricula'])
$aluno=setTelefone($_POST['telefone'])
$aluno=setCordefundo($_POST['cordefundo'])
	
	echo "<section class='conteudo' style='background-color:".$aluno->