jQuery(function($) {
    $(document).ready(function() {
     


    	$('#enviarOrcamento').click(function(e){
    		e.preventDefault();
    		var dados = $('#orcamentoForm').serialize();
    		console.log($('#orcamentoForm').attr('action'));
    		
    		$.ajax({
    			url: $('#orcamentoForm').attr('action'),
    			method: 'post',
    			type: 'json',
    			data: $('#orcamentoForm').serialize()
    		})
    		.done(function(response){
    			console.log(response);
    			alert('Orçamento Enviado!');
    		})
    		.fail(function(response){
    			alert('Erro!');	
    		})
    	});

    });
});
