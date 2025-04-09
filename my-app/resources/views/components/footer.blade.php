<footer>
		<div class="footer-top">
				<div class="footer-logo">
						<img src="{{ json_decode($homePage->footer_logo_image)->image }}" alt="{{ json_decode($homePage->footer_logo_image)->caption }}">
				</div>
		</div>
		<div class="footer-bottom">
				<div class="contact-info">
						<p><span>{{ $info->phone }}</span></p>
						<p><span>{{ $info->address }}, {{ $info->city }}</span></p>
						<p><span>{{ $info->email }}</span></p>
						<div class="social-icons">
							@foreach ($socials as $social)
								<a href="{{ $social->link }}"  title="{{ $social->title }}">
										<i class="{{ $social->icon }}" aria-hidden="true"></i>
								</a>
							@endforeach
						</div>
				</div>
				<div class="copyright">
						<p>Copyright © 2025 • Hakuna Creative Hub • All rights reserved</p>
				</div>
				<div class="footer-links">
						<a href="#">Cookies Policy</a>
						<a href="#">Privacy</a>
				</div>
		</div>
</footer>
