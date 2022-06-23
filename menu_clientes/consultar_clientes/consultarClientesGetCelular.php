
<?php
require_once('../../conexao.php');

	$sql->execute(array(':id' => $id));
	$sql = $pdo->prepare('SELECT * FROM tb_clientes WHERE id_cliente  = :id');
	$sql->execute(array(':id' => $id));
	$fetchAll = $sql->fetchAll();
		
	foreach($fetchAll as $celular)
	{
		echo $celular['celular'];	
	}
?>
