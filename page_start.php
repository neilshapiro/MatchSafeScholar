
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php if($page == "works" ||  $page == "gallery"): ?>
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <?php endif; ?>

    <link rel="stylesheet" href="style.css">
    <title>Match Safe Scholar</title>
  </head>
  <body>
    <div class="container">
      <div class="row text-center header">
        <div class="col-md-12">
          <a id="site-title" href="index.php"><h1>MATCH SAFE SCHOLAR</h1></a>
          <p>A website maintained by Neil Shapiro to study, evaluate, appraise, and enjoy match safes, vestas, and match holders.</p>
        </div>
      </div>
      <div class="row site-content">
        <div id="site-nav" class="col-md-2">
          <nav class="nav flex-md-column">
            <a class="btn btn-outline-secondary" href="index.php">Gallery</a>
            <a  style="white-space: normal;" class="btn btn-outline-secondary" href="works.php">Published Works</a>
            <a  style="white-space: normal;" class="btn btn-outline-secondary" href="exhibition.php">Museum Exhibition</a>
            <a style="display: inline-block;" class="btn btn-outline-secondary" href="services.php">Services</a>
            <a class="btn btn-outline-secondary" href="links.php">Links</a>
            <a class="btn btn-outline-secondary" href="contact.php">Contact</a>
          </nav>
        </div>
        <div class="col-md-10 page-content text-center">
