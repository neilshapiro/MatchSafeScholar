<?php
  $page = "gallery";
  require_once("page_start.php");
?>

<div class="col-md-10 page-content">
  <h2 class="text-center page-content-title">GALLERY</h2>
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div id="gallery" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#gallery" data-slide-to="0" class="active"></li>
          <li data-target="#gallery" data-slide-to="1"></li>
          <li data-target="#gallery" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <?php
            $captions = json_decode(file_get_contents("gallery_captions.json"));
            $active = ' active';
            foreach ($captions as $num => $caption) {
              echo "<div class='carousel-item$active' data-caption='$caption'>
                      <img class='d-block w-100' src='img/gallery/$num.png' alt='Slide $num'>
                    </div>";
              if ($active !== '') {
                $active = '';
              }
            }
          ?>
        </div>
        <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <p id="caption" class="text-center" style="margin-top: 30px;">
    Sample text for caption 1
  </p>
</div>

<?php
  require_once("page_end.php");
?>
