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
      <div id="L" >
	   <table border="1">

			 <?php
				// importa dados de conexão
			    include_once('conexao.php');
				
    
          $data = $_POST['data'];
          
          // consulta os dados da tabela UF
          
          $consulta = mysqli_query($conexao, "SELECT data_consulta, motivo_consulta motivo FROM agendar_consulta WHERE data_consulta = '$data' ORDER BY data_consulta");
  
           echo "<tr>";
           echo "<td>data da consulta</td>";
           echo "<td>motivo da consulta</td>";
           echo "</tr>";
  
  
                
            while($resultado = mysqli_fetch_array($consulta)){
                                                             echo "<tr>";
                                                             echo "<td>" . $resultado['data_consulta'] . "</td>"; echo "<td>" . $resultado['motivo'] . "</td>";
                                                             echo "</tr>";
                                     // <option value = "1"> ES </option>
                                                             }
  
        ?>

	   </table>
     </div>
	  </fieldset>
   </main>
  </div>
  </body>
</html>