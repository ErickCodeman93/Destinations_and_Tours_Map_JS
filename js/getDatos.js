
$('#formulario').submit(function( event ){
	event.preventDefault();
	var datosRecibidos = $(this).serialize();
	//alert('Enviastes ' + datosRecibidos);
	$.post("http://localhost/cancun/controllers/obtener.php", $('#formulario').serialize(), function(data){
        //alert("Data: " + data + "\nStatus: " + status);
        alert(data.status);
        alert(data.msg);
    });
	
});

