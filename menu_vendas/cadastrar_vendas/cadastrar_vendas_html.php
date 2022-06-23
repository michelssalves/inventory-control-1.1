<?php
require_once('../../conexao.php');
?>
<!DOCTYPE html>
<html>   
<head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <h3 class="title has-text-grey">Cadastrar Vendas</h3>
                    <div class="box">
                        <form action="cadastrar_vendas.php" method="POST">
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
									<label>Tipo da Venda</label><br>
									<select class="input is-large" name="tipo_da_venda" id="tipo_da_venda">
									<option value="">Escolha Tipo da Venda</option>
									<?php
											$sql = $pdo->prepare("SELECT * FROM tb_tipo_da_venda");
											$sql->execute();
											$fetchAll =$sql->fetchAll();
											foreach ($fetchAll as $tipo_de_venda) 
										{
											echo '<option value="'.$tipo_de_venda['id_tipo_da_venda'].'">'.$tipo_de_venda['venda'].'</option>';
										}
									?>
									</select>
                                    <input hidden id="id_tipo_da_venda" name="id_tipo_da_venda" >
								</div>
							</div>

                            <div class="field">
                                <div class="control">
								<label > Data da Venda </label><br>
                                    <input id="data_da_venda" name="data_da_venda" type="date" class="input is-large" placeholder="Data Da Venda" min="2021-11-02" max="2022-11-02" required >
									<span class="validity"></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
								<label > Preço</label><br>
                                    <input onkeyup="somenteNumeros(this);" id="preco" name="preco" type="text" class="input is-large" placeholder="Preço">
                                </div>
                            </div>
							<button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar Venda</button><br>
                        </form>
						<form action="../menu_vendas.php"> 
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button>
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script src="/../../js/jquery.js"></script>
</body>
</html>
<script src="/../../js/functionGetIdCliente.js"></script>
<script src="/../../js/funtionValidacaoDePreco.js"></script>
<script src="/../../js/functionGetIdTipoDaVenda.js"></script>
<script src="/../../js/jquery-3.6.0.min.js"></script>
<script src="/../../js/bootstrap.bundle.min.js"></script>


