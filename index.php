<!DOCTYPE html>
<html>
<head>
	<title>Prueba Cancun today</title>
	<style type="text/css">
			#map {
				background: gray;
				height: 700px;
				width: 50%;
			}
			
			table{
				width: 30%;

			}

			table, th, td{
				border:1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 5px;
				text-align: left;
			}

			#flotante{
				overflow: hidden;
				width: 100%; /*TamaÃ±o definido */
			}

			#flotante .A, #flotante .B{
				float: left;
			}

			.B{
				margin-left: 40px;
			}

			section{
				width: 200px;
				
				margin-left: 70px;
			}

			form{
				margin-left: 70px;
			}


	</style>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="" src='js/getDatos.js'></script>
</head>
<body>
<form id="formulario" method="POST">
	<select name="ruinas">
		<option value="chichenItza">Chichen Itza</option>
		<option value="tulum">Tulum</option>
		<option value="coba">Coba</option>
		<option value="xcaret">Xcaret</option>
		<option value="xelHa">Xel-ha</option>
		<option value="Kohunlinch">Kohunlinch</option>
		<option value="kabah">Kabah</option>			
	</select>
	<br><br>
	<input id="enviar" type="submit">
</form>
<br>
<section id="flotante">
<div id="map" class="A"></div>

<table class="B">
	<caption>Información del lugar</caption>
	<tr>
		<th>Lugar</th>
	</tr>
	<tr>
		<td id="lugar">Descipción del sitio</td>
	</tr>
</table>
</section>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMl0jiEqE38hY86ouhcGvzdFTCDcMGibg"></script>
	<script src="js/mapa.js"></script>


</body>
</html>