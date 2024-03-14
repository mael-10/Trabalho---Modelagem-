<!DOCTYPE html>
<?php
// REVISADO - OK

include_once("conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='../html/menu.html'");
            }
            function failed(){
                setTimeout("window.location='erro.html'");
            }
        </script>
    </head>
    <body>
        <?php
            $loginc = $_POST['loginc'];
            $senha = $_POST['senha'];
            $consulta = mysqli_query($conexao,"SELECT * FROM login_atendente WHERE Email_atendente = '$loginc' AND Senha = '$senha'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"<br><br><br><br><br><br><p align = 'center'>Por favor aguarde&hellip;</p>";
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["loginc"]=$_POST["loginc"];
                $_SESSION["senha"]=$_POST["senha"];
                echo" <br><br><br><br><br><br> <p align = 'center'>Por favor aguarde&hellip;</p>";
                echo"<script language='javascript'>sucesso()</script>";
            } 
        ?>
    </body> 
</html>