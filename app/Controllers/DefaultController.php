<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;
use Demo\Models\Hotels;
use Demo\Models\Favorites;
use Demo\Models\Eventos;

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
        if(!empty($_GET['search'])){
            $pesquisa =  $_GET['search'];
        }else{
            $pesquisa = null;
        }
        if (!$loggedUser) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }
        Hotels::avaliacao();
        $search = Hotels::getHotelsBySearch($pesquisa);
        $hotels = Hotels::getHotels();

        $starsData = [];
        foreach ($hotels as $hotel) {
            $starsData[$hotel['id']] = Favorites::verificarCurtida($idUser, $hotel['id']);
        }
       
        $this->view('index.php',[
            'nome' => $email,
            'hoteis' => $search,
            'idUser' => $idUser,
            'starsData' => $starsData
        ]);
    }

    public function homeAdm(){
        session_start();

        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;

        if(!empty($_GET['search'])){
            $pesquisa =  $_GET['search'];
        }else{
            $pesquisa = null;
        }

        $search = Hotels::getHotelsBySearch($pesquisa);
        
        if (!$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }
        Hotels::avaliacao();
        $hotels = Hotels::getHotelsAdm();

        $this->view('adm.php',[
            'nome' => $email,
            'hoteis' => $search,
        ]);
    }

    public function sobre($id = null)
    {
        session_start();

        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        $loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : false;
        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;
        
        if (!$loggedUser && !$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }

        $eventos = Eventos::getEventos();


        $hotel = Hotels::getHotelById($id);
        $this->view('sobre.php', [
            'hotel' => $hotel,
            'nome' => $email,
            'adm' => $loggedAdm,
            'eventos' => $eventos
        ]);
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