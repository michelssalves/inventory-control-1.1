
<?php
require_once('../../conexao.php');
	$id  = intval($_POST['id']);
	$sql = $pdo->prepare('SELECT * FROM tb_tipo_da_venda WHERE id_tipo_da_venda = :id');
	$sql->execute(array(':id' => $id));
	$fetchAll = $sql->fetchAll();
		
	foreach($fetchAll as $id_tipo_da_venda)
	{
		echo $id_tipo_da_venda['id_tipo_da_venda'];	
	}
?>