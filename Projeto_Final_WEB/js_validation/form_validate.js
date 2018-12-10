// Regras de validação
$(document).ready(function(){
	// Formulário login
	$("#formLogin").validate({
		rules:{
			nome_user:{
				required: true,
				maxlength: 40,
				minlength: 4,
				minWords: 2
			},
			senha:{
				required: true,
				rangelength: [5,10]
			}	
		},
	})
		
	// Formulário signup
	$("#formSignup").validate({
		rules:{
			user:{
				required: true,
				maxlength: 40,
				minlength: 4,
				minWords: 2
			},
			email:{
				required: true,
				email: true,
				maxlength: 50
			},
			senha1:{
				required: true,
				rangelength: [5,10]
			},
			senha2:{
				required: true,
				rangelength: [5,10],
				equalTo: "#senha1"
			}
		},
	})
});