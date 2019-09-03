(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		

		// Apparition de la ligne supérieure
		// Nav du footer

		// Ligne 1

		var li1 = document.querySelector('.li-1');

		li1.addEventListener('mouseover', activel1);
		li1.addEventListener('mouseout', offl1);

		function activel1(){
			let ligne = document.querySelector('.line');
			ligne.classList.add('full-line-1');
		}

		function offl1(){
			let ligne = document.querySelector('.line');
			ligne.classList.remove('full-line-1');
		
		}

	});
	
})(jQuery, this);


