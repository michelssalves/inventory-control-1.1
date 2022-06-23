$("#nome").on("change", function(){
    $.ajax({
        url: 'consultarClienteGetTelefoneFixo.php',
        type: 'POST',
        data:{id:$("#nome").val()},
        beforeSend: function(){
            $("#telefone").css({'display':'block'});
            $("#telefone").val("Carregando...");
        },
        success: function(data)
        {
            $("#telefone").css({'display':'block'});
            $("#telefone").val(data);
        
        },
        error: function(data)
        {
            $("#telefone").css({'display':'block'});
            $("#telefone").val("Houve um erro ao carregar");
        }
    });
});