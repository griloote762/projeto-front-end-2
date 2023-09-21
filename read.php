<?php

include("conexao.php");

if(isset($_GET['loginusuario'])):


    $id = mysqli_escape_string($conexao, $_GET['loginusuario']);

    $sql = "SELECT * FROM USUARIOS WHERE USU_LOGIN ='$id' ";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);

endif;



 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet"  href="estilos2.css">
 </head>
 <body>
    <STYLE> a  {text-decoration: none;} </STYLE>
  

<div id="main-login2">
        <div class="left-login">
            
            <img src="loginanimado.svg" id="left-login-image" alt="login animado">
        
        </div>


    <div class="right-login">
            <div class="card-login">
                <h1>Dados Cadastrados</h1>
                <div class="textfield">
                <input type="hidden" name="id" value="<?php echo $dados ['USU_ID'] ?>"></input> 
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo $dados['USU_NOME'];?>"></input>
            </div>
            <div class="textfield">
                <label for="inputdtnasc">Data de Nascimento</label>
                <input type="date" name="inputdtnasc" value="<?php echo $dados['USU_DTNASC'];?>"></input>
            </div>

            <div class="textfield">
                <label for="nomedaMae">Nome da Mãe</label>
                <input type="text" name="nomedaMae" value="<?php echo $dados['USU_NOMEMATERNO'];?>"></input>
            </div>

            <div class="textfield">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" value="<?php echo $dados['USU_CPF'];?>"></input>
            </div>

            <div class="textfield">
                <label for="telcel">Telefone Celular</label>
                <input type="text" name="telcel" value="<?php echo $dados['USU_TELCELULAR'];?>"></input>
            </div>

                <div class="textfield">
                <label for="telfixo">Telefone Fixo</label>
                <input type="text" name="telfixo" value="<?php echo $dados['USU_TELFIXO'];?>"></input>
            </div>

            <div class="textfield">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" value="<?php echo $dados['USU_LOGRADOURO'];?>"></input>
            </div>

            <div class="textfield">
                <label for="numero">Número</label>
                <input type="text" name="numero" value="<?php echo $dados['USU_NUMERO'];?>"></input>
            </div>
                
            <div class="textfield">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" value="<?php echo $dados['USU_COMPLEMENTO'];?>"></input>
            </div>

            <div class="textfield">
                <label for="loginusuario">Login de Usuário</label>
                <input type="text" name="loginusuario" value="<?php echo $dados['USU_LOGIN'];?>"></input>
                </div>

                
                
                <a href="selectadm.php" class="btn-login">Voltar</a>

        </div>  
    </div>



                

</form>

</body>
</html>
 
 </body>
 </html>
