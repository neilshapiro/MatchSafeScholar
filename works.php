<?php
  $page = "works";
  require_once("page_start.php");
?>

<div class="col-md-10 page-content">
  <h2 class="text-center page-content-title">PUBLISHED WORKS</h2>
  <p class="text-center">Books and articles by Neil Shapiro. The articles are available to read on this website and the books may be purchased directly from Neil Shapiro or from the International Match Safe Association (<a href="http://www.matchsafe.org">http://www.matchsafe.org</a>).</p>
  <p class="text-center" style="margin-bottom:30px;"><small><strong>ALL RIGHTS FOR COMMERCIAL USE ARE RESERVED. PERMISSION FOR NON-COMMERCIAL USE MAY BE OBTAINED BY CONTACTING NEIL SHAPIRO</strong></small></p>
  <hr>
  <h2 class="text-center page-content-title">ARTICLES</h2>

    <?php
      $articles = json_decode(file_get_contents("articles.json"));
      for ($x = 0; $x < count($articles); $x += 3) {
        echo '<div class="row text-center article-content">';
        for ($y = $x; $y < $x+3; $y++) {
          if ($y >= count($articles))
            break;
          echo '<div class="col-md-4">
                  <a target="_blank" href="articles/' . $articles[$y]->link . '">' . $articles[$y]->title . '</a>
                </div>';
        }
        echo '</div>';
      }
    ?>

  <hr>
  <h2 class="text-center page-content-title">BOOKS</h2>
  <div class="book-slider">

    <div class="card text-center">
      <img class="img-fluid mx-auto" src="img/book.gif" alt="Book 1" height="120">
      <div class="card-body">
        <p class="card-text">Some quick example text to build about the book and book content which is inside the book.</p>
      </div>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <div class="card text-center">
      <img class="img-fluid mx-auto" src="img/book.gif" alt="Book 1" height="120">
      <div class="card-body">
        <p class="card-text">Some quick example text to build about the book and book content which is inside the book.</p>
      </div>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <div class="card text-center">
      <img class="img-fluid mx-auto" src="img/book.gif" alt="Book 1" height="120">
      <div class="card-body">
        <p class="card-text">Some quick example text to build about the book and book content which is inside the book.</p>
      </div>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <div class="card text-center">
      <img class="img-fluid mx-auto" src="img/book.gif" alt="Book 1" height="120">
      <div class="card-body">
        <p class="card-text">Some quick example text to build about the book and book content which is inside the book.</p>
      </div>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

  </div>
</div>

<?php
  require_once("page_end.php")
?>
