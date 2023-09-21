<?php 
session_start();

include_once("conexao.php");

$nome =$_POST['nome'];
$dtnasc =$_POST['inputdtnasc'];
$nomedaMae =$_POST['nomedaMae'];
$cpf =$_POST['cpf'];
$telcelular =$_POST['telcel'];
$telfixo =$_POST['telfixo'];
$logradouro =$_POST['logradouro'];
$numero =$_POST['numero'];
$complemento =$_POST['complemento'];
$loginusuario =$_POST['loginusuario'];
$senha =$_POST['senha'];

$result_usuario = "INSERT INTO USUARIOS (USU_NOME, USU_DTNASC, USU_NOMEMATERNO, USU_CPF, USU_TELCELULAR,  USU_TELFIXO,USU_LOGRADOURO,USU_NUMERO,USU_COMPLEMENTO,USU_LOGIN, USU_SENHA) VALUES ('$nome', '$dtnasc' ,'$nomedaMae', '$cpf','$telcelular','$telfixo','$logradouro','$numero','$complemento','$loginusuario','$senha')";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if($resultado_usuario){

	$_SESSION['cadastrado'] = true;

	header('Location:index.php');
	exit();
}else


?>
