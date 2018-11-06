<?php
  $page = "exhibition";
  require_once("page_start.php");
?>

<div class="col-md-10 page-content">
  <h2 class="text-center page-content-title">MUSEUM EXHIBITION</h2>
  <p class="text-center" style="margin-bottom:30px;">These are images from an exhibition of match safes, and vestas, at the Delaware Art Museum, entitled, <b>PORTABLE FIRE</b>, 13 September 2014 – 15 March 2015. A catalog from this exhibition is available for purchase.</p>
  <div class="row">
    <div class="col-md-12">
      <img id="display" class="img-fluid" src="img/exhibition/0.jpg">
    </div>
  </div>
  <p class="text-center" id="displayCaption">Photo <span id="displayNum">1</span> of 8<p>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/0.jpg" data-num="1">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/1.jpg" data-num="2">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/2.jpg" data-num="3">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/3.jpg" data-num="4">
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/4.jpg" data-num="5">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/5.jpg" data-num="6">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/6.jpg" data-num="7">
    </div>
    <div class="col-md-3">
      <img class="img-fluid" src="img/exhibition/7.jpg" data-num="8">
    </div>
  </div>
</div>

<?php
  require_once("page_end.php");
?>
