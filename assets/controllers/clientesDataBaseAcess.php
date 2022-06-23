<?php
$acao = $_REQUEST['acao'];

if
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone =  $_POST['telefone'];
$celular = $_POST['celular'];

if ($nome && $cpf && $telefone && $celular){

    $sql = $pdo->prepare("SELECT * FROM inventory_control_tb_clientes WHERE cpf = :cpf");
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    if($sql->rowCount() == 0){
        $sql = $pdo->prepare("INSERT INTO inventory_control_tb_clientes (nome, cpf, telefone, celular) 
		VALUES (:nome, :cpf, :telefone,  :celular)");
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
		$sql->execute();
        header ("Location: clientes");
        exit;
    }else  {
        header("Location: cadastrar-cliente.php");
        exit;
    }
}else{
    header("Location: cadastrar-cliente");
    exit;
}
?>
