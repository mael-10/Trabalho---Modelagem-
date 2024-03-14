<?php 
	$conexao = new mysqli("localhost", "root", "", "clinica_medica"); 
	if($conexao->connect_error){
		 die($conexao->connect_error); 
	}
?> 