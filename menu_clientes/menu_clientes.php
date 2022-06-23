<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-8 is-offset-2">
                    <h3 class="title has-text-black">Menu Clientes</h3>
                    <div class="box">
                    <form action="cadastrar_clientes/cadastrar_clientes_html.php"> 
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar Clientes</button><br>
                    </form>
                    <form action="consultar_clientes/consultar_clientes_html.php"> 
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Consultar Clientes</button><br>
                    </form>
                    <form action="../index.php"> 
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>