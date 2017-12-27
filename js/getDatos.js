
$('#formulario').submit(function( event ){
	event.preventDefault();
	var datosRecibidos = $(this).serialize();
	//alert('Enviastes ' + datosRecibidos);
	$.post("http://127.0.0.1/buscadorLugares/controllers/obtener.php", $('#formulario').serialize(), function(data){
        //alert("Data: " + data + "\nStatus: " + status);
        //alert(data.status);
        //alert(data.msg);
        console.log(data);
        var respuesta = data.msg;
        console.log(respuesta);
    });
	
});

