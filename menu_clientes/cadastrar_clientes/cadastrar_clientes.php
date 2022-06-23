<?php
require_once('../../conexao.php');
?>
<?php
$nome = addslashes(strtoupper($_POST['nome']));
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone');
$celular = filter_input(INPUT_POST, 'celular');

if ($nome && $cpf && $telefone && $celular)
{
    $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE cpf = :cpf");
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    if($sql->rowCount() == 0){
        $sql = $pdo->prepare("INSERT INTO tb_clientes (
        nome, 
        cpf,
        telefone,
        celular) 
		VALUES (
        :nome,
        :cpf, 
        :telefone,
        :celular)");
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':celular', $celular);
		$sql->execute();
        header ("Location: cadastrar_clientes_html.php");
        exit;
    }else  {
        header("Location: ../../index.php");
        exit;
    }
}else{
    header("Location: ../../index.php");
    exit;
}
?>
