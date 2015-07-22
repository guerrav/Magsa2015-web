<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- PURE CSS -->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  

  <!-- GOOGLE ANALYTICS -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50583064-1', 'magsa.cc');
  ga('send', 'pageview');

  </script>


  
  
  <!-- MAGSA CSS -->
  <?php echo css('assets/css/style.css') ?>
    

</head>


<?php if($page->title() == 'Mapa y contacto'): ?>
  <body class="contacto">
  <?php else: ?>
  <body class="ondasproyecto">
        
<?php endif ?>


  <header>
    <ul>
      <li class="logohead">
        <a href="<?php echo url() ?>">
          <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
        </a>
      </li>
    </ul>
    
    <?php snippet('menu') ?>
  </header>