<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;
use Demo\Models\Hotels;
use Demo\Models\Favorites;
use Demo\Models\Eventos;
use Demo\Models\Pagamentos;
use \DateTime;

class EventoController extends Controller{
    public function reserva($id = null){
        session_start();

        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        $loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : false;
        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;
        
        if (!$loggedUser && !$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;
        }
        $reserva = $email;
        $idUser = Users::buscarIdPorEmail($email.'@gmail.com');
        $noites = $_POST['noites'];
        $precoTotal = $_POST['precoTotal'];
        $string = $precoTotal;
        $valor = substr($string, 2);
        $dataInicial = $_POST['inicio'];
        $dataFinal = $_POST['final'];
      
        if(Eventos::novoEvento($idUser, $id, $dataInicial, $dataFinal, $reserva) && Eventos::adicionarPagamento($id, $idUser, $valor, $noites, $reserva)){
            header("location: /exercíciosIndividuais/SimpleRouter3/public/home/$id/sobre");
        }
        return false;
     }
}