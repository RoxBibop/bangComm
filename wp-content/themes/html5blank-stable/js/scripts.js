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

		// Ligne 2

		var li2 = document.querySelector('.li-2');

		li2.addEventListener('mouseover', activel2);
		li2.addEventListener('mouseout', offl2);

		function activel2(){
			let ligne = document.querySelector('.line-2');
			ligne.classList.add('full-line-2');
		}

		function offl2(){
			let ligne = document.querySelector('.line-2');
			ligne.classList.remove('full-line-2');
		
		}

		// Ligne 3

		var li3 = document.querySelector('.li-3');

		li3.addEventListener('mouseover', activel3);
		li3.addEventListener('mouseout', offl3);

		function activel3(){
			let ligne = document.querySelector('.line-3');
			ligne.classList.add('full-line-3');
		}

		function offl3(){
			let ligne = document.querySelector('.line-3');
			ligne.classList.remove('full-line-3');
		
		}

		// Ligne 4

		var li4 = document.querySelector('.li-4');

		li4.addEventListener('mouseover', activel4);
		li4.addEventListener('mouseout', offl4);

		function activel4(){
			let ligne = document.querySelector('.line-4');
			ligne.classList.add('full-line-4');
		}

		function offl4(){
			let ligne = document.querySelector('.line-4');
			ligne.classList.remove('full-line-4');
		
		}

		// Ligne 5





	});
	
})(jQuery, this);
