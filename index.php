<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.2.0/css/ol.css" type="text/css">
    <style>
      .map {
        height: 600px;
        width: 100%;
      }
    </style>
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.2.0/build/ol.js"></script>

    <title>OpenLayers example</title>
  </head>
  <body>
    <div id="map" class="map"></div>
    <div id="marker" title="Marker"></div>
    <script type="text/javascript">

      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM(),
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([47.56, -18.95]),
          zoom: 13
        })
      });
      /*// Vienna marker
      var pos = ol.proj.fromLonLat([47.56, -18.95]);
      var marker = new ol.Overlay({
        position: pos,
        positioning: 'center-center',
        element: document.getElementById('marker'),
        stopEvent: false
      });
      map.addOverlay(marker);*/

    </script>
  </body>
</html>