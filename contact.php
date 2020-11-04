<!DOCTYPE html>
<html lang="en" class="no-js">

	<?php include("inc/head.php") ?>

	<body>

	<?php include("inc/top_bar.php") ?>

	<div class="info_bg">

	<div class="row">
		<div class="large-12 columns">
			<div  align="center"><img src="img/main/contact.png"></div>

			<div class="large-12 columns info">
				<div class="large-8 columns">

					<div class="row">
						<div class="large-12 columns">

							<h4 class="red">Contact us with your training and course requirements</h4>

							<?php  
								include("inc/mail_form.php")
							?>

							<form data-abide name="contact_form" action="/contact.php" method="post">
						    <div class="row">
							    <div class="large-12 columns">
							      <label class="labelz">Name</label>
							      <input name="name" type="text" class="input" required pattern="[A-Za-z .'-]+" />
							    </div>
							    <div class="large-12 columns">
							      <label class="labelz">Email</label>
							        <input name="email" type="email" class="input" required pattern="[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}"/>
							    </div>
							  </div>
							  <div class="row">
							    <div class="large-12 columns">
							      <label class="labelz">Message</label>
							    	<textarea class="textareaz" name="message" required></textarea>
							  	</div>
							  </div>
							  <div class="row">
							  	<div class="large-12 columns">
							  		<input type="checkbox" id="myCheck" required> By checking this box you acknowledge that your email only be stored for the duration of the correspondence between yourself and North2South training. To remove your email from our records, you can email us at hayley@north2southtraining.co.uk.<br>							  		
							  	</div>
							  </div>
							  <br />
							  <button onclick="myFunction()" type="submit" class="success button">Submit</button>
						</form>

						<h4 class="red">Testimonials</h4>
						<p>‘If its any type of park training you are looking for please do not look any further than Hayley Thompson. The training courses she runs are up to date and professional. From health and safety, first aid or manual handling to siting and de-siting caravans. She teachers in a way that brings everyone in the class together, with a few laughs along the way. I would highly recommend Hayley for your park training so please do not hesitate to get in touch with her.</p>
						<p>Mr Chris Bell</p>
						<p>General Manager</p>
						<p>Ayr Holiday Park, St ives Cornwall. TR261EJ telephone 07968766247 or 01736795855</p>

						</div> 
					</div>

				</div>

				<div class="large-4 columns">

					<br />
					<div class="contact_box">
						Hayley Thompson<br />
						NORTH2SOUTH Training Consultants LTD<br />
						Wood Nook<br />
						Skirethorns<br />
						Threshfield<br />
						Skipton<br />
						North Yorkshire<br />
						BD23 5NU<br />
						<br />
						07780 703890<br />
						hayley@north2southtraining.co.uk<br />
					</div>
					<br />
					<h5 class="comp"> Companies we've worked with</h5>
					<div align="center">
						<img src="img/firstaid/allens.png" class="imgz">
						<img src="img/firstaid/parkDean.png" class="imgz">
						<img src="img/firstaid/Rudding.png" class="imgz">
					</div>

				</div>

			</div>

		</div>
	</div>

	</div>

	<?php include("inc/footer.php") ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/nav.js"></script>

	<script>
		function myFunction() {
	    var x = document.getElementById("myCheck").required;
		}
	</script>

	</body>

</html>