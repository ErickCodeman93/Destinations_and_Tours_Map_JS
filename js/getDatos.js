
$('#enviar').click(function( event ){
	event.preventDefault();
	var datosRecibidos = $('#formulario').serialize();
	//alert('Enviastes ' + datosRecibidos);
	$.post("http://localhost/cancun/controllers/obtener.php", $('#formulario').serialize(), function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        obtenerDatos();
    });

	function obtenerDatos(){
		$.getJSON("controllers/obtener.php",function( data ){
		console.log("success");
		console.log(data);
		//var json = JSON.parse(data);
	});
}//end function
	
});

