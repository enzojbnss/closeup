/**
 * 
 */
var ParticipanteService = function(){
	
	
	
	this.enviar = function(caminho,dados,funcao){
		$.ajax({
			method : 'POST',
			url : caminho,
			xhrFields : {
				withCredentials : true
			},
			data : dados
		}).success(function(retorno) {
			eval(funcao+"(retorno)");
		}).error(function(retorno) {
			alert(retorno);
			return [];
		});
	}
	
}