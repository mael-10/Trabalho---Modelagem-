<html>
    <head> 
        <title>Alunos</title>
     </head>
<body>
    <?php
    //estabelece conexão com o servidor e o BD
        include_once('conexao.php');

    //Recebe os dados dos formulários            

    $data = $_POST ['Data_Consulta'];
    $motivo = $_POST ['Motivo_consulta'];
    $data_formatada = date('Y-m-d', strtotime($data));

    $insere2 = mysqli_query($conexao, "SELECT cod_login_atendente FROM login_atendente");
 
    $cod_atendente = array();


    // Caminho do arquivo que armazenará o valor do contador
    $arquivo_contador = 'contador.txt';
    
    // Verifica se o arquivo existe
    if (file_exists($arquivo_contador)) {
        // Se o arquivo existe, lê o valor do contador
        $contador = intval(file_get_contents($arquivo_contador));
    } else {
        // Se o arquivo não existe, inicia o contador em 1
        $contador = 1;
    }
    
    // Exibe o valor atual do contador
    echo "Valor atual do contador: $contador";
    
    // Incrementa o contador para a próxima execução
    $contador++;
    
    // Salva o novo valor do contador no arquivo
    file_put_contents($arquivo_contador, $contador);
    

    while($row = mysqli_fetch_array($insere2)){
        $cod_atendente[] = $row["cod_login_atendente"];
    }

    $insere = mysqli_query($conexao,"INSERT INTO agendar_consulta(Data_consulta, Motivo_consulta, Cod_login_atendente, Cod_paciente	)

    VALUES ('$data_formatada ','$motivo', '$cod_atendente[0]', '$contador')")
    or die(mysqli_error());


    echo "Data recebida: $data";


    header("Location: ../html/menu.html?mensagem=" . urlencode($mensagem));
    exit();   

    ?>

</body>

</html>