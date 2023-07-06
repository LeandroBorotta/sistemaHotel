<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;
use Demo\Models\Hotels;
use Demo\Models\Favorites;

class DefaultController extends Controller
{
    public function inicio()
    {
        session_start();

        $this->view('inicio.php');
    }

    public function home()
    {
        session_start();
        $loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : false;
        $idUser = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;

        if (!$loggedUser) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }
        Hotels::avaliacao();
        $hotels = Hotels::getHotels();

        $starsData = [];
        foreach ($hotels as $hotel) {
            $starsData[$hotel['id']] = Favorites::verificarCurtida($idUser, $hotel['id']);
        }
       
        $this->view('index.php',[
            'nome' => $email,
            'hoteis' => $hotels,
            'idUser' => $idUser,
            'starsData' => $starsData
        ]);
    }

    public function homeAdm(){
        session_start();
        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        if (!$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }
        Hotels::avaliacao();
        $hotels = Hotels::getHotels();
        $this->view('adm.php',[
            'nome' => $email,
            'hoteis' => $hotels
        ]);
    }

    public function sobre($id = null): string
    {
        return 'DefaultController -> companies -> id: ' . $id;
    }

    public function sair(){
        session_start();
        unset($_SESSION['loggedUser']);
        unset($_SESSION['email']);
        unset($_SESSION['loggedAdm']);  
        header("Location: /exercíciosIndividuais/SimpleRouter3/public/");
        exit;
    }
}