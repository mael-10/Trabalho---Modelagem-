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

    while($row = mysqli_fetch_array($insere2)){
        $cod_atendente[] = $row["cod_login_atendente"];
    }


    $insere = mysqli_query($conexao,"INSERT INTO agendar_consulta(Data_consulta, Motivo_consulta, Cod_login_atendente)

    VALUES ('$data_formatada ','$motivo', '$cod_atendente[0]')")
    or die(mysqli_error());

    

    
    echo "Data recebida: $data";


    header("Location: ../html/menu.html?mensagem=" . urlencode($mensagem));
    exit();   

    ?>

</body>

</html>