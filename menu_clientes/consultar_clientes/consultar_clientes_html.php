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
                    <h3 class="title has-text-grey">Consultar Clientes</h3>
                    <div class="box">
                        <form action="consultar_clientes.php" method="POST">
						<div class="field">
                                <div class="control">
									<label>Nome do Cliente</label><br>
									<select class="input is-large" name="nome" id="nome">
									<option value="">Escolha o CPF</option>
									<?php
											$sql = $pdo->prepare("SELECT * FROM tb_clientes ORDER BY id_cliente");
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
								<label >CPF</label><br>
                                <input disabled  id="cpf" name="cpf"  type="text" class="input is-large" placeholder="Nome">
                                </div>
                            </div>  

							<div class="field">
                                <div class="control">
								<label > Telefone Fixo</label><br>
                                <input disabled id="telefone" name="telefone" type="text" class="input is-large" placeholder="Telefone Fixo">
                                </div>
                            </div>
							<div class="field">
                                <div class="control">
								<label > Celular</label><br>
                                    <input disabled id="celular" name="celular" type="text" class="input is-large" placeholder="Celular">
                                </div>
                            </div>
                        </form>
                        <form action="../menu_clientes.php"> 
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
<script src="../../js/functionGetIdCliente.js"></script>
<script src="../../js/consultarClientesGetCpf.js"></script>
<script src="../../js/consultarClientesGetTelefoneFixo.js"></script>
<script src="../../js/consultarClientesGetCelular.js"></script>
<script src="../../js/jquery-3.6.0.min.js"></script>
<script src="../../js/jquery.mask.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>



