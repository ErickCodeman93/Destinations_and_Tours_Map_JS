
$(function(){
	$.getJSON("controllers/obtener.php",function( data ){
		console.log("success");
		console.log(data.msg);
		//var json = JSON.parse(data);
		
	});
});
