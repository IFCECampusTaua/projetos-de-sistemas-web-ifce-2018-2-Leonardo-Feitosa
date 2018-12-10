// Regras de validação
$(document).ready(function(){
	// Formulário de Edição de Dados...
	$("#editarDados").validate({
		rules:{
			newUser:{
				required: true,
				maxlength: 40,
				minlength: 4,
				minWords: 2
			},
			newEmail:{
				required: true,
				email: true,
				maxlength: 50
			},
			newSenha1:{
				required: true,
				rangelength: [5,10]
			},
			newSenha2:{
				required: true,
				rangelength: [5,10],
				equalTo: "#newSenha1"
			}
		},
	})
});