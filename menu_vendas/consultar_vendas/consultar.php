<?php
require_once('../../conexao.php');
$id_cliente = ($_POST['id_cliente']);
$id_tipo_da_venda = ($_POST['id_tipo_da_venda']);
$lista = [];
$sql = $pdo->prepare("SELECT *  FROM tb_vendas AS TV
JOIN tb_clientes AS TC
ON TV.id_cliente = TC.id_cliente
JOIN tb_tipo_da_venda AS TDV
ON TDV.id_tipo_da_venda = TV.id_tipo_da_venda
WHERE TV.id_cliente = :id_cliente AND TV.id_tipo_da_venda = :id_tipo_da_venda");
$sql->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
$sql->bindParam(':id_tipo_da_venda', $id_tipo_da_venda, PDO::PARAM_INT);
$sql->execute();
if($sql->rowCount()> 0){

    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}else{
    header ("Location: consultar_vendas_html.php");
    exit;
}
?>
<table border ="1" width="100%">
    <tr>
        <th>CLIENTE</th>
        <th>TIPO DA VENDA</th>
        <th>DATA DA VENDA</th>
        <th>VALOR</th>
        
    </tr>
    <?php foreach($lista as $vendas): ?>
        <tr>
            <td><?=$vendas['nome'];?></td>
            <td><?=$vendas['venda'];?></td>
            <td><?=date('d/m/Y',strtotime($vendas['data_da_venda']));?></td>
            <td><?=$vendas['preco'];?></td>
        </tr>
    <?php endforeach; ?>
</table>
<form action="consultar_vendas_html.php"> 
<button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button>
</form>