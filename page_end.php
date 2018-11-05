</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php if($page == "gallery"): ?>
  <script>
    $(function(){
      $("#gallery").on('slide.bs.carousel', function(slideEvent) {
        $('#caption').html($(slideEvent.relatedTarget).data('caption'));
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
      });
    });
  </script>
<?php endif; ?>

</body>
</html>
