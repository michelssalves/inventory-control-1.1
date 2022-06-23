<?php
require_once('../../conexao.php');
?>
<!DOCTYPE html>
<html>   
<head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    	<link rel="stylesheet" href="../../css/bulma.min.css"/>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h3 class="title has-text-grey">Consultar Vendas</h3>
                    <div class="box">
                        <form action="consultar.php" method="POST">
						<div class="field">
                                <div class="control">
									<label>Nome</label><br>
									<select class="input is-large" name="nome" id="nome">
									<option value="">Escolha o cliente</option>
									<?php
											$sql = $pdo->prepare("SELECT * FROM tb_clientes ORDER BY nome");
											$sql->execute();
											$fetchAll =$sql->fetchAll();
											foreach ($fetchAll as $nome) 
										{
											echo '<option value="'.$nome['id_cliente'].'">'.$nome['nome'].'</option>';
										}
									?>
									</select>
                                    <input hidden id="id_cliente" name="id_cliente" >
								</div>
							</div>
							<div class="field">
                                <div class="control">
									<label>Tipo de de Venda</label><br>
									<select class="input is-large" name="tipo_da_venda" id="tipo_da_venda">
									<option value="">Escolha o cliente</option>
									<?php
											$sql = $pdo->prepare("SELECT * FROM tb_tipo_da_venda ORDER BY id_tipo_da_venda");
											$sql->execute();
											$fetchAll =$sql->fetchAll();
											foreach ($fetchAll as $tipo_da_venda) 
										{
											echo '<option value="'.$tipo_da_venda['id_tipo_da_venda'].'">'.$tipo_da_venda['venda'].'</option>';
										}
									?>
									</select>
                                    <input  hidden id="id_tipo_da_venda" name="id_tipo_da_venda" >
								</div>
							</div>

							<button type="submit" class="button is-block is-link is-large is-fullwidth">Consultar Vendas</button><br>			
						</form>
						<form action="../menu_vendas.php"> 
    						<button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script src="../../js/jquery.js"></script>
</body>
</html>
<script  src="../../js/functionGetIdTipoDaVenda.js"></script>
<script  src="../../js/functionGetIdCliente.js"></script>
<script  src="../../js/jquery-3.6.0.min.js"></script>
<script  src="../../js/jquery.mask.min.js"></script>
<script  src="../../js/bootstrap.bundle.min.js"></script>

