	//evitamos que se haga submit del formulario cuando se pulsa enviar o se hace enter
	$("form").submit(function(e){
        // e.preventDefault();
        if(!$("#mantenimientos").children().length > 0 ){
        	alert("Debe seleccionar como mínimo un mantenimiento");
	    	return false;
	    }
    });

	    	var confirmIt = function (e) {
	    	    if (!confirm('¿Está seguro de que desea borrar el registro?')) e.preventDefault();
	    	    //elimina el li padre
	    	    $(this).parents('li').remove();
	    	};
		var i = 1;
		$( "#add" ).click(function() {
			//coge el value del select
			var man_actual = $("#mant").val();
			//coge el texto del select
			var man_text = $("#mant option:selected").text();
			//variable semaforo
			var sem = false
			//dentro del ul con id mantenimientos recorre cada li
			$('#mantenimientos li').each(function(){
				//una vez seleccionado el li compara el atributto si es equivalente al actual
				if($(this).attr('id') == man_actual){
					sem = true
				}
			} )
			//revisamos que no se esté repitiendo el mantenimiento a través de la variable semaforo
			if(!sem){

				//creamos un li
				var li = $('<li/>',
					{
						text: man_text,
						class: "list-group-item",
						id: man_actual,

	 
					});
				//creamos un boton
				var btndel = $('<button/>',
				    {
				        text: ' - ',
				        class:'float-right btn btn-danger',
				        type:'button',
				    });
				//añadimos un event listener al botón para que realice la funcion en caso de click
				btndel.on('click', confirmIt);
				//comenzamos a juntar unos elementos con otros y finalmente el li al html
				li.append('<input type="hidden" name="mant-'+ i +'" value="'+man_actual+'"/>');
				li.append(btndel);
				$('#mantenimientos').append(li);
				
	  			i++;
	  			
  			}else{
  				alert("Usted ya ha introducido '" + man_text+ "' no puede introducir dos veces el mismo mantenimiento!");
  			}
		});