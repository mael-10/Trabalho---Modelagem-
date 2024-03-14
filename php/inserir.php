<html>
    <head> 
        <title>Alunos</title>
     </head>
<body>
    <?php
    //estabelece conexão com o servidor e o BD
        include_once('conexao.php');

    //Recebe os dados dos formulários            

    $usuario = $_POST ['loginc'];
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];
    $cidade = $_POST ['cidade'];
    $bairro = $_POST ['bairro'];
    $CEP = $_POST ['CEP'];
    $datanascimento = $_POST ['datanascimento'];
    $senha = $_POST ['senha'];

    $insere = mysqli_query($conexao,"INSERT INTO Cadastro(loginc, nome_cliente, email, telefone, endereco, cidade, bairro, CEP, data_nascimento, senha)
    VALUES ('$usuario','$nome','$email','$telefone','$endereco','$cidade','$bairro','$CEP','$datanascimento','$senha')")
    or die(mysqli_error());

    header("Location: ../conteudo/home.html?mensagem=" . urlencode($mensagem));
    exit();   

    ?>

</body>

</html>