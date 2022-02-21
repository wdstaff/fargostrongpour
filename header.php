<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="css/header.css">
  <meta name="viewport" width="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="shortcut icon" href="favicon.ico" />
  <meta name="viewport" width="width=device-width, initial-scale=1.0">

  <!-- lato font !-->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- SparkLight Tag !-->
  <script async src='https://tag.simpli.fi/sifitag/9f041e10-e012-0138-7dc5-06b4c2516bae'></script>

  <!-- Google Analytics Tag !-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154710358-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154710358-1');
  </script>

</head>
<body>
  <div id="mobile-menu" class="mobile_responsive_nav_menu">
      <a href="index.php"><h2>HOME</h2>
      <hr class="mobile_nav_space"></a>
      <a href="menu.php"><h2>MENU</h2>
      <hr class="mobile_nav_space"></a>
      <a href="https://strongpour-nutrition-bar.mybigcommerce.com/" target="_blank"><h2>ONLINE STORE</h2>
      <hr class="mobile_nav_spavce"></a>
      <a href="stronger.php"><h2>STRONGER WITH STRONGPOUR</h2>
      <hr class="mobile_nav_space"></a>
      <a href="alc_calc.php"><h2>SUGAR ALCOHOL CALCULATOR</h2>
      <hr class="mobile_nav_space"></a>
      <a href="index.php#section_6"><h2>CONTACT US</h2>
      <hr class="mobile_nav_space"></a>
  </div>
  <header>

    <nav id="nav-bar" class="nav-bar">

      <li class="nav_link"><a id="services" href="index.php#section_3">SERVICES</a>
        <div class="dropdown-content">
            <a class="sub_link" href="https://strongpour-nutrition-bar.mybigcommerce.com/" target="_blank">SHOP ONLINE</a>
            <a class="sub_link" href="stronger.php">STRONGER WITH STRONGPOUR</a>
            <a class="sub_link" href="alc_calc.php">SUGAR ALCOHOL CALCULATOR</a>
            <!-- <a href="#">Video Recipes</a> !-->
        </div>
      </li>
      <li class="nav_link"><a id="menu" href="menu.php">MENU</a></li>
      <li class="nav_link logo_pic"><a id="logo_pic" href="index.php"><img src="pics/logo.jpg"></a></li>
      <li class="nav_link"><a id="grocery" href="https://strongpour-nutrition-bar.mybigcommerce.com/" target="_blank">GROCERY</a></li>
      <li class="nav_link"><a id="contact_us" href="index.php#section_6">CONTACT US</a></li>

    </nav>
    <div class="mobile_header_left">
      <a href="index.php"><img src="pics/logo.jpg"></a>
    </div>

    <div id="mobile_header_right" class="mobile_header_right">
    <img id="mobilepic" class="mobile_nav_pic" src="pics/three_bar_white1.png" onclick="mobilemenu()">
    </div>
  </header>
 <script src="scripts/header.js" type='text/javascript'></script>
</body>
</html>
