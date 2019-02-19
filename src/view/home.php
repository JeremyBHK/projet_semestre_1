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
      <div class="container-modal z6 vertical-align name-modal">
        <div class="modal relative">
          <h2 class="marginBottom20">Modifier le profile</h2>
          <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
          <label for="prénom">Prénom</label><br>
          <input type="text" class="height25">
          <br>
          <br>
          <label for="nom">Nom</label><br>
          <input type="text" class="height25">
          <br>
          <input type="submit" value="">
        </div>
      </div>
      <form action="?p=home">
        <div class="container-modal z6 vertical-align mail-modal">
          <div class="modal relative">
            <h2 class="marginBottom20">Modifier l'email</h2>
            <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
            <label for="prénom">Adresse email</label><br>
            <input type="email" name="email" id="email" class="height25">
            <br>
            <br>
            <input type="submit" name="upEmail" value="upEmail">
          </div>
        </div>
      </form>
      <?php 
        if (isset($_POST['upEmail'])){
          $user = new userManager();
          $user->findOneByEmail($_SESSION['email']);
          var_dump($update_user);
          $user->setEmail($_POST['email']);
          $user->getEmail();
          $user->update();
        }
      ?>
      <form action="?p=home" method="post">
        <div class="container-modal z6 vertical-align vehicle-modal">
          <div class="modal relative">
            <h2 class="marginBottom20">Ajouter un vehicule</h2>
            <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
            <label for="prénom">Marque</label><br>
            <input type="text" name="marque" id="marque" class="height25">
            <br>
            <br>
            <label for="nom">Modèle</label><br>
            <input type="text" name="modele" id="modele" class="height25">
            <br>
            <input type="submit" value="Valider" id="addCar" name="addCar">
          </div>
        </div>
      </form>
      <?php 
          if (isset($_POST['addCar'])){
            $car = new VoitureController();
            $addCar = $car->setCar($_POST);
          }
      ?>
      <div class="container-modal z6 vertical-align mdp-modal">
        <div class="modal relative">
          <h2 class="marginBottom20">Modifier le mot de passe</h2>
          <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
          <label for="prénom">Mot de passe</label><br>
          <input type="password" class="height25">
          <br>
          <br>
          <input type="submit" value="">
        </div>
      </div>
      <form action="?p=home" method='post'>
        <div class="container-modal z6 vertical-align house-modal">
          <div class="modal relative">
            <h2 class="marginBottom20">Ajouter un domicile</h2>
            <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
            <label for="prénom">Adresse du domicile</label><br>
            <input type="text" name="adresse" id="adresse" class="height25">
            <br>
            <br>
            <input type="submit" id="addAdresse" name="addAdresse" value="">
          </div>
        </div>
      </form>
      <?php 
          if (isset($_POST['addAdresse'])){
            $dom = new DomicileController();
            $domicile = $dom->setDomicile($_POST);
          }
      ?>
      <form action="?p=home" method="post">
        <div class="container-modal z6 vertical-align work-modal">
          <div class="modal relative">
            <h2 class="marginBottom20">Ajouter un lieu de travail</h2>
            <img class="absolute close-modal" src="./src/resources/img/ajoute.svg" alt="croix pour fermer le modal">
            <label for="prénom">Adresse du lieu de travail</label><br>
            <input id="test-input" type="text" name="adresse" id="taff_adresse" class="height25">
            <br>
            <br>
            <input type="submit" name="addTravail" id="addTravail" value="">
          </div>
        </div>
      </form>
      <?php 
        if (isset($_POST['addTravail'])){
          $taff = new TravailController();
          $add_taff = $taff->setTravail($_POST);
        }
      ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide statistique__slide relative z4">
            <nav class="vertical-align">
              <h2 class="neon-blue">Statistique</h2>
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
            <nav class="z5">
              <img src="./src/resources/img/stat.svg" alt="logo indicateur menant vers les stats">
              <img src="./src/resources/img/logo.svg" alt="logo Swigo">
              <img src="./src/resources/img/User.svg" alt="logo par defaut de l'utilisateur">
            </nav>
            <section class="">
              <article class="">
                <div id='map'></div>
                <div id="geocoder" class="geocoder"></div>
                <!-- <div class="z3 box-shadow-white"></div> -->
                <div class="swiper-haut z3">
                  <img id="menu-reglage" src="./src/resources/img/parametre.svg" alt="engrenage de paramètre">
                </div>
              </article>
            </section>
            <section class="reglage__section">
              <article class="">
                <div id="house" class="background-gris-bloc open-modal house__ajout vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10">
                  <img src="./src/resources/img/home-noir.svg" alt="icon de maison">
                  <div class="align-left">
                    <p class="noir size13">Domicile</p>
                    <!-- <p class="blanc size13">26 Rue Flocon</p> -->
                  </div>
                </div>
                <div id="work" class="background-gris-bloc open-modal work__ajout vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10">
                  <img src="./src/resources/img/work-noir.svg" alt="icon de travail">
                  <div class="align-left">
                    <p class="noir size13">Travail</p>
                    <!-- <p class="blanc size13">21 Rue Erard</p> -->
                  </div>
                </div>
              </article>
              <article class="container-filtre marginTop20">
                <article class="connecteur">
                  <h2 class="marginBottom20 align-left">Les connecteurs :</h2>
                  <div class="container-bloc-connecteur">
                    <div class="container-connecteur marginBottom20">
                      <div class="bloc-container background-gris-bloc">
                        <img src="./src/resources/img/domestiqueUE.svg" alt="icon prise domestique UE">
                        <p class="size12 marginTop5">Domestique UE</p>
                      </div>
                    </div>
                    <div class="container-connecteur marginBottom20">
                      <div class="bloc-container background-gris-bloc">
                        <img src="./src/resources/img/type-2-gris.svg" alt="icon prise domestique UE">
                        <p class="size12 marginTop5">Type 2</p>
                      </div>
                    </div>
                    <div class="container-connecteur marginBottom20">
                      <div class="bloc-container background-gris-bloc">
                        <img src="./src/resources/img/type-3C-gris.svg" alt="icon prise domestique UE">
                        <p class="size12 marginTop5">Type 3C</p>
                      </div>
                    </div>
                    <div class="container-connecteur marginBottom20">
                      <div class="bloc-container background-gris-bloc">
                        <img src="./src/resources/img/type-1-gris.svg" alt="icon prise domestique UE">
                        <p class="size12 marginTop5">Type 1</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="connecteur container-vitesses">
                  <div class="autoWI">
                    <h2 class="marginBottom20 align-left">Les vitesses :</h2>
                    <div class="container-type-bloc">
                      <div class="type-bloc background-gris-bloc vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10 marginBottom20">
                        <img src="./src/resources/img/standard.svg" alt="icon de travail">
                        <div class="align-left">
                          <p class="size13 marginBottom10">Standard</p>
                          <p class="size13">2 - 5KW</p>
                        </div>
                      </div>
                      <div class="type-bloc background-gris-bloc vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10 marginBottom20">
                        <img src="./src/resources/img/semi-acceleree.svg" alt="icon de travail">
                        <div class="align-left">
                          <p class="size13 marginBottom10">Semi-accélérée</p>
                          <p class="size13">5 - 16KW</p>
                        </div>
                      </div>
                      <div class="type-bloc background-gris-bloc vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10 marginBottom20">
                        <img src="./src/resources/img/acceleree.svg" alt="icon de travail">
                        <div class="align-left">
                          <p class="size13 marginBottom10">Accelerée</p>
                          <p class="size13">16 - 30KW</p>
                        </div>
                      </div>
                      <div class="type-bloc background-gris-bloc vertical-align paddingTop10 paddingBottom10 paddingLeft10 paddingRight10 marginBottom20">
                        <img src="./src/resources/img/rapide.svg" alt="icon de travail">
                        <div class="align-left">
                          <p class="size13 marginBottom10">Rapide</p>
                          <p class="size13">30 - 135KW</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </article>
            </section>
          </div>
          <div class="swiper-slide compte__slide relative z4">
            <nav class="vertical-align">
              <div class="photo-user marginBottom20"></div>
              <h2 class="size24">Cristina Gottardi</h2>
            </nav>
            <section class="compte-modification">
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Profils</h2>
                <div class="underline"></div>
                <div id="mail" class="carte__card ajout__card open-modal mail__modif vertical-align paddingTop10 paddingBottom10 marginTop20 marginBottom10">
                  <p class="blanc size13 paddingLeft15 neon-blue align-left">john.doe@gmail.com</p>
                </div>
                <div id="name" class="carte__card open-modal name__modif vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Nom et prénom</p>
                </div>
                <div id="mdp" class="carte__card open-modal mdp__modif vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
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
                    <img src="./src/resources/img/car.svg" alt="">
                    <div class="align-left">
                      <p class="blanc size13 marginBottom10">Peugeot</p>
                      <p class="blanc size13">Ion</p>
                    </div>
                  </div>
                  <div id="vehicle" class="vehicle__card ajout-vehicle__card open-modal vertical-align paddingTop15 paddingBottom15 marginTop20">
                    <img src="./src/resources/img/add2.svg" alt="">
                  </div>
                </div>
              </article>
              <article class="">
                <h2 class="align-left marginTop30 marginBottom10">Mes cartes</h2>
                <div class="underline"></div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginTop20 marginBottom10">
                  <p class="blanc size13 paddingLeft15">1234 5678 1234 5678</p>
                  <img class="paddingRight15" src="./src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Chargemap</p>
                  <img class="paddingRight15" src="./src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card vertical-align background-neon-blue paddingTop10 paddingBottom10 marginBottom10">
                  <p class="blanc size13 paddingLeft15">Carte Total</p>
                  <img class="paddingRight15" src="./src/resources/img/card.svg" alt="icon de carte bleu">
                </div>
                <div class="carte__card ajout__card vertical-align paddingTop10 paddingBottom10 marginBottom10">
                  <img src="./src/resources/img/add2.svg" alt="icon d'ajout">
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
          </div>
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
