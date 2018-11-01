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
          <div class="carousel-item active" data-caption="<h5>Picture 1</h5><p>Some brief details describing Picture 1.</p>">
            <img class="d-block w-100" src="static/Crystal.jpg" alt="First slide">
          </div>
          <div class="carousel-item" data-caption="<h5>Picture 2</h5><p>Some brief details describing Picture 2.</p>">
            <img class="d-block w-100" src="static/Huge jap.jpg" alt="Second slide">
          </div>
          <div class="carousel-item" data-caption="<h5>Picture 3</h5><p>Some brief details describing Picture 3.</p>">
            <img class="d-block w-100" src="static/Jap_sword_safe1.jpg" alt="Third slide">
          </div>
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
  <div id="caption" class="text-center" style="margin-top: 30px;">
    <h5>Picture 1</h5>
    <p>Some brief details describing Picture 1.</p>
  </div>
</div>

<?php
require_once("page_end.php");
?>
