<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JnC Showcase</title>
  <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="./assets/stylesheet/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/stylesheet/style.css">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand logo" href="./"><img id="logo" src="./assets/img/logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="<?php if ($page == 'home') {
                      echo 'nav-link active';
                    } else {
                      echo "nav-link";
                    } ?>">
          <!-- <li class="nav-item active"> -->
          <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="<?php if ($page == 'aboutme') {
                      echo 'nav-link active';
                    } else {
                      echo "nav-link";
                    } ?>">
          <a class="nav-link" href="aboutme.php">About Me</a>
        </li>
        <li class="<?php if ($page == 'portfolio') {
                      echo 'nav-link active';
                    } else {
                      echo "nav-link";
                    } ?>">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
        </li>
        <li class="<?php if ($page == 'contact') {
                      echo 'nav-link active';
                    } else {
                      echo "nav-link";
                    } ?>">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>