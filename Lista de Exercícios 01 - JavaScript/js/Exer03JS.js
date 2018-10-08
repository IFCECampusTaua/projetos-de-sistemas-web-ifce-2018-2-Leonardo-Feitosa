function acessarSite(){
	// Abre o site em uma nova janela.
	window.open("https://www.imdb.com/", "_blank");
}
document.getElementById("btn").addEventListener("click", acessarSite);