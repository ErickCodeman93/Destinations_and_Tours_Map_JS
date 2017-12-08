<!DOCTYPE html>
<html>
<head>
	<title>Prueba Cancun today</title>
	<style type="text/css">
			#map {
				background: gray;
				height: 700px;
				width: 30%;
			}
	</style>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
<form id="formulario" method="POST">
	<select name="ruinas">
		<option value="chichenItza">Chichen Itza</option>
		<option value="tulum">Tulum</option>
		<option value="coba">Coba</option>
		<option value="xcaret">Xcaret</option>
		<option value="xelHa">Xel-ha</option>
		<option value="kohunlinch">Kohunlinch</option>
		<option value="kabah">Kabah</option>					
	</select>
	<br><br>
	<input id="enviar" type="submit">
</form>
<br>
<div id="map"></div>
	<!--api key: AIzaSyCMl0jiEqE38hY86ouhcGvzdFTCDcMGibg-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMl0jiEqE38hY86ouhcGvzdFTCDcMGibg"></script>
	<script src="js/main.js"></script>
	<script src="js/getDatos.js"></script>

</body>
</html>