<?php 
$page = 'home';
include './assets/include/header.php'; 
?>

  <!-- HERO SECTION -->
  <section id="hero">
    <h1>Creative and Beautiful Design!</h1>
    <p>Beauty and creativity change the world. <span id="span1">Fill your online world with them.</span></p>
    <p>You will see your world transforming <span>as well as others'.</span></p>
    <button id="btn-hero" class="btn btn-secondary">
      <a href="portfolio.php">Portfolio</a>
    </button>
  </section>

  <!-- WHY WEB SECTION -->
  <section id="why">
    <div class="image-container">
      <img src="assets/img/laptop.jpg" alt="Laptop">
    </div>
    <div class="content-container">
      <h2>Why Web?</h2>
      <p><strong>Web presence is critical today</strong>. In the generation where the Internet is such a powerful
        communication tool, lack of a website or online presence can lead you or your business to lose potential
        valuable
        friends or clients.</p>
      <p>When people go to <strong>a website</strong>, they can <em>see</em> pictures, they can <em>check</em> needed
        information, they can <em>learn</em> about you
        and your business and they can <em>find</em> out how to get in touch with you.</p>
      <p>When you can point them to your website, you cultivate <strong>the credibility you need</strong> from them.</p>
    </div>
  </section>

  <!-- PORTFOLIO SECTION -->
  <section id="portfolio">
    <h2>Portfolio</h2>
    <div class="wrapper">
      <div class="container image-card">
        <a href="portfolio.php#portfolio-content">
          <img src="assets/img/nail.jpg" alt="Website">
        </a>
        <h3>Web Design</h3>
        <p>Korean Nail Technician Association</p>
        <button class="btn btn-danger">
          <a href="portfolio.php#portfolio-content">See More</a>
        </button>
      </div>
      <div class="container image-card">
        <a href="portfolio.php#artwork-content">
          <img src="assets/img/green.jpg" alt="green">
        </a>
        <h3>Photoshop</h3>
        <p>Design Concept with Letters and Image</p>
        <button class="btn btn-danger">
          <a href="portfolio.php#artwork-content">See More</a>
        </button>
      </div>
      <div class="container image-card">
        <a href="portfolio.php#special">
          <img src="assets/img/special.jpg" alt="special">
        </a>
        <h3>Illustrator</h3>
        <p>A Simple Catchy Round Logo</p>
        <button class="btn btn-danger">
          <a href="portfolio.php#special">See More</a>
        </button>
      </div>
    </div>
  </section>

  <?php include './assets/include/footer.php'; ?>