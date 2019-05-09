<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JnC Show Case</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/stylesheet/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/stylesheet/style.css">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand logo" href="#"><img id="logo" src="assets/img/logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./assets/page/aboutme.html">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./assets/page/portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./assets/page/contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section id="hero">
    <h1>Creative and Beautiful Design!</h1>
    <p>Beauty and creativity change the world. <span id="span1">Fill your online world with them.</span></p>
    <p>You will see your world transforming <span>as well as others'.</span></p>
    <button id="btn-hero" class="btn btn-secondary">
      <a href="./assets/page/portfolio.html">Portfolio</a>
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
        <a href="./assets/page/portfolio.html#portfolio-content">
          <img src="assets/img/nail.jpg" alt="Website">
        </a>
        <h3>Web Design</h3>
        <p>Korean Nail Technician Association</p>
        <button class="btn btn-danger">
          <a href="./assets/page/portfolio.html#portfolio-content">See More</a>
        </button>
      </div>
      <div class="container image-card">
        <a href="./assets/page/portfolio.html#artwork-content">
          <img src="assets/img/green.jpg" alt="green">
        </a>
        <h3>Photoshop</h3>
        <p>Design Concept with Letters and Image</p>
        <button class="btn btn-danger">
          <a href="./assets/page/portfolio.html#artwork-content">See More</a>
        </button>
      </div>
      <div class="container image-card">
        <a href="./assets/page/portfolio.html#special">
          <img src="assets/img/special.jpg" alt="special">
        </a>
        <h3>Illustrator</h3>
        <p>A Simple Catchy Round Logo</p>
        <button class="btn btn-danger">
          <a href="./assets/page/portfolio.html#special">See More</a>
        </button>
      </div>
    </div>
  </section>


  <!-- FOOTER -->
  <footer>
    <ul>
      <li>
        <a href="#">Top</a>
      </li>
      <li>
        <a href="#why">Why Web</a>
      </li>
      <li>
        <a href="./assets/page/aboutme.html">About Me</a>
      </li>
      <li>
        <a href="./assets/page/contact.html">Contact</a>
      </li>
    </ul>
    <p>&copy; COPYRIGHT 2019. All Rights Reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>