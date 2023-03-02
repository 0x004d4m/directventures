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
    Route::crud('slide', 'SlideCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('microservice', 'MicroserviceCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('contact-request', 'ContactRequestCrudController');
    Route::crud('why', 'WhyCrudController');
    Route::crud('team', 'TeamCrudController');
    Route::crud('member', 'MemberCrudController');
    Route::crud('mailing-list', 'MailingListCrudController');
}); // this should be the absolute last line of this file