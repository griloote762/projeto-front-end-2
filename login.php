<?php 

session_start();

include("conexao.php");


if(empty($_POST['usuario']) || empty($_POST['senha'])){

    header("Location:index.php"); //se o login ou a senha for "vazio", voltará para a pagina de login
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query = "SELECT * FROM USUARIOS WHERE USU_LOGIN = '$usuario' AND USU_SENHA = '$senha'"; 

$result = mysqli_query ($conexao, $query);

$row = mysqli_num_rows($result); // variavel para consulta de numero de linhas 

if($row == 1){
    $_SESSION['USU_LOGIN'] = $usuario;



    header("Location:selectadm.php");
    exit();

}else {
      $_SESSION['nao_autenticado'] = true;


    header("Location:index.php");
    exit();

}



 ?>