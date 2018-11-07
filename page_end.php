</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
  $(function(){
    $('#boxes').click(function(){
      $("nav .btn").css("border-style", "none");
    });
    $('#bigbox').click(function(){
      $(".page-content").css("border-style", "none");
    });
    $('#white').click(function(){
      $("body").css("background-color", "white");
    });
    $('#purple').click(function(){
      $("body").css("background-color", "#f7e9ff");
    });
    $('#reset').click(function(){
      $("nav .btn").css("border-style", "solid");
      $(".page-content").css("border-style", "solid");
      $("body").css("background-color", "#fafafa");
      $('#gallery .caption').css("top", "0");
    });
  });
</script>

<?php if($page == "gallery"): ?>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
  $(function(){
    $('#caption').click(function(){
      $('#gallery .caption').css("top", "-60px");
    });
    $('#gallery').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000
    });
  });
  </script>
<?php elseif($page == "contact"): ?>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
