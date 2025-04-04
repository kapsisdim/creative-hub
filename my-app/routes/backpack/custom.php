<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('menu-items', 'MenuItemsCrudController');
    Route::crud('portfolio-categories', 'PortfolioCategoriesCrudController');
    Route::crud('image-uploads', 'ImageUploadCrudController');
    Route::crud('home-page', 'HomePageCrudController');
    Route::crud('clients', 'ClientsCrudController');
    Route::crud('legal', 'LegalCrudController');
    Route::crud('info', 'InfoCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('our-service', 'OurServiceCrudController');
    Route::crud('team-member', 'TeamMemberCrudController');
}); // this should be the absolute last line of this file