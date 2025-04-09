{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('image-uploads') }}"><i class="nav-icon la la-images"></i> Media Manager</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('menu-items') }}"><i class="nav-icon la la-bars"></i> Menu items</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('home-page') }}"><i class="nav-icon la la-home"></i> Home page</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('portfolio-categories') }}"><i class="nav-icon la la-sitemap"></i> Portfolio categories</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('project') }}"><i class="nav-icon la la-camera"></i> Projects</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('our-service') }}"><i class="nav-icon la la-gear"></i> Our services</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('team-member') }}"><i class="nav-icon la la-users"></i> Team members</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('clients') }}"><i class="nav-icon la la-group"></i> Clients</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cubes"></i> Pages</a>
    <ul class="nav-dropdown-items">
				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('portfolio-page') }}"><i class="nav-icon la la-cube"></i> Portfolio page</a></li>

				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('our-studio-page') }}"><i class="nav-icon la la-cube"></i> Our studio page</a></li>

				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about-page') }}"><i class="nav-icon la la-cube"></i> About page</a></li>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('info') }}"><i class="nav-icon la la-info-circle"></i> Info</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('social') }}"><i class="nav-icon la la-share"></i> Socials</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('legal') }}"><i class="nav-icon la la-file"></i> Legals</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-form-entry') }}"><i class="nav-icon la la-envelope"></i> Contact form entries</a></li>
