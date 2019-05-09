<?php 
$page = 'aboutme';
include './assets/include/header.php'; 
?>

  <!-- ABOUTME TOP SECTION -->
  <section id="aboutme-top">
    <h2>About Me</h2>
  </section>

  <!-- ABOUTME MAIN SECTION -->
  <section id="aboutme">
    <div class="profile-image">
      <img src="./assets/img/profile-img.png" alt="picture">
    </div>
    <div class="profile-content">
      <h3>Sunmi Chang, "Jenna"</h3>
      <p>&#8226;<strong> Title</strong>: Web Designer</p>
      <p>&#8226;<strong> Exerience</strong>: More than 7 years of experience in the industry. Worked for Web Agencies
        and other freelancer positions. Check her work <a href="portfolio.php">here</a>.</p>
      <p>&#8226;<strong> A Little Bit More About Her</strong>: Enjoys walking outside and taking some pictures of
        beautiful things. Loves people and cares for them!!!</p>
    </div>
  </section>

  <!-- CITIES SECTION -->
  <section id="cities">
    <h3>Cities I Love</h3>
    <div class="city-wrapper">
      <div class="city-card">
        <img class="city-img" src="./assets/img/seoul.jpg" alt="">
        <p class="city-name">Seoul</p>
      </div>
      <div class="city-card">
        <img class="city-img" src="./assets/img/dallas.jpg" alt="">
        <p class="city-name">Dallas</p>
      </div>
      <div class="city-card">
        <img class="city-img" src="./assets/img/ilsan.jpg" alt="">
        <p class="city-name">Ilsan</p>
      </div>
      <div class="city-card">
        <img class="city-img" src="./assets/img/littlerock.jpg" alt="">
        <p class="city-name">Little Rock</p>
      </div>
      <div class="city-card">
        <img class="city-img" src="./assets/img/inje.jpg" alt="">
        <p class="city-name">Inje</p>
      </div>
      <div class="city-card">
        <img class="city-img" src="./assets/img/nyc.jpg" alt="">
        <p class="city-name">New York City</p>
      </div>
    </div>


  </section>

  <?php include './assets/include/footer.php'; ?>