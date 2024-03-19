<!DOCTYPE html>
<html>
<head>
    <title>Atualizar</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div id="formulario-consultaa">
            <form action="atualizar.php" method="post">

                    <h2>Atualizar Dados</h2>
                    <table>
                        <tr>
                            <td>
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
                            </td>
                            
                    </table>
            </form>
            
    </div>
</body>
</html> 