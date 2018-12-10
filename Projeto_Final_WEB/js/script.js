/* Função para alternar entre tela de login e cadastro (Via jQuery) */
/*
$(document).ready(function(){
	$("#cadastro").hide();
	$("#gocadastro").click(function(){
		$("#login").hide();
		$("#cadastro").show();
	});
	$("#gologin").click(function(){
		$("#cadastro").hide();
		$("#login").show();	
	});
});
*/
/* Função para alternar entre tela de login e cadastro (Via JS puro) */
	// Links (tag a)
	var goLogin = document.getElementById("gologin");
    var goCad = document.getElementById("gocadastro");

    // Divs
    var login = document.getElementById("login");
    var cad = document.getElementById("cadastro");

    // Inicialmente mostrar a tela de login e ocultar a de cadastro.
    cad.style.display = "none";
    login.style.display = "block";

    goCad.addEventListener("click", function() {
	    login.style.display = "none";
	    cad.style.display = "block";
	});

	 goLogin.addEventListener("click", function() {
	    cad.style.display = "none";
	    login.style.display = "block";
	});