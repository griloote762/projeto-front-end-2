<?php
	
	include("conexao.php");
 
if(isset($_POST['atualizar'])):
	$nome =mysqli_escape_string($conexao, $_POST['nome']);
	$dtnasc =mysqli_escape_string($conexao, $_POST['inputdtnasc']);
	$nomedaMae =mysqli_escape_string($conexao, $_POST['nomedaMae']);
	$cpf =mysqli_escape_string($conexao, $_POST['cpf']);
	$telcelular =mysqli_escape_string($conexao, $_POST['telcel']);
	$telfixo =mysqli_escape_string($conexao, $_POST['telfixo']);
	$logradouro =mysqli_escape_string($conexao, $_POST['logradouro']);
	$numero =mysqli_escape_string($conexao, $_POST['numero']);
	$complemento =mysqli_escape_string($conexao, $_POST['complemento']);

	$id = mysqli_escape_string($conexao, $_POST['id']);

	
	$sql =  "UPDATE USUARIOS SET USU_NOME = '$nome', USU_DTNASC = '$dtnasc', USU_DTNASC = '$nomedaMae', USU_CPF = '$cpf', USU_TELCELULAR = '$telcelular', USU_TELFIXO = '$telfixo', USU_LOGRADOURO = '$logradouro',USU_NUMERO = '$numero', USU_COMPLEMENTO = '$complemento' WHERE USU_ID = '$id' ";
	
	if(mysqli_query($conexao, $sql)):
		
	header("Location: selectadm.php");

	else: 
		
		header("Location: selectadm.php");	
		
endif;

endif;
	?>

				