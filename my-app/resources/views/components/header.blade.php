
<!-- Loading Animation -->
<div class="loading-screen">
		<div class="loader"></div>
</div>

<header>
		<div class="logo">
				<a href="/"><img src="{{ json_decode($homePage->logo_image)->image }}" alt="{{ json_decode($homePage->logo_image)->caption }}"></a>
		</div>
		<div class="mobile-toggle">
				<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<nav class="menu-desktop">
				<ul>
            @foreach ($menuItems as $item)
							<li><a href="{{ $item->link }}" class="{{ $active == $item->title ? 'active' : '' }}">{{ $item->title }}</a></li>
            @endforeach
						<li>
							<div class="social-divider">|</div>
						</li>
						<div class="social-icons">
							@foreach ($socials as $social)
								<li>
										<a href="{{ $social->link }}" title="{{ $social->title }}">
												<i class="{{ $social->icon }}" aria-hidden="true"></i>
										</a>
								</li>
							@endforeach
						</div>
				</ul>
		</nav>
</header>
