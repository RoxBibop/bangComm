
		var btn = document.querySelector('.toggle');
		var hdr = document.querySelector(".header");
		var nav = document.querySelector('.navbar');
		
		function tgle()
		{
			btn.classList.toggle("togactive");
			hdr.classList.toggle("headerActive");
	
			setTimeout(function()
			{
				nav.classList.toggle("navactive")
			}, 500);
		}
	
		btn.addEventListener('click', tgle);
		console.log('niktamer');

