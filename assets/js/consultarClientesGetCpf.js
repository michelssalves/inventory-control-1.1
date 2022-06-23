$("#nome").on("change", function(){
    $.ajax({
        url: 'consultarClientesGetCpf..php',
        type: 'POST',
        data:{id:$("#nome").val()},
        beforeSend: function(){
            $("#cpf").css({'display':'block'});
            $("#cpf").val("Carregando...");
        },
        success: function(data)
        {
            $("#cpf").css({'display':'block'});
            $("#cpf").val(data);
        
        },
        error: function(data)
        {
            $("#cpf").css({'display':'block'});
            $("#cpf").val("Houve um erro ao carregar");
        }
    });
});