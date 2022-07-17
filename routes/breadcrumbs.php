<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

use App\Models\Shisha;

/*
|--------------------------------------------------------------------------
| Breadcrumbs
|--------------------------------------------------------------------------
|
| Here is where you can register breadcrumbs for your application.
|
*/

Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('shisha.show', function (BreadcrumbTrail $trail, Shisha $shisha): void {
    $trail->parent('home');

    $trail->push('Shisha ('.$shisha->name.')', route('shisha.show', $shisha));
});


// Breadcrumbs::macro('resource', function (string $name, string $title) {
//     Breadcrumbs::for("{$name}.index", function (BreadcrumbTrail $trail): void {});
//     Breadcrumbs::for("{$name}.create", function (BreadcrumbTrail $trail): void {});
//     Breadcrumbs::for("{$name}.show", function (BreadcrumbTrail $trail): void {});
//     Breadcrumbs::for("{$name}.edit", function (BreadcrumbTrail $trail): void {});
// });