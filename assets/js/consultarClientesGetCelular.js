$("#nome").on("change", function(){
    $.ajax({
        url: 'consultarClientesGetCelular.php',
        type: 'POST',
        data:{id:$("#nome").val()},
        beforeSend: function(){
            $("#celular").css({'display':'block'});
            $("#celular").val("Carregando...");
        },
        success: function(data)
        {
            $("#celular").css({'display':'block'});
            $("#celular").val(data);
        
        },
        error: function(data)
        {
            $("#celular").css({'display':'block'});
            $("#celular").val("Houve um erro ao carregar");
        }
    });
});