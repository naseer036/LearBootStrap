<section id="contactUs" class="container text-grey ">
	<div class="row">
		<div class="col-12 headingSize1 text-center">
			CONTACT US
		</div>
		<?php
		readfile('partials/address.html');
		?>
		<div class="col footer">
			<div class="con">
				<form action="model/index.php" method="get">
					<div class="card-block">
						
						<!--Header-->
						<div class="headingSize3 fontBold">
							<p>Email us with any questions or inquiries or call us on the number provide:.</p>
							<hr class="mt-2 mb-2">
						</div>
						
						<!--Body-->
						<br>
						
						<!--Body-->
						<div class="md-form">
							<i class="fa fa-user prefix"></i>
							<input type="text" id="name" name="name" class="form-control">
							<label for="name">Your name</label>
						</div>
						
						<div class="md-form">
							<i class="fa fa-tag prefix"></i>
							<input type="text" id="contact" name="contact" class="form-control">
							<label for="contact">Contact Number</label>
						</div>
						
						<div class="md-form">
							<i class="fa fa-envelope prefix"></i>
							<input type="text" id="email" name="email" class="form-control">
							<label for="email">Your email</label>
						</div>

						<div class="md-form">
							<i class="fa fa-tag prefix"></i>
							<input type="text" id="subject" name="subject" class="form-control">
							<label for="subject">Subject</label>
						</div>
						<input type="hidden" name="type" value="contact">
						
						<div class="text-center">
							<input type="submit" class="btn btn-default btn-lg text-white"></input>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>