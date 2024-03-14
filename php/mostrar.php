<html>
  <head>
     <title>Cliente</title>
	 <link rel = "stylesheet" href = "../estilo/estilizacao.css">
  </head>
  <body class = "cad_tutor">
  <div id = "principal">
   <main>

	  <fieldset>
	   <legend>Consultar Dados</legend>
      <form id="buscar" action="mostrar2.php" method="post">
        <input type="date" id="data" name="data">
        <button type="submit">buscar</button>
      </form>

	   <table border="1">

			 <?php
				// importa dados de conexão
			    include_once('conexao.php');
				
				// consulta os dados da tabela UF
				
				$consulta = mysqli_query($conexao, "SELECT  cod_consulta as cod, data_consulta as data_da_consulta, motivo_consulta as motivo FROM agendar_consulta ORDER BY data_consulta");
  
         echo "<tr>";
         echo "<td>Código</td>";
         echo "<td>data da consulta</td>";
         echo "<td>motivo da consulta</td>";
         echo "</tr>";


							
				  while($resultado = mysqli_fetch_array($consulta)){
                                                           echo "<tr>";
                                                           echo "<td>" . $resultado['cod'] . "</td>"; 
					                                                 echo "<td>" . $resultado['data_da_consulta'] . "</td>";
                                                            echo "<td>" . $resultado['motivo'] . "</td>";
                                                           echo "</tr>";
																	 // <option value = "1"> ES </option>
				                                                   }
			 ?>

	   </table>
	  </fieldset>
   </main>
  </div>
  </body>

</html>