<html>
  <head>
     <title>Cliente</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	   <link rel = "stylesheet" href = "../style/style.css">
  </head>
  <body class = "cad_tutor background-gradiente">
  <div id = "principalf container">
   <main>
  <div class="d-flex justify-content-center my-3"> 
    <div>
	   <legend class="text-white">Consultar Dados</legend>
      <form id="buscar" action="mostrar2.php" method="post">
        <input type="date" id="data" name="data">
        <button type="submit">buscar</button>
    </div>
  </div>
      </form>
        <table class="table container">
			 <?php
				// importa dados de conexão
			    include_once('conexao.php');
				
				// consulta os dados da tabela UF
				
				$consulta = mysqli_query($conexao, "SELECT  cod_consulta as cod, data_consulta as data_da_consulta, motivo_consulta as motivo FROM agendar_consulta ORDER BY data_consulta");
        
      
        echo "<thead>";
          echo "<tr>"; 
            echo '<th scope="col">Cod Consulta</th>';
            echo '<th scope="col">Data da Consulta</th>';
            echo '<th scope="col">Motivo da Consulta</th>';
          echo "</tr>"; 
       echo "</thead>"; 
      

       while ($resultado = mysqli_fetch_array($consulta)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $resultado['cod'] . "</td>"; 
        echo "<td>" . $resultado['data_da_consulta'] . "</td>";
        echo "<td>" . $resultado['motivo'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
        
      }
				
			 ?>
      </table>
   </main>
  </div>
  </body>

</html>