<?php
  $select = new BorneManager();
  $bornes = $select->findAllBorne();
// var_dump($bornes);
 ?>
<script type="text/javascript">
 mapboxgl.accessToken = 'pk.eyJ1IjoidmFsZW50aW5rYWhuIiwiYSI6ImNqcXBtYm90MjAyajU0OG8xZmxuaDJ2bDMifQ.4lXM63hKjqz6waLAbSLxsg';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/basic-v9',
center: [2.349830, 48.856580],
zoom: 11.3
});


  map.on('load', function(){

    map.loadImage("src/asset/images/location-marker.png", function(error, image){
          if (error) throw error;
          map.addImage("custom-marker", image);

          map.addLayer({
            "id": "places",
            "type": "symbol",
            "source": {
                "type": "geojson",
                "data": {
                  "type": "FeatureCollection",
                  "features": [
                    <?php
                    foreach ($bornes as $coordinates) {
                        $numb = $coordinates->getId(); ?>

                      {
                        "type": "Feature",
                        "properties": {
                          "description":"<?php $req = new BorneController();$requete = $req->afficherBorne($coordinates->getAdresse(), $coordinates->getId()); ?><?= $requete ?>",
                          "icon": "custom-marker"
                        },
                        "geometry": {
                          "type": "Point",
                          "coordinates": [<?php echo $coordinates->getPosition(); ?>]
                        }
                      },
                      <?php
                    }?>]
                  }
                },
                "layout": {
                    "icon-image": "custom-marker"
                }
            });
      });

      map.on('click', 'places', function (e)
      {
          var coordinates = e.features[0].geometry.coordinates.slice();
          var description = e.features[0].properties.description;

          while (Math.abs(e.lngLat.lng - coordinates[0]) > 180)
          {
              coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
          }

          new mapboxgl.Popup().setLngLat(coordinates).setHTML(description).addTo(map);
      });

      map.on('mouseenter', 'places', function()
      {
          map.getCanvas().style.cursor = 'pointer';
      });

      map.on('mouseleave', 'places', function()
      {
          map.getCanvas().style.cursor = '';
      });
  });

  /* Barre de recherche */
  var geocoder = new MapboxGeocoder({
      accessToken: mapboxgl.accessToken,
      placeholder: 'Où allez-vous?...'
  });

  document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

  map.addControl(new mapboxgl.GeolocateControl({
   positionOptions:
   {
      enableHighAccuracy: true
   },
   trackUserLocation: true
  }));
</script>
