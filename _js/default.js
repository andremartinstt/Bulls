$(function(){
	var boxImg = $("#imagem-noticia-carregar");
	var imgCar = $("#imagem-carregada");

	$(boxImg).click(function(){
		$(imgCar).click();
	});

	$(imgCar).change(function(){
		document.getElementById("imagem-noticia-carregar").value = document.getElementById("imagem-carregada").value;
	});

});