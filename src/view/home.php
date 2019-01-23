<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Home Page</title>
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
  </head>
  <body>
    <main>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide statistique__slide relative z4">
            <nav class="vertical-align">
              <h2>Statistique</h2>
            </nav>
            <section class="oHidden">
              <svg class="marginTop40 marginBottom40" width="259" height="153" viewBox="0 0 259 153" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="73" cy="78" r="6" fill="#4871FF"/>
                <circle cx="126" cy="116" r="6" fill="#4871FF"/>
                <circle cx="187" cy="49" r="6" fill="#4871FF"/>
                <circle cx="253" cy="6" r="6" fill="#4871FF"/>
                <path d="M1 152C15.2033 127.358 49.2344 78.0751 71.7324 78.0751C99.8549 78.0751 104.116 115.038 127.125 115.038C150.134 115.038 164.622 47.9104 185.927 47.9104C207.232 47.9104 224.525 4.5 253.5 4.5" stroke="#4871FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <p>Vous avez collecté <strong>256KWH !</strong></p>
              <h2 class="align-left marginTop30 marginBottom10">Récompenses</h2>
              <div class="underline"></div>
              <article class="oHidden">
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
                <div class="reward-bloc">
                  <p class="align-left neon-blue size20 marginBottom5">-20%</p>
                  <p class="align-left size13">sur les 5 prochaines charges</p>
                </div>
              </article>
            </section>
          </div>
          <div class="swiper-slide home__slide">
            <nav class="z1">
              <img src="/ICAN3WEB/projet_semestre_1/src/resources/img/stat.png" alt="logo indicateur menant vers les stats">
              <img src="/ICAN3WEB/projet_semestre_1/src/resources/img/User.png" alt="logo par defaut de l'utilisateur">
            </nav>
            <section>
              <article class="">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10504.561230316252!2d2.376437190923316!3d48.836462342275546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67215630ec317%3A0x1d12150f4acb78f8!2sQuartier+de+Bercy%2C+75012+Paris!5e0!3m2!1sfr!2sfr!4v1547332500936" width="800" height="600" allowfullscreen></iframe> -->
                <div id='map'></div>
                <div id="geocoder" class="geocoder"></div>
                <div class="z3 box-shadow-white"></div>
                <div class="swiper-haut z3">
                  <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4926 0.417896L1.41154 9.33371C0.858161 9.87701 0.858161 10.7547 1.41154 11.298C1.96492 11.8413 2.85884 11.8413 3.41221 11.298L10.0811 4.76435L10.0811 21.6069C10.0811 22.3731 10.7196 23 11.5001 23C12.2805 23 12.919 22.3731 12.919 21.6069L12.919 4.76435L19.5737 11.298C20.1271 11.8413 21.021 11.8413 21.5744 11.298C21.8582 11.0194 21.9859 10.6711 21.9859 10.3089C21.9859 9.94667 21.844 9.59839 21.5744 9.31977L12.4933 0.403966C11.9541 -0.125409 11.046 -0.125411 10.4926 0.417896Z" fill="#333333"/>
                  </svg><p>Swiper vers le haut pour les réglages</p>
                </div>
              </article>
            </section>
          </div>
          <div class="swiper-slide compte__slide relative z4">
            <nav class="vertical-align">
              <div class="photo-user marginBottom20"></div>
              <h2 class="size24">Cristina Gottardi</h2>
            </nav>
            <section class="displayNone">
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Mes véhicules</h2>
                <div class="underline"></div>
                <div class="vehicle__card background-neon-blue vertical-align paddingTop15 paddingBottom15 marginTop20">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="36" height="36" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0" transform="scale(0.00666667)"/>
                    </pattern>
                    <image id="image0" width="150" height="150" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAYAAAA8AXHiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABuFJREFUeNrsne112zYUhimd/I8zQekNmAksT1BlA2aCMhNUnoDtBEwnoDOB7AnoTiB3AnkDlbChVJVF4pIEJBJ4nnN4lBPbpPjyBXBx8cEoAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICRMPP55na7XVJ/LOrjpj7i+kg8uK1nfTzWx/1sNnvCWOczVFp//OaJkSRG+7M+vtcme8FYbgylaqdC106hoQz2rTbX/Ri+zNwjU+X1xzpQU0X6vstah6I+rqixhhtKiahMlRIy/0TFXbeXbBp9MFZZfyzx0rjMNZu4qVRNlQl+VYn7UB9/e2CYX3RBkjR3qtf4hTLWzVTLnZmN7iH6ev+VQIMMt8hFTepjaxA0H0MQewYtMoMO2xB0sBKsC0pqGpgmqUGPEueYRSwMIq4C1cVUcy1wT/+SuQ5cn7Uh3qRJ7BFXBR9L1PcfGzRa4aT3cdWGql6k1cqgU4JK/4lV0qXupFdFuDA8KKXH816zBQXRHFftCEh7aZcb4tE45LhqS7zgTL8yVGHWJEEHa2ga9lqGJoipZ1NgGysFNJxQQhB4VsRVnfQ05bZyRHj7GXGV/RYg8V0ABpcvo20VaveYuMp9iJH5dsOxIAlaYQ3nhXf6uS3dDc6FMyDDTebZ112SGywmo7fOoGeC3BS5lvMUagnl6Ab2dfOWavdvd/3JsYKT59OlgK8v2mnq2LxJIK66XFqncWGK8xziwOZNEleRBHX7/NIBz2Zl7fnowM9G82aqdjNMddYURDnAYP0DfW2mtSMjVbr5JEC/fNNYDDBY1uViiQND7V2ekkIYrcFWPVukQlpLbS03b4zxTSvflQnWGcjNNSCoo3nzN8jv0tPPmoI5mjdo8oY0NIqPq78tzRsI4jCTwdaHf7AaRYIMpmKw1l6ktLYqMRScMFdpMlbG0Ar0bBZbjVWKAjEAYZO43zV50fB3aqvBZ+SDFk5uv7k3VlP89APdwMBTm7GaoLaCXny4ZOAXvd/s/2lMr+2YYLyTHLU+L5d6186HMxtJDfP82hLTqd9TteRDfTzWonzHLq2aLg70TBp+Z99cKU3/OqvRXG5m1nEowO2kMn8MlfYYID4cy01tmrst3WDdWDrpmlucbrPEUK9TmSqLs07iSRlLC7DZ2acIvJZyMQU8nYSxhJv7Dy1pV4GZKt+5JbVtrLntqjp6e7WbywevzJ6HVFNFsvcFDaGwvcRrblEAZaZSYCqVTlC9va/R29up1IuiPql/18e3poTbEWkIaw51XClp/lVP+g+t4bXW9HN9fNH//yw0V2L7BgY3hcLVHqIeXoee5MJjU0nmx4lfQiWcbt55IzanMZZg5ummT2kQzBGrPDaWKa4qe5jgSlBgV11r1T7GWglP7mw7QkFvKPXQVLHL3rGhdem0WLipAOx/2JQa2Ah7gU534DOU3iqw2qqycH7Tmz6yDufatBmr6FsjGERYWRLaJETsmbE2rrd1NIQvlfAcmWmi37JvrdMigtX9FwxNYuaRqZJzJYgNIUw8JF8pLSXbU4G8IRbILYtwFcJm+IZp4kvL11r2uZau7dp6mJvDPNZdy3dQNc9aO3x54OY2Vz/aFEFPp3lo+X6+cNWiwb3laz20/Cw5UYmkemmXKQl+NzuuGqOWKS0d+WR7bpWO2X6PwuSh1vPWQQ1ZRQ1TboZ8z+PMu8rUvlisYWD8vFg+l/LQ/4d0tBluLV8MwjHo7b5CmZ+oadRYnRpnGjTT0FEK4GPAD85VHGnjOb165nB26ryhGXuuj886oO9bey0ciLAI2FiJ7elC+nxDjPXyGqjXXjleJjg3xEkqWL6O5LMODrmxLEJsOcicIsuRnO9Je+Jae+S9d3o4/Pjh5i0P/NrWgldDj/DO0HWeWpNXnqNnqIfsmmqspuucZyWVIaFXWrqGafvo2KdqyTCvfXmG51aNQYTY9ewDw9CDd29lNzz0wUNlgunj6ViEKLoOB1k6t5eT/QST/Hq/DFRXBBuXxj1nrdV5oLjzznH+mUuyEV7S8ZymMb7xDegLhNivsFkISqt0S2ive4nCNYSFYCaCdB93a7HVzLYQwpTAs+7F/aM/Y33cdMhVffV9CX7HVU8qBfBD55aetI4fo5bl9ydyUreX2utBEhu4WKga7MJVRwtVpxerWl4Gzmpo9+ba7qaybkC4GqQPWRQojlaYbyYZp+p8jA0x1uwp/7PAFpZMlU96q4KOvTynW+54ZLDFAIMZe5FTFGSpb6xqae9560W3QpvqdYKbluau5OUPAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgk38FGACdiqCPQyFxAQAAAABJRU5ErkJggg=="/>
                    </defs>
                  </svg>
                  <div class="align-left">
                    <p class="blanc size13 marginBottom10">Peugeot</p>
                    <p class="blanc size13">Ion</p>
                  </div>
                </div>
              </article>
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Mes cartes</h2>
                <div class="underline"></div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginTop20">
                  <p class="blanc size13 paddingLeft15">1234 5678 1234 5678</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginTop10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Chargemap</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10">
                  <p class="blanc size13 paddingLeft15">Carte Total</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
              </article>
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Badges</h2>
                <div class="underline"></div>
                <div class="container-badge paddingTop20 paddingBottom20">
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle marginTop10 marginBottom10"></div>
                  <div class="badge-circle marginTop10 marginBottom10"></div>
                  <div class="badge-circle marginTop10 marginBottom10"></div>
                  <div class="badge-circle marginTop10 marginBottom10"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                  <div class="badge-circle"></div>
                </div>
              </article>
            </section>
            <section class="compte-modification">
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Profils</h2>
                <div class="underline"></div>
                <div class="carte__card ajout__card mail__modif vertical-align paddingTop10 paddingBottom10 marginTop20 marginBottom10">
                  <p class="blanc size13 paddingLeft15 neon-blue align-left">john.doe@gmail.com</p>
                </div>
                <div class="carte__card mdp__modif vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Mot de passe</p>
                </div>
                <div class="carte__card deconnexion vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Deconnexion</p>
                </div>
              </article>
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Mes véhicules</h2>
                <div class="underline"></div>
                <div class="container-vehicle__card">
                  <div class="vehicle__card background-neon-blue vertical-align paddingTop15 paddingBottom15 marginTop20">
                    <img src="/ICAN3WEB/projet_semestre_1/src/resources/img/car.svg" alt="">
                    <div class="align-left">
                      <p class="blanc size13 marginBottom10">Peugeot</p>
                      <p class="blanc size13">Ion</p>
                    </div>
                  </div>
                  <div class="vehicle__card ajout-vehicle__card vertical-align paddingTop15 paddingBottom15 marginTop20">
                    <img src="/ICAN3WEB/projet_semestre_1/src/resources/img/add2.svg" alt="">
                  </div>
                </div>
              </article>
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Mes cartes</h2>
                <div class="underline"></div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginTop20 marginBottom10">
                  <p class="blanc size13 paddingLeft15">1234 5678 1234 5678</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Chargemap</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Carte Total</p>
                  <img class="paddingRight15" src="/ICAN3WEB/projet_semestre_1/src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card ajout__card vertical-align paddingTop10 paddingBottom10 marginBottom10">
                  <img src="/ICAN3WEB/projet_semestre_1/src/resources/img/add2.svg" alt="icon d'ajout">
                </div>
              </article>
            </section>
          </div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
          <div class="swiper-slide">Slide 10</div>
        </div>
      </div>
    </main>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiamVyZW1iaGsiLCJhIjoiY2pxdzVubjFzMGl3bDN4cXUxemhxODF6biJ9.FkK_uFAdpDzoqEcfYO6H_g';
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v9',
      center: [2.3, 48.8],
      zoom: 10
    });


    map.on('load', function()
    {
        map.loadImage("https://i.imgur.com/B9OfNZt.png", function(error, image)
        {
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
                        foreach ($autolib as $coordinates) {
                            ?>
                            {
                                "type": "Feature",
                                "properties": {
                                    "description": "<p>Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina</p>",
                                    "icon": "custom-marker"
                                },
                                "geometry": {
                                    "type": "Point",
                                    "coordinates": [<?php echo $coordinates; ?>]
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
        // point apres la recherche
        map.addSource('single-point', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": []
        }
    });

    map.addLayer({
        "id": "point",
        "source": "single-point",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#007cbf"
        }
    });

    // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
    // makes a selection and add a symbol that matches the result.
    geocoder.on('result', function(ev) {
        map.getSource('single-point').setData(ev.result.geometry);
    });
    });

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        placeholder: 'Où allez-vous ? ...'
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

  </body>
</html>
