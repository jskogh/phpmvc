<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
  <div id="wrapper">
	  <div id="header">
	  	<?=$header?>
	  </div>
	  
	  <div id="main" role="main">
	    <?=$main?>
	    <?=get_debug()?>
	  </div>
	  <div id="footer">
	  	<?=$footer?>
	  </div>
  </div> <!-- end wrapper -->
</body>
</html> 