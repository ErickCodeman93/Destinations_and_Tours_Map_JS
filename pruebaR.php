<!DOCTYPE html>
<html>
<head>
	<title>Prueba Json</title>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
<script>
	

	$.getJSON("controllers/prueba.php",function( data ){
		console.log("success");
		console.log(data)
	});

</script>
</body>
</html>