<!DOCTYPE >
<html data-bs-theme="dark">
<head>
    <title>Atualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="vh">
    <div id="formulario-consultaa">
        <div id="formulario">
		    <main class="witha m-auto background-gradiente">
                <form action="atualizar.php" method="post">
                <div class="teste-2">
                    <div class="teste-1">
                            <div class="d-flex flex-column">

                                <h2>Atualizar Dados</h2>

                                            <?php
                                            
                                            include_once('conexao.php');

                                            
                                            if (isset($_POST['cod'])) {
                                                
                                                $atualizar = $_POST['cod'];

                                            
                                            $consulta = mysqli_query($conexao, "SELECT cod_paciente as Codigo, nome_paciente as Paciente, cpf_paciente as Cpf, tel_paciente as Tel, email as Email, cep as Cep, endereco as Endereço FROM cadastrar_paciente WHERE cod_paciente = '$atualizar'");
                                                if (mysqli_num_rows($consulta) > 0) {
                                                    
                                            
                                                    while ($resultado = mysqli_fetch_assoc($consulta)) {

                                                        echo "  <table> ";
                                                        echo "  <input type ='hidden' name='cod_paciente' value = '".$resultado['Codigo']."'> ";
                                                        echo "  <label>Usuario</label>";
                                                        echo "  <input type ='text' name='nome_paciente' value = '".$resultado['Paciente']."'> ";
                                                        echo " <label>Cpf</label>";
                                                        echo "  <input type ='text' name='cpf_paciente' value = '".$resultado['Cpf']."'> ";
                                                        echo "<label>Telefone</label> ";
                                                        echo "  <input type ='text' name='tel_paciente' value = '".$resultado['Tel']."'> ";
                                                        echo " <label>Email</label> ";
                                                        echo "  <input type ='text' name='email' value = '".$resultado['Email']."'> ";
                                                        echo "<label>cep</label> ";
                                                        echo "  <input type ='text' name='cep' value = '".$resultado['Cep']."'> ";
                                                        echo "<label>Endereço</label>";
                                                        echo "  <input type ='text' name='endereco' value = '".$resultado['Endereço']."'> ";
                                                        echo " </table> ";
                                                    
                                                        echo " <input type = 'submit' value = 'Atualizar'>";
                                                    }
                                        
                                                } else {
                                                
                                                    echo "Nenhum resultado encontrado.";
                                                }
                                            }
                                            ?>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
</html> 