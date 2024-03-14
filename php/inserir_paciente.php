<html>
    <head> 
        <title>Alunos</title>
     </head>
<body>
    <?php
    //estabelece conexão com o servidor e o BD
        include_once('conexao.php');

    //Recebe os dados dos formulários            

    $nome = $_POST ['Nome_paciente'];
    $cpf = $_POST ['Cpf_paciente'];
    $telefone = $_POST ['Tel_paciente'];
    $email = $_POST ['Email'];
    $cep = $_POST ['Cep'];
    $endereco = $_POST ['Endereco']; 

    $insere = mysqli_query($conexao,"INSERT INTO cadastrar_paciente(Nome_paciente, Cpf_paciente, Tel_paciente, Email, Cep, Endereco)
    VALUES ('$nome','$cpf','$telefone',' $email',' $cep','$endereco')")
    or die(mysqli_error());

    header("Location: ../html/menu.html?mensagem=" . urlencode($mensagem));
    exit();   

    ?>

</body>

</html>