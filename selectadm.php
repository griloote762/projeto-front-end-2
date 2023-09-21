<?php 


session_start();
include("conexao.php");



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="estilos2.css">
	<title>Painel</title>
</head>
<body>
    
	

    <div class="main-login">
        <div class="left-login">
            <div class="letra">Bem vindo ao painel, ADMINISTRADOR (A) <?php echo $_SESSION['USU_LOGIN'];?>.

    <p>
        <a href="sair.php" id="logout-btn">Sair</a>
    </p>
         </div>   
            
            <img src="loginanimado.svg" class="left-login-image" alt="login animado">
        </div>
        
        
            <div class="card-login">
                <h1>Usuários Cadastrados</h1><br>
	<?php 

	$sql = "SELECT * FROM USUARIOS";
	if($result = mysqli_query($conexao, $sql)){
            if(mysqli_num_rows($result) > 0){
            	 echo '<table  border="2" class="tabela">';
                        echo "<thead>";
                        echo '<tr>';
                        echo '<th>Id</th>';
                        echo '<th>Nome</th>';
                        echo '<th>Login</th>';
                        echo '<th>CPF</th>';
                        
                        echo '<th>Ações</th>';
                    echo "</tr>";
                     echo "</thead>";
                    
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['USU_ID'] . "</td>";
                            echo "<td>" . $row['USU_NOME'] . "</td>";
                            echo "<td>" . $row['USU_LOGIN'] . "</td>";
                            echo "<td>" . $row['USU_CPF'] . "</td>";
                        



                                 echo '<th><a class="btn-login3" href="read.php?codigo='. $row['USU_ID'] .'">Ver</a></th>';
                                
                                echo '<th><a class="btn-login3" href="editar.php?codigo='. $row['USU_ID'] .'">editar</a></th>';
                                echo '<th><a class="btn-login3" href="delete.php?codigo='. $row['USU_ID'] .'">excluir</a></th>';
                            echo "</td>";
                        echo "</tr>";
                    }
                echo "</table>";
                
                mysqli_free_result($result);
            } else{
                echo '<div class="letra">Não há ainda usuários cadastrados no banco de dados.</div>';
            }
        } else{
            header("location: erro.php");
            exit();
        }

        
        ?>
        <br>
        <a href="cadastro1.php" class="btn-login2">Incluir Novo Usuário</a>
        
            


	 

</body>
</html>