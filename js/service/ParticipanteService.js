/**
 * 
 * 
 * 
 */

var ParticipanteService = function() {

	this.salvarSIMG = function(paticipante) {
		var caminho = "/participante/salvar";
		var dados = {
			"participante.id" : paticipante.id,
			"participante.nomeCompleto" : paticipante.nomeCompleto,
			"participante.nomeCracha" : paticipante.nomeCracha,
			"participante.nomeEnpresa" : paticipante.nomeEnpresa,
			"participante.cargo" : paticipante.cargo,
			"participante.hierarquia.id" : paticipante.hierarquia.id,
			"participante.hierarquia.descricao" : paticipante.hierarquia.descricao,
			"participante.dataNascimento" : paticipante.dataNascimento,
			"participante.endereco" : paticipante.endereco,
			"participante.emailProfissional" : paticipante.emailProfissional,
			"participante.emailPessoal" : paticipante.emailPessoal,
			"participante.telefone" : paticipante.telefone,
			"participante.celular" : paticipante.celular,
			"participante.propagandaMedica" : paticipante.propagandaMedica,
			"participante.hospitalar" : paticipante.hospitalar,
			"participante.acesso" : paticipante.acesso,
			"participante.varejo" : paticipante.varejo,
			"participante.consumer" : paticipante.consumer,
			"participante.outro" : paticipante.outro,
			"participante.musica" : paticipante.musica,
			"participante.lugar" : paticipante.lugar
		};
		this.enviar(caminho, dados, "finalizaEnvio");
	};

	this.salvar = function(img,paticipante) {
		var formData = new FormData();
		var filename = $("#txtImg").val().replace(/C:\\fakepath\\/i, '');
		formData.append("id", 1);
		formData.append("image",img,filename);
		formData.append("nomeArquivo",filename);
		formData.append("name", $("#txtImg").val());
		formData.append("participante.id",paticipante.id);
		formData.append("participante.nomeCompleto",paticipante.nomeCompleto);
		formData.append("participante.nomeCracha",paticipante.nomeCracha);
		formData.append("participante.nomeEnpresa",paticipante.nomeEnpresa);
		formData.append("participante.cargo",paticipante.cargo);
		formData.append("participante.hierarquia.id",paticipante.hierarquia.id);
		formData.append("participante.hierarquia.descricao",paticipante.hierarquia.descricao);
		formData.append("participante.dataNascimento",paticipante.dataNascimento);
		formData.append("participante.endereco",paticipante.endereco);
		formData.append("participante.emailProfissional",paticipante.emailProfissional);
		formData.append("participante.emailPessoal",paticipante.emailPessoal);
		formData.append("participante.telefone",paticipante.telefone);
		formData.append("participante.celular",paticipante.celular);
		formData.append("participante.propagandaMedica",paticipante.propagandaMedica);
		formData.append("participante.hospitalar",paticipante.hospitalar);
		formData.append("participante.acesso",paticipante.acesso);
		formData.append("participante.varejo",paticipante.varejo);
		formData.append("participante.consumer",paticipante.consumer);
		formData.append("participante.outro",paticipante.outro);
		formData.append("participante.musica",paticipante.musica);
		formData.append("participante.lugar",paticipante.lugar);
		$.ajax({
			url : "/participante/salvar",
			type : "POST",
			data : formData,
			dataType : 'json',
			processData : false,
			contentType : false,
			success : function(retorno) {
				finalizaEnvio(retorno);
			}
		});
	};

	this.enviar = function(caminho, dados, funcao) {
		$.ajax({
			method : 'POST',
			url : caminho,
			xhrFields : {
				withCredentials : true
			},
			data : dados
		}).success(function(retorno) {
			finalizaEnvio(retorno);
		}).error(function(retorno) {
			finalizaEnvio(retorno);
		});
	};

};