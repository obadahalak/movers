	
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="contact-form">
								<div class="pbmit-heading-subheading text-center">
									<h4 class="pbmit-subtitle">{{ taal_user_pure(593,'ned') }}</h4>
									<h2 class="pbmit-title">{{ taal_user_pure(594,'ned') }}</h2>
								</div>
								<form method="post" id="contact-form" action="send.php">
									<div class="row"> 
										<div class="col-md-12">
											<input type="text" name="name" class="form-control" placeholder="Your Name" required>
										</div>
										<div class="col-md-6">
											<input type="text" name="transport-type" class="form-control" placeholder="Transport Type" required>
										</div>
										<div class="col-md-6">
											<input type="text" name="subject" class="form-control" placeholder="Subject" required>
										</div>
										<div class="col-md-12">
											<textarea name="message" cols="40" rows="5" class="form-control" placeholder="Message" required></textarea>
										</div>
										<div class="col-md-12">
											<button type="submit" class="pbmit-btn">
												<i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
												Send Message
											</button>
										</div>
										<div class="col-md-12 col-lg-12 message-status"></div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>