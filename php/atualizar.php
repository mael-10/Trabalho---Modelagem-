<html>
   <head>
   <title>Atualizar dados</title>
   </head>
   <body>
      <?php
        // Estabele conexão com o servidor e BD   
        include_once('conexao.php');

        //Recebe os dados do formulário
        $codigo = $_POST['cod_paciente'];
        $nome = $_POST ['nome_paciente'];
        $cpf = $_POST ['cpf_paciente'];
        $email = $_POST ['email'];
        $cep = $_POST ['cep'];
        $telefone = $_POST ['tel_paciente'];
        $endereco = $_POST ['endereco'];

        $atualizar = mysqli_query($conexao, "UPDATE cadastrar_paciente SET nome_paciente = '$nome', cpf_paciente = '$cpf', email = '$email' , tel_paciente = '$telefone', cep = '$cep', endereco = '$endereco' WHERE cod_paciente = '$codigo'");

         // Redirecionar para outra página com a mensagem de retorno
         $mensagem = "Atualizado com Sucesso!";

         // Redirecionar para outra página com a mensagem de retorno
         header("Location: ../html/menu.html?mensagem=" . urlencode($mensagem));
         exit();
         ?>
   </body> 
</html>