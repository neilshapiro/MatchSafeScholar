</div>
</div>
</div>

<script src="js/jquery-popper-bootstrap.js"></script>

<?php if($page == "gallery"): ?>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
  $(function(){
    $('#gallery').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000/*,
      lazyLoad: 'progressive'*/
    });
  });
  </script>
<?php elseif($page == "contact"): ?>
  <script src="js/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
<?php elseif($page == "works"): ?>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
    $(function(){
      $('.book-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
      }).on('setPosition', function (event, slick) {
	      slick.$slides.css('height', slick.$slideTrack.height() + 'px');
      });
    });
  </script>
<?php elseif($page == "exhibition"): ?>
  <script>
    $(function(){
      /*
      $('img:not(#display)').hover(function(event) {
        $('#display').attr('src', $(event.target).attr('src'));
      });
      */
      $('img:not(#display)').click(function(event) {
        $('#display').attr('src', $(event.target).attr('src'));
        $('#displayNum').text($(event.target).data("num"));
      });
    });
  </script>
<?php endif; ?>

</body>
</html>
