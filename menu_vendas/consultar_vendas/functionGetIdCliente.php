
<?php
require_once(__DIR__.'/../../conexao.php');
	$id = intval($_POST['id']);
	$sql = $pdo->prepare('SELECT * FROM tb_clientes WHERE id_cliente = :id');
	$sql->execute(array(':id' => $id));
	$fetchAll = $sql->fetchAll();
		
	foreach($fetchAll as $id_cliente)
	{
		echo $id_cliente['id_cliente'];	
	}
?>