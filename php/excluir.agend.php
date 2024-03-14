<html>
<head> 
    <title>Excluir Agendamento</title>
</head>
<body>
    <?php
    // Estabelece conexão com o servidor e o BD
    include_once('conexao.php');

    // Verifica se os dados do formulário foram recebidos
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o código da consulta a ser excluída
        $data_consulta = $_POST['Data_consulta'];
        $motivo_consulta = $_POST['Motivo_consulta'];
        

        // Tenta excluir a consulta do banco de dados
        $exclui = mysqli_query($conexao, "DELETE FROM agendar_Consulta WHERE Motivo_consulta = '$motivo_consulta' AND Data_consulta = '$data_consulta'")
                  or die(mysqli_error($conexao));
        
        // Verifica se a exclusão foi bem-sucedida
        if($exclui) {
            echo "Consulta excluída com sucesso!";
        } else {
            echo "Ocorreu um erro ao excluir a consulta.";
        }
    }
     else {
       echo "Os dados do formulário não foram recebidos.";
    }
    ?>
</body>
</html>
