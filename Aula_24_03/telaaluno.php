<?php require_once 'cabecalho.php'; ?>
<form action="telaaluno2.php" method="POST">
	<h1>Cadastro de Aluno(a)</h1>
	<p>Digite o nome do aluno:</p>
	<p><input type="text" name="estudante" size="50" maxlength="70" pattern="[a-zA-Z\sçÇãÃéÉ]{2,70}" required>
	</p>
	<p>Número de matricula:</p>
	<p><input type="number" name="matricula" step="1" min="1" required>
	</p>
	<p>Digite o N telefone:</p>
	<p><input type="text" name="telefone" size="14" maxlength="14"
	placeholder="(42)99977-8888" pattern="\([0-8{2}\)[0-9]{4,5}-[0-9]{4}"   required id="telefone"></p>
	<p>Selecione uma Cor para o fundo:</p>
	<p><input type="color" name="cordefundo" value="#FFFFFF" required>
	</p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
	
</form>
<script>
const telefone=document.getElementById('telefone');
telefone.addEventListener('input',function(e){
	let valor = e.target.value.replace(/\D/g, '');
	valor= valor.substring(0,11);
	if (valor.length > 0) {
			valor = '(' + valor;
	}if (valor.length > 3) {
			valor= valor.substring(0,3) + ')' + valor.substring(3);
	}if (valor.length > 9) {
			valor = valor.substring(0,9) + '-' + valor.substring(9);
	}
	e.target.value = valor;
});
</script>
</body>
</html>
