var red = red || {};

/* Aplicar el efecto de Hover (cuando el mouse pasa por encima) */
red.aplicarHover = function(elemento){
	elemento.hover(function () {
		var width = ($(this).width())*1.25;
		var height = ($(this).height())*1.25;
		
		$(this).width(width);
		$(this).height(height)
		
	},
	function () {
		var width = ($(this).width())*0.8;
		var height = ($(this).height())*0.8;
		
		$(this).width(width);
		$(this).height(height)
	}
	);
}

red.fade_out =function(elemento){
	$(elemento).fadeOut();
	// alert("foto ocultadandose!");
}
red.fade_in =function(elemento){
	$(elemento).fadeIn();
	// alert("foto mostrandose!");
}


/* Enlaza los elementos a sus respectivos efectos*/
red.init = function() {
	
	red.aplicarHover($("#cabecera img"));
	/*TODO: aplicar el efecto Hover a los superamigos*/
	

   /*TODO: Colocar los siguientes efectos de click fuera del init, usando namespace */ 	
	
	$( "button[name='invitacion']" ).click(function () {
		alert("Solicitación enviada");
	});
	
	$( "button[name='enviarPalabras']" ).click(function () {
		var texto = $( "textarea[name='palabras']" ).val();
		alert("Enviando: "+texto);
	});


/*---------------------OCULTAR Y MOSTRAR LOS ELEMENTOS DEL USUARIO-------------------------*/ 
	var superpoderes= document.getElementById("superpoderes");

	superpoderes.children[1].style.display="none";

	superpoderes.addEventListener('click', function() {
		if (superpoderes.children[1].style.display === 'none') {
	        superpoderes.children[1].style.display = 'block';
	    } else {
	        superpoderes.children[1].style.display = 'none';
	    }
	});
// 111111111111111111111111111111
	var debilidades= document.getElementById("debilidades");

	debilidades.children[1].style.display="none";

	debilidades.addEventListener('click', function() {
		if (debilidades.children[1].style.display === 'none') {
	        debilidades.children[1].style.display = 'block';
	    } else {
	        debilidades.children[1].style.display = 'none';
	    }
	});
// 111111111111111111111111111111
	var busqueda= document.getElementById("busqueda");

	busqueda.children[1].style.display="none";

	busqueda.addEventListener('click', function() {
		if (busqueda.children[1].style.display === 'none') {
	        busqueda.children[1].style.display = 'block';
	    } else {
	        busqueda.children[1].style.display = 'none';
	    }
	});
/*---------------------FIN OCULTAR Y MOSTRAR LOS ELEMENTOS DEL USUARIO-------------------------*/ 


	// function hide_block(x) {
	// 	if (x.style.display === 'none') {
	//         x.style.display = 'block';
	//     } else {
	//         x.style.display = 'none';
	//   	}
	// };

	// superpoderes.onclick = hide_block(superpoderes.children[1]);

	// heroes.fade_out("#Supermarc");
	//  $(".btn1").onclick = heroes.fade_out("#Supermarc");
	// // document.getElementById(".btn1").onclick = heroes.fade_out("#Supermarc");
	// $(".btn2").onclick = heroes.fade_in("#Supermarc");


	
	// // fadein()
 //    $(".btn1").click(function(){
 //    	// alert("foto ocultadandose!");
 //        $("#Supermarc").fadeOut(1000, function(){
 //        });
        
 //    });


    // $(".btn2").click(function(){
    // 	// alert("foto mostrandose!");
    //     $("#Supermarc").fadeIn(1000, function(){   
    //     }); 
    // });


}


/* Cuando el documento carga, se llama la función init*/
$( document ).ready(function() {
	red.init();
});