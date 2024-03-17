<html>
  <head>
     <title>Cliente</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	   <link rel = "stylesheet" href = "../style/style.css">
  </head>
  <body class = "cad_tutor background-gradiente">
  <div id = "principal">
   <main>

	  <fieldset>
    <div class="d-flex justify-content-center my-3"> 
      <div>
      <legend class="text-white">Dados Consultados</legend>
      </div>
    </div>
      <div id="L">
         <table class="table container">
			 <?php
				// importa dados de conexão
			    include_once('conexao.php');
				
    
          $data = $_POST['data'];
          
          // consulta os dados da tabela UF
          
          $consulta = mysqli_query($conexao, "SELECT data_consulta, motivo_consulta motivo FROM agendar_consulta WHERE data_consulta = '$data' ORDER BY data_consulta");
  
        echo "<thead>";
          echo "<tr>"; 
            echo '<th scope="col">Cod Consulta</th>';
            echo '<th scope="col">Data da Consulta</th>';
          echo "</tr>"; 
       echo "</thead>"; 
  
  
                
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