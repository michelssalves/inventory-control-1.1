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
                    <h3 class="title has-text-grey">Cadastrar Clientes</h3>
                    <div class="box">
                        <form action="cadastrar_clientes.php" method="POST">
                            <div class="field">
                                <div class="control">
								<label > Nome Completo</label><br>
                                    <input  id = nome name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>  
                            <div class="field">
                                <div class="control">
								<label > CPF </label><br>
                                    <input id= "cpf" name="cpf" data-mask= "000.000.000.00" type="text" class="input is-large" placeholder="CPF"autofocus>
                                </div>
                            </div>
							<div class="field">
                                <div class="control">
								<label > Telefone Fixo</label><br>
                                    <input  id="telefone" name="telefone" data-mask= "(00)0000-0000" type="text" class="input is-large" placeholder="Telefone"autofocus>
                                </div>
                            </div>
							<div class="field">
                                <div class="control">
								<label > Celular</label><br>
                                    <input  id="celular" name="celular" data-mask= "(00)00000-0000" type="text" class="input is-large" placeholder="Celular"autofocus>
                                </div>
                            </div>
                           
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button><br>
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
<script src="../../js/jquery.mask.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-3.6.0.min.js"></script>