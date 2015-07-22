<?php snippet('header') ?>
<div class="address">
      <h2><?php echo $page->address()->kirbytext() ?></h2>

      <div class="address-body">
      <?php echo $page->email()->kirbytext() ?>
      <?php echo $page->phone1()->kirbytext() ?>
      <?php echo $page->phone2()->kirbytext() ?>
      </div>
</div>
<iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/guerrav.m06mmneb/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiZ3VlcnJhdiIsImEiOiJQQkxEQlZFIn0.rc9K3sqrX0gOTCaDGiLUlA'></iframe>


<?php snippet('footer') ?>