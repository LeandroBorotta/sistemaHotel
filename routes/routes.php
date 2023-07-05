<?php

/**
 * This file contains all the routes for the project
 */

use Pecee\SimpleRouter\SimpleRouter;



\Pecee\SimpleRouter\SimpleRouter::setDefaultNamespace('Demo\\Controllers');


    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/', 'DefaultController@home')->name('home');
    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/contact', 'DefaultController@contact')->name('contact');
    SimpleRouter::basic('/exercíciosIndividuais/SimpleRouter3/public/companies/{id?}', 'DefaultController@companies')->name('companies');
