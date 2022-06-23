$("#nome").on("change", function(){
    $.ajax({
        url: 'functionGetIdCliente.php',
        type: 'POST',
        data:{id:$("#nome").val()},
        beforeSend: function(){
            $("#id_cliente").css({'display':'none'});
            $("#id_cliente").val("Carregando...");
        },
        success: function(data)
        {
            $("#id_cliente").css({'display':'none'});
            $("#id_cliente").val(data);
        
        },
        error: function(data)
        {
            $("#id_cliente").css({'display':'none'});
            $("#id_cliente").val("Houve um erro ao carregar");
        }
    });
});