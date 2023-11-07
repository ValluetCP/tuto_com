$(document).ready(function() {

	// on cible l'image, 
	$('#portfolio li').hover(function() {

		// on recherche l'img qui pourrait déjà y avoir pour la supprimer et récupère l'image qu'on survole
		$(this).find('div.detail img').remove();

		// on recherche l'img, la clone, (appendTo pour vérifier le code du dessus), l'insérer avant le texte. thumb : la petite img du bloc detail
		$(this).find('img').clone().insertBefore("div.detail p").addClass("thumb");

		// on recherche la div qui est caché pour la montrer par fadeIn, fast pour rapide. '.stop' pour éviter que l'animation soit trop rapide. Il arrête l'animation avant d'en faire une autre. Les paramètres stop(false,true) pour éviter les beug qd on passe plrs fois sur l'img
		$(this).find('div.detail').stop(false,true).fadeIn("fast");
	},

		// on recherche la div pour la caché, fast pour rapide
		function() {
		$(this).find('div.detail').stop(false,true).fadeOut("fast");
	});
	
	$("#portfolio li a").lightBox();
	
	// pour déplacer la légende en dessous plutôt qu'au dessus
	$('.bulle').tooltipsy({
		offset: [0, 10]
	})
	
});