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
        
        $('#responderOrcamento').click(function(e){
    		e.preventDefault();
    		var dad = $('#respostaForm').serialize();
    		console.log($('#respostaForm').attr('action'));
    		
    		$.ajax({
    			url: $('#respostaForm').attr('action'),
    			method: 'post',
    			type: 'json',
    			data: $('#respostaForm').serialize()
    		})
    		.done(function(response){
    			console.log(response);
    			alert('Orçamento Atualizado!');
    		})
    		.fail(function(response){
    			alert('Erro!');	
    		})
    	});
        
    });
});
