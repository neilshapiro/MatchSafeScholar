<?php
  $page = "gallery";
  require_once("page_start.php");
?>

<div class="col-md-10 page-content">
  <h2 class="text-center page-content-title">GALLERY</h2>
  <div class="row">
    <div class="col-md-12">
      <div id="gallery">

        <?php
          $captions = json_decode(file_get_contents("gallery_captions.json"));
          foreach ($captions as $num => $caption) {
            echo "<div class=''>
                    <img class='img-fluid mx-auto' src='img/gallery/$num.png' alt='Slide $num' style='max-height:500px'>
                    <div class='caption text-center'>
                      $caption
                    </div>
                  </div>";
          }
        ?>

      </div>
    </div>
  </div>
</div>

<?php
  require_once("page_end.php");
?>
