<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP com mysqli (POO) </title>
<body>
<h3> CRUD - PHP com mysqli (POO) - Alterar</h3>
<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
			
	// recuperando 
	$codigo = $_POST['codigo'];
	$produto = $_POST['produto'];	
	$descricao = $_POST['descricao'];	
	$data = $_POST['data'];	
	$valor = $_POST['valor'];	

	// criando a linha do  UPDATE
	$sqlupdate =  "update tabelaimg set produto='$produto', descricao='$descricao',data='$data',valor=$valor where codigo=$codigo";

	// executando instru��o SQL atrav�s do m�todo sqlstring()
	$resultado = $mysql->sqlstring($sqlupdate,"ALTERA��O");
?>
<br><br>
	<input type='button' onclick="window.location='alteracao.php';" value="Voltar">
</body>
</html>
