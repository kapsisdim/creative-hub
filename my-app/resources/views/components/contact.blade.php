<section id="contact" class="contact">
		<div class="section-title">
				<h2>Contact Us</h2>
				<p>Contact us and we will reach out to you as soon as possible!</p>
		</div>
		<div class="contact-form">
				<form action=<?=$url?> method="POST">
            @csrf
						@if($errors->customErrors->all() || $errors->customSuccesses->all() || $errors->all())
								<div class="alert" id="errors-list">
										<ul>
												@foreach ($errors->customErrors->all() as $customError)
														<li class="alert-danger"><span class="alert-icon alert-icon--danger"></span><span>{!! $customError !!}</span></li>
												@endforeach
												@foreach ($errors->customSuccesses->all() as $customSuccess)
														<li class="alert-success"><span class="alert-icon"></span><span>{!! $customSuccess !!}</span></li>
												@endforeach
												@foreach ($errors->all() as $error)
														<li class="alert-danger"><span class="alert-icon alert-icon--danger"></span><span>{{ $error }}</span></li>
												@endforeach
										</ul>
								</div>
						@endif
						<div class="form-group">
								<input type="text" name="firstname" id="firstname" placeholder="First Name*" required>
						</div>
						<div class="form-group">
								<input type="text" name="lastname" id="lastname" placeholder="Last Name*" required>
						</div>
						<div class="form-group">
								<input type="email" name="email" id="email" placeholder="E-Mail*" required>
						</div>
						<div class="form-group">
								<textarea name="message" id="message" placeholder="We are very happy to get in touch with you :)" required></textarea>
						</div>
						<div class="form-group captcha">
						</div>
						<div class="form-group">
								<button type="submit" class="submit-btn">Send</button>
						</div>
				</form>
		</div>
</section>
