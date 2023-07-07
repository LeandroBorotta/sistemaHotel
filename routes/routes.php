<?php

/**
 * This file contains all the routes for the project
 */

use Pecee\SimpleRouter\SimpleRouter;



\Pecee\SimpleRouter\SimpleRouter::setDefaultNamespace('Demo\\Controllers');


    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/', 'DefaultController@inicio')->name('inicio');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/login', 'LoginController@login')->name('login');
    SimpleRouter::post('/exercíciosIndividuais/SimpleRouter3/public/login', 'LoginController@login_action')->name('login');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/login/cadastro', 'LoginController@cadastro')->name('cadastro');
    SimpleRouter::post('/exercíciosIndividuais/SimpleRouter3/public/login/cadastro', 'LoginController@cadastro_action')->name('cadastro');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/home/{id}/sobre', 'DefaultController@sobre')->name('cadastro');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/sair', 'DefaultController@sair')->name('sair');

    SimpleRouter::post('/exercíciosIndividuais/SimpleRouter3/public/ajax/home', 'AjaxController@ajax')->name('ajax');
    SimpleRouter::basic('/exercíciosIndividuais/SimpleRouter3/public/home', 'DefaultController@home')->name('home');


    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/adm/adicionar', 'AdmController@index')->name('add');
    SimpleRouter::post('/exercíciosIndividuais/SimpleRouter3/public/adm/adicionar', 'AdmController@adicionar')->name('adm');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/adm/{id}/atualizar', 'AdmController@atualizar')->name('add');
    SimpleRouter::post('/exercíciosIndividuais/SimpleRouter3/public/adm/{id}/atualizar', 'AdmController@atualizar_action')->name('adm');

    SimpleRouter::get('/exercíciosIndividuais/SimpleRouter3/public/adm/{id}/deletar', 'AdmController@apagarHotel')->name('adm');

    SimpleRouter::basic('/exercíciosIndividuais/SimpleRouter3/public/home/adm', 'DefaultController@homeAdm')->name('adm');
