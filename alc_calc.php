<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="Find Out How Much Hidden Sugar Is In Your Beer, Wine, Or Liquor. Our Sugar Alcohol Calculator Helps You Find Out The Net Carbs And Tsp. Of Sugar In Alcohol."/>
  <meta name="keywords" content="Fargo, StrongPour, Coffee, Shake, Weight Loss, Keto, Low Sugar, Keto Bark, Choc Zero, Groceries">
  <meta name="viewport" width="width=device-width, initial-scale=1.0">
  <title>Fargo Keto Alcohol Sugar Calculator</title>
  <link href="css/alc_calc.css" rel="stylesheet" type="text/css">
  <script src="scripts/alc_calc.js"></script>
</head>
<body>
  <?php include 'header.php' ?>
  <section class="alc_calc">
    <img class="logo" src="pics/logo.jpg" />
    <h1 class="title_text">Alcohol Sugar Calculator</h1>


    <form id="alc_calc_form" class="alc_calc_form">
      <legend>Enter Your Nutrition Information Below</legend><br>
      <label for="carbs">CALORIES PER SERVING OF ALCOHOL:</label><br>
      <input type="number" name="cals" id="cals"></input><br>
      <p class="submit_button" id="form_submit"><a class="sub_button">SUBMIT</a></p>
      <h2 class="net_carbs">Net Carbohydrates Per Serving:</h2>
      <h3 class="form_answer" id="net_carbs"></h3>
      <h2 class="tsp">Tsp of Sugar Per Serving:</h2>
      <h3 class="form_answer" id="tsp"></h3>
    </form>
  </section>

    <img class="alc_cals" src="pics/alc_cals.jpeg"/>

  <?php include 'footer.php' ?>

</body>
</html
