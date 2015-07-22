  <footer class="footer cf" role="contentinfo">

    <div class="copyright center-footer">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>



  </footer>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/jquery.min.js"><\/script>')</script>


  <script src="/assets/js/isotope-docs.min.js"></script>

  
  

  <script>

  $(document).ready( function() {
  
  var $container = $('.grid');
  // initialize isotope
  $container.isotope({
    // options...
      itemSelector : '.project',
      masonry: {
        columnWidth: 100
      }

    //layoutMode : 'fitRows'
  });

  // filter items when filter link is clicked
  $('.filters a').click(function(){
    var selector = $(this).attr('data-filter');
    $container.isotope({ filter: selector });
    return false;
  });

});


  </script>

  

  


  <link rel="stylesheet" href="/assets/fancybox/jquery.fancybox-1.3.4.css">
  <script src="/assets/fancybox/jquery.fancybox-1.3.4.js"></script>
  <script>
  
    $(function() {
      
      $('.gallery a').fancybox({
            padding : 0,
        });


    });
  </script>

</body>
</html>