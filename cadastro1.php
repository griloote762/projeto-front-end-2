
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Faça seu Cadastro</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>

	<link rel="stylesheet"  href="estilos2.css">
</head>
<body>
	
	<form method="POST">
		
 

  
      
    <div id="main-login2">
		<div class="left-login">
			<h1>Faça seu Cadastro Aqui!</h1>
			<img src="loginanimado.svg" id="left-login-image" alt="login animado">
		</div>
		
		<div class="right-login">
			<div class="card-login">
				<h1>Cadastro</h1>
				<div class="textfield">
				<label for="nome">Nome</label>
				<input type="text" name="nome" placeholder=  "*Insira seu Nome" required autofocus></input>
			</div>
			<div class="textfield">
				<label for="inputdtnasc">Data de Nascimento</label>
				<input type="date" name="inputdtnasc" required autofocus></input>
			</div>

			<div class="textfield">
				<label for="nomedaMae">Nome da Mãe</label>
				<input type="text" name="nomedaMae" placeholder=  "*Insira o Nome da Mãe" required autofocus></input>
			</div>

			<div class="textfield">
				<label for="cpf">CPF</label>
				<input type="text" name="cpf" placeholder=  "*Insira seu CPF" maxlength="11" required autofocus ></input>
			</div>

			<div class="textfield">
				<label for="telcel">Telefone Celular</label>
				<input type="text" name="telcel" placeholder="*Insira seu Celular" required autofocus ></input>
			</div>

				<div class="textfield">
				<label for="telfixo">Telefone Fixo</label>
				<input type="text" name="telfixo" placeholder="Opcional" ></input>
			</div>

			<div class="textfield">
				<label for="logradouro">Logradouro</label>
				<input type="text" name="logradouro" placeholder="*Insira seu endereço" required autofocus></input>
			</div>

			<div class="textfield">
				<label for="numero">Número</label>
				<input type="text" name="numero" placeholder="*Insira seu número" required autofocus></input>
			</div>
				
			<div class="textfield">
				<label for="complemento">Complemento</label>
				<input type="text" name="complemento" placeholder="Opcional"></input>
			</div>

				

			<div class="textfield">
				<label for="loginusuario">Login de Usuário</label>
				<input type="text" name="loginusuario" placeholder="*Insira seu Login de Usuário" required autofocus></input>
				</div>
			<div class="textfield">
				<label for="senha">Senha</label>
				<input type="password" name="senha" placeholder="Insira sua Senha"></input>
			</div>
				

				<input type="submit"class="btn-login" value="Cadastrar"></input>
				<input type="reset" name="Limpar" value="limpar" class="btn-login"></input>
				<input type="hidden" name="id" id="USU_ID" value="">
				
				<a href="index.html" class="btn-login">Voltar</a>

		</div>	
	</div>


</form>
</body>
</html>