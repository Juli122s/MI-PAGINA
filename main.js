window.addEventListener('load', function(){ //funcion de tipo flecha
	new Glider(document.querySelector('.carousel__lista'), {//accede a la clase lista donde estan todos los elementos
		slidesToShow: 1, //indica cuanto se va a desplazar
		slidesToScroll: 1,
		dots: '.carousel__indicadores', //el dots son los indicadores
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},
        
		responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 450,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			}
		]
	});
});