<!DOCTYPE html>
<html>


<head>


	<title>FARGO STRONGPOUR</title>
  <meta name="description" content="Delicious Low Sugar And Keto Coffee's, Shakes, And Groceries Available For Everyone At Fargo StrongPour."/>
  <meta name="keywords" content="Fargo, StrongPour, Coffee, Shake, Weight Loss, Keto, Low Sugar">
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <meta name="viewport" width="width=device-width, initial-scale=1.0">
	<!-- lato font !-->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- cursive font !-->
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

	<!-- drumstick icon !-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>
	<?php include 'header.php'; ?>
  <img class="titan" srcset="pics/slider/slide1.jpeg 800w, pics/slider/slide1.jpeg 900w" alt="Collagen Water Product Shot">
	<main>
	<section id="section_1" class="section">
		<h2 class="section_title">OUR MENU</h2>
		<hr class="title_hr">
		<div class="menu_container">
			<div>
				<a href="menu.php"><img id="blended_pours_img"src="pics/blended_pours.jpeg"></a>
				<p class="section_text">Blended Pours</p>
			</div>
			<div>
				<a href="menu.php#brewed_pours"><img id="brewed_pours_img" src="pics/brewed_pours.jpeg"></a>
				<p class="section_text">Brewed Pours</p>
			</div>
			<div>
				<a href="menu.php#collagen_pours"><img id="collagen_pours_img" src="pics/collagen_pours.jpeg"></a>
				<p class="section_text">Collagen Pours</p>
			</div>
		</div>
	</section>

	<section id="section_2" class="section">
		<h2 class="section_title">GROCERIES</h2>
		<hr class="title_hr">
				<div class="outer_menu">
					<h3>Popular Items</h3>
					<div class="inner_menu">
						<div><item>Peanut Butter Cups</item><price>$8.50</price></div>
						<div class="description">Amazing Chocolatey Goodness packed in a peanut butter cup</div>
						<i class="material-icons">star_border</i>
						<div><item>Keto Bark</item><price>$8.50</price></div>
						<div class="description">Low in net carbs and containing no sugar, all Keto Bark varieties are soy free and gluten free, making this the perfect hazelnut-packed and deliciously sugar free candy bar for you to enjoy.</div>
						<i class="material-icons">star_border</i>
						<div><item>Impastable Noodles</item><price>$10.99</price></div>
						<div class="description">ThinSlim Foods Impastable Low Carb Pasta is a revolutionary pasta that is soy free and shirataki free, low in net carbs, low in calories, and packed with fiber.</div>
						<i class="material-icons">star_border</i>
						<div><item>G-Butter</item><price>$15.00</price></div>
						<div class="description">An amazing trip through flavor town with this delicious snack or spread.</div>
						<i class="material-icons">star_border</i>
						<div><item>Karma Probiotic Water</item><price>$3.25</price></div>
						<div class="description">Probiotics in kombuchas and premixed drinks deteriorate over time. But Karma’s patented, protective Push Cap guarantees that our proprietary blend of natural vitamins and cultures is delivered at optimal potency.</div>
						<i class="material-icons">star_border</i>
						<div><item>Thin Slims Bread & Bagels</item><price>$10.99</price></div>
						<div class="description">Get breads and bagels back into your low carb or keto lifestyle.</div>
						<i class="material-icons">star_border</i>
						<div><item>Real Good Foods Low Carb & Keto Meals</item><price>$6.50</price></div>
						<div class="description">An assortment of low carb & keto meals ranging from breakfast to dinner!</div>
						<i class="material-icons">star_border</i>
						<div><item>Real Good Oven Baked Pizza</item><price>$13.99</price></div>
						<div class="description">Don't feel like cooking for dinner, no worries! We've got you covered.</div>
						<i class="material-icons">star_border</i>
						<div><item>Keto Coffee Creamer</item><price>$8.00</price></div>
						<div class="description">Get your morning off to a great start with this keto friendly coffee creamer.</div>
						<i class="material-icons">star_border</i>
						<div><item>Quevos Keto Chips</item><price>$3.25</price></div>
						<div class="description">Everything you've been missing from a crunchy, salty, delicious potatoe chip... Except the carbs!</div>
						<br><br>
						<button type="text"><a href="grocery.php">CLICK HERE TO VIEW<br>ALL GROCERY ITEMS</a></button>
				</div>
			</div>
	</section>

	<section id="section_3" class="section">
				<h2 class="section_title">NOT BUILT TO BREAK!!!</h2>
				<hr class="title_hr">
			<p>Strong Pour Nutrition Bar’s story starts in September of 2011 when Medical Weight Loss Specialists opened its doors in Fargo.
				 The mission at Medical Weight Loss Specialists was to help patients become healthier by learning how to manage body weight. Spencer Berry, MD worked as a Family Physician for 25 years before opening the clinic.
				  He decided to start this journey because so many of his patients struggled with their body weight and it was causing so many health problems for them.
					<br><br>As the clinic grew, the staff at Medical Weight Loss Specialists recognized a need for people to have a way to get convenient and healthy food and drink and to keep them on track for their weight loss journey and/or healthy lifestyle.
					 Strong Pour Nutrition Bar opened its doors in December of 2019. Come check out our store...you won’t be disappointed!!!</p>
					 <img src="pics/front_counter.jpeg" class="titan" alt="StrongPour Store Interior ">
	</section>

	<section id ="section_6" class="section app">

		<div class="form_container">
		  <form action="https://prod-68.eastus.logic.azure.com:443/workflows/fa84797c4e874a17ba997ecec6267086/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=3IjEhwUJF9Du-bLgGDbohNZa10Isz8a57_B54AGlJd8" method="post">
						<h2>CONTACT US</h2>
		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="firstname" placeholder="Your name..">

		<!--    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
			-->
				<label for="email">Email Address</label>
				<input type="email" id="email" name="email" placeholder="Your Email Address..">

				<label for="tel">Phone Number</label>
				<input type="tel" id="tel" name="tel" placeholder="Your Cell Phone Number..">

				<label for="task">Task Input</label>
				<input type="text" id="lname" name="task" placeholder="Task Test..">


		    <label for="subject">Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		    <input type="submit" value="Submit">

		  </form>
			</div>
		</section>
</main>
<?php include 'footer.php'; ?>
</body>

</html>
