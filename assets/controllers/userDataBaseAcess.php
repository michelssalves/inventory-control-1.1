<?php
session_start();

$acao = $_REQUEST['acao'];
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);

if($acao == 'login'){
    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        login($usuario, $senha);

}

}
function login($usuario, $senha){

    include 'config.php';

        $token = md5(time() . rand(0, 9999) . time());
        $sql = $pdo->prepare("UPDATE funcionarios SET token = :token WHERE usuario = :usuario AND senha = :senha");
        $sql->bindValue(':token', $token);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();

        $sql = $pdo->prepare("SELECT * FROM funcionarios WHERE usuario = :usuario AND senha = :senha");
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();
        
       
       if ($sql->rowCount() == 1) {
        
           $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
           foreach($lista as $row){
            $_SESSION['id_funcionario'] = $row['id_funcionario'];
            $_SESSION['usuario']=  $row['usuario'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id_permissao'] = $row['id_permissao'];
            $_SESSION['token'] = $row['token'];
           }
        
           header("Location: inventory"); 

       }else{

           $_SESSION['msg'] = '<div class="alert-danger"> senha ou usuário incorreto!</div>';
            header("Location: login-inventory-control"); 
       }
         
}

function menuPrincipal(){
    
    include 'config.php';

    $permissao = $_SESSION['id_permissao'];

    $sql = $pdo->query("SELECT * FROM menu_principal WHERE id_permissao <= $permissao");
    $sql->execute();  
 
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){

    $tableMenu = $tableMenu.'<tr>
        <th>'.$row['botao_menu'].'</th>
    </tr>';
    }
    return $tableMenu;
}  
?>
