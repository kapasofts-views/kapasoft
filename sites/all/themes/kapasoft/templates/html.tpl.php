<!DOCTYPE html>
<html lang="en">
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
<!--    --><?php //print '<link href="'.base_path() . path_to_theme() .'css/telex.woff" rel="stylesheet" type="text/css">'; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
   <?php print '<script>';
   print 'var MIN_CONFIG = (function () {';
      print 'var viewDriverHost = "'.$interfaceConfig['driver_url'].'";';
      print 'var viewDriverPort = "'.$interfaceConfig['driver_port'].'";';
//implement the public part
      print 'return {';
          print 'getDriverUrl: function () {';
             print "return 'http://' + viewDriverHost + ':' + viewDriverPort;";
          print '}';
      print '};';
    print '}());';
   print '</script>';?>
  <?php print '<script src="http://'.$interfaceConfig['driver_url'].':'.$interfaceConfig['driver_port'].'/socket.io/socket.io.js"></script>';?>
  <?php print '<script>var socket = io.connect(MIN_CONFIG.getDriverUrl());</script>';?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../js/PIE.js"></script>
  <![endif]-->
</head>
<body class="font-lato fullwidth theme-red pattern-retina-wood">
<div class="wrapper">
    <!-- Page Header -->
    <?php include './'. path_to_theme() .'/templates/section--header.php';?>

    <!-- Main Content -->
    <div id="content" role="main">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
    </div>
</div>
<?php include './'. path_to_theme() .'/templates/section--footer.php';?>
  <?php //print '<script src="'.base_path() . path_to_theme() .'/js/jquery.min.js" type="text/javascript"></script>';?>
  <?php //print '<script src="'.base_path() . path_to_theme() .'/js/bootstrap.js" type="text/javascript"></script>';?>
  <?php print '<script src="'.base_path() . path_to_theme() .'/js/jquery.flexslider-min.js" type="text/javascript"></script>';?>
  <?php print '<script src="'.base_path() . path_to_theme() .'/js/jquery.tweet.js" type="text/javascript"></script>';?>
  <?php print '<script src="'.base_path() . path_to_theme() .'/js/jquery.fancybox.pack.js" type="text/javascript"></script>';?>
  <?php print '<script src="'.base_path() . path_to_theme() .'/js/jquery.fancybox-media.js" type="text/javascript"></script>';?>
  <?php print '<script src="'.base_path() . path_to_theme() .'/js/script.js" type="text/javascript"></script>';?>
</body>
</html>
