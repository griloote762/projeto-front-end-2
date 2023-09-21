<?php
    include ("conexao.php");
    if(isset($_GET['codigo'])):
    
    $id = mysqli_escape_string($conexao, $_GET['codigo']);
    
    
    
    $sql = "DELETE FROM USUARIOS WHERE USU_ID = '$id'";
    $result = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($result);

    if (mysqli_query($conexao, $sql)):

        header("Location: selectadm.php");
    

    else:
        
        header("Location: selectadm.php");
    
    endif;
    endif;
?>


