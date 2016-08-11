<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<title>Ejemplo de Google Maps API</title>
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSySz_REpPq-4WZA27OwgbtyR3VcA" type="text/javascript"></script>
<script type="text/javascript">
   //función para cargar un mapa de Google.
   //Esta función se llama cuando la página se ha terminado de cargar. Evento onload
   function load() {
      //comprobamos si el navegador es compatible con los mapas de google
      if (GBrowserIsCompatible()) {
         //instanciamos un mapa con GMap, pasándole una referencia a la capa o <div> donde queremos mostrar el mapa
         var map = new GMap2(document.getElementById("map"));   
         //centramos el mapa en una latitud y longitud deseadas
         //map.setCenter(new GLatLng(-34.86790661307723,-56.1516360193491), 5); 
         map.setCenter(new GLatLng(-34.8679,-56.1516), 5); 
         //añadimos controles al mapa, para interacción con el usuario
         map.addControl(new GLargeMapControl());
         map.addControl(new GMapTypeControl());
         map.addControl(new GOverviewMapControl()); 
		 map.setZoom(15);
      }
   }
   
   //]]>
   </script>
</head>
<body onLoad="load()" onUnload="GUnload()">
<div id="map" style="width: 300px; height: 200px"></div>
</body>
</html>
