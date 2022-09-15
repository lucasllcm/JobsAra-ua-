<html>
	<head>
		<title>Cadastro de Pessoas </title>
	</head>
	
	<body>
		<h1> Cadastro de Pessoas </h1>
		<hr/>
		
		<form method="post" action="<?=base_url('pessoas/inserir')?>">
			Nome: <input type="text" id="nome" name="nome"/>
			<br />
			CPF: <input type="text" id="cpf" name="cpf"/>
			<br />
			<input type="submit" id="enviar" value="Enviar"/>
		</form>
		
		<br />
		<a href="<?=base_url('/')?>">Voltar </a>
	</body>
</html>