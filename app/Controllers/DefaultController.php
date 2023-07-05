<?php
namespace Demo\Controllers;

use Demo\Template\Controller;

class DefaultController extends Controller
{
    public function home()
    {
        $this->view('index.html');
		
    }

    public function contact(): string
    {
        return 'DefaultController -> contact';
    }

    public function companies($id = null): string
    {
        return 'DefaultController -> companies -> id: ' . $id;
    }

    public function notFound(): string
    {
        return 'Page not found';
    }
}