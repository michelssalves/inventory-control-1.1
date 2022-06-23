$("#tipo_da_venda").on("change", function(){
    $.ajax({
        url: 'functionGetIdTipoDaVenda.php',
        type: 'POST',
        data:{id:$("#tipo_da_venda").val()},
        beforeSend: function(){
            $("#id_tipo_da_venda").css({'display':'none'});
            $("#id_tipo_da_venda").val("Carregando...");
        },
        success: function(data)
        {
            $("#id_tipo_da_venda").css({'display':'none'});
            $("#id_tipo_da_venda").val(data);
        
        },
        error: function(data)
        {
            $("#id_tipo_da_venda").css({'display':'none'});
            $("#id_tipo_da_venda").val("Houve um erro ao carregar");
        }
    });
});