<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
    <link rel="stylesheet" href="../resources/css/css/class.css">
    <link rel="stylesheet" href="../resources/css/css/index.css">
    <title>Home Page</title>
  </head>
  <body>
    <main>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide homeSlide">
            <nav class="z1">
              <img src="../resources/img/stat.png" alt="logo indicateur menant vers les stats">
              <img src="../resources/img/User.png" alt="logo par defaut de l'utilisateur">
            </nav>
            <section>
              <article class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10504.561230316252!2d2.376437190923316!3d48.836462342275546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67215630ec317%3A0x1d12150f4acb78f8!2sQuartier+de+Bercy%2C+75012+Paris!5e0!3m2!1sfr!2sfr!4v1547332500936" width="800" height="600" allowfullscreen></iframe>
                <input class="z3" type="text" name="" value="" placeholder="Recherche...">
                <div class="z3 box-shadow-white"></div>
                <div class="swiper-haut z3">
                  <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4926 0.417896L1.41154 9.33371C0.858161 9.87701 0.858161 10.7547 1.41154 11.298C1.96492 11.8413 2.85884 11.8413 3.41221 11.298L10.0811 4.76435L10.0811 21.6069C10.0811 22.3731 10.7196 23 11.5001 23C12.2805 23 12.919 22.3731 12.919 21.6069L12.919 4.76435L19.5737 11.298C20.1271 11.8413 21.021 11.8413 21.5744 11.298C21.8582 11.0194 21.9859 10.6711 21.9859 10.3089C21.9859 9.94667 21.844 9.59839 21.5744 9.31977L12.4933 0.403966C11.9541 -0.125409 11.046 -0.125411 10.4926 0.417896Z" fill="#333333"/>
                  </svg><p>Swiper vers le haut pour les réglages</p>
                </div>
              </article>
            </section>
          </div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
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
    <script src="../resources/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script src="../resources/js/index.js"></script>
  </body>
</html>
