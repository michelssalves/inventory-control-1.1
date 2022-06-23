<?php
require_once('../../conexao.php');
$id_cliente = filter_input(INPUT_POST, 'id_cliente');
$id_tipo_da_venda = filter_input(INPUT_POST, 'id_tipo_da_venda');
$data_da_venda = filter_input(INPUT_POST, 'data_da_venda');
$preco = filter_input(INPUT_POST, 'preco');

if ($id_cliente && $id_tipo_da_venda && $data_da_venda && $preco)
{
        $sql = $pdo->prepare("INSERT INTO tb_vendas (
        id_cliente, 
        id_tipo_da_venda,
        data_da_venda,
        preco) 
		VALUES (
        :id_cliente,
        :id_tipo_da_venda, 
        :data_da_venda,
        :preco)");
		$sql->bindValue(':id_cliente', $id_cliente);
		$sql->bindValue(':id_tipo_da_venda', $id_tipo_da_venda);
        $sql->bindValue(':data_da_venda', $data_da_venda);
        $sql->bindValue(':preco', $preco);
		$sql->execute();
        header ("Location: cadastrar_vendas_html.php");
        exit;
}    else  {
    header("Location: ../../index.php");    
    exit;
}
?>
<script text="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
<script text="text/javascript" src="/js/jquery-3.6.0.min.js"></script>