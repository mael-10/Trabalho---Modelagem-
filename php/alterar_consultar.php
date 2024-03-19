<html>
  <head>
     <title>Consulta</title>
	 <link rel="stylesheet" href="../css/estilo.css">
  </head>
  <body >
  <div id="formulario">
     <form action = "atualizar_dados.php" method = "post" id="form-consultar">
	   <h2>Consulta do Cliente</h2>
	   <table width = "980px">			
			<label>Data</label>
                            <?php
			    
				// importa dados de conexÃ£o
			    include_once('../php/conexao.php');
				
				// consulta os dados da tabela UF
				
				$consulta = mysqli_query($conexao, "SELECT cod_paciente as codigo, nome_paciente as 'Nome' FROM cadastrar_paciente  
                ORDER BY Nome");
				
				 echo "<select name = 'cod' id = 'campo-nome-agendamento'>>";
							
				 while($resultado = mysqli_fetch_array($consulta)){
					                                                 echo "<option value = '" . $resultado['codigo'] . "'>" . $resultado['Nome'] . "</option>";
																	 // <option value = "1"> ES </option>
				                                                  }
				echo "</select>";

			 ?>
			<input type = "submit" value = "Consultar" class = "consultar" id="btn-cadastrar">
	   </table>
	   <div class="cadastrar-div">
                    </div>
	 </form>
																</div>
  </body>
</html>