<html data-bs-theme="dark">
  <head>
     <title>Consulta</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	 <link rel="stylesheet" href="../style/style.css">
  </head>
  <body class="vh">
  <div id="formulario">
		<main class="witha m-auto background-gradiente">
			<form action = "atualizar_dados.php" method = "post" id="form-consultar">
				<div class="aumentar-2">
					<div class="aumentar-3">
									<div>
										<h1 class="h3 mb-3 fw-normal">Selecionar Paciente</h1>
									</div>
									
									<div>
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

								</div>
							</div>
						</div>																		
					</div>
				</div>
			</form>
		</main>
	</div>
</html>