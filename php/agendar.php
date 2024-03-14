<html>
    <head> 
        <title>Alunos</title>
     </head>
<body>
    <?php
    //estabelece conexão com o servidor e o BD
        include_once('conexao.php');

    //Recebe os dados dos formulários            

    $data = $_POST ['Data_consulta'];
    $motivo = $_POST ['Motivo_consulta'];
    $data_formatada = date('Y-m-d', strtotime($data));

     

    $insere = mysqli_query($conexao,"INSERT INTO agendar_consulta(Data_consulta, Motivo_consulta)
    VALUES ('$data_formatada ','$motivo')")
    or die(mysqli_error());

    
    echo "Data recebida: $data";


    header("Location: ../html/menu.html?mensagem=" . urlencode($mensagem));
    exit();   

    ?>

</body>

</html>