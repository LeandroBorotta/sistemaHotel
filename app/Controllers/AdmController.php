<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;
use Demo\Models\Favorites;
use Demo\Models\Hotels;

class AdmController extends Controller{
   

    public function index(){
        session_start();
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        $mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : false;
        $this->view('adicionarHotel.php', [
            'nome' => $email,
            'mensagem' => $mensagem
        ]);
        unset($_SESSION['mensagem']);
    }

    public function adicionar(){
        session_start();

        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;

        if (!$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;   
        }
        $nome = isset($_POST['nome']) ? $_POST['nome'] : false;
        $localizacao = isset($_POST['localizacao']) ? $_POST['localizacao'] : false;
        $preco = isset($_POST['preco']) ? $_POST['preco'] : false;
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : false;

        $banheira = isset($_POST['banheira']) && $_POST['banheira'] === 'on' ? '1' : '0';
        $varanda = isset($_POST['varanda']) && $_POST['varanda'] === 'on' ? '1' : '0';
        $limpezaDiaria = isset($_POST['limpezaDiaria']) && $_POST['limpezaDiaria'] === 'on' ? '1' : '0';
        $arCondicionado = isset($_POST['arCondicionado']) && $_POST['arCondicionado'] === 'on' ? '1' : '0';
        $freezer = isset($_POST['freezer']) && $_POST['freezer'] === 'on' ? '1' : '0';
        $quadraEsportiva = isset($_POST['quadraEsportiva']) && $_POST['quadraEsportiva'] === 'on' ? '1' : '0';
        $piscina = isset($_POST['piscina']) && $_POST['piscina'] === 'on' ? '1' : '0';

        if (Hotels::novoHotel($nome, $localizacao, $descricao, $preco, $banheira, $varanda, $limpezaDiaria, $arCondicionado, $freezer, $quadraEsportiva, $piscina)) {
           $_SESSION['mensagem'] = '';
           $_SESSION['mensagem'] = 'Hotel adicionado';
           header("location: /exercíciosIndividuais/SimpleRouter3/public/adm/adicionar");
           exit;
        } else {
            echo "Erro ao inserir os dados.";
        }
    }


    public function atualizar($id = null){
        session_start();
        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;

        if (!$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;   
        }

        $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        $mensagem = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : false;
        $hotel = Hotels::getHotelById($id);

        $this->view('atualizarHotel.php', [
            'nome' => $email,
            'mensagem' => $mensagem,
            'hotel' => $hotel
        ]);

        unset($_SESSION['mensagem']);


    }

    public function atualizar_action($id = null){
        session_start();

        $loggedAdm = isset($_SESSION['loggedAdm']) ? $_SESSION['loggedAdm'] : false;

        if (!$loggedAdm) {
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login");
            exit;   
        }


        $nome = isset($_POST['nome']) ? $_POST['nome'] : false;
        $localizacao = isset($_POST['localizacao']) ? $_POST['localizacao'] : false;
        $preco = isset($_POST['preco']) ? $_POST['preco'] : false;
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : false;

        $banheira = isset($_POST['banheira']) && $_POST['banheira'] === 'on' ? '1' : '0';
        $varanda = isset($_POST['varanda']) && $_POST['varanda'] === 'on' ? '1' : '0';
        $limpezaDiaria = isset($_POST['limpezaDiaria']) && $_POST['limpezaDiaria'] === 'on' ? '1' : '0';
        $arCondicionado = isset($_POST['arCondicionado']) && $_POST['arCondicionado'] === 'on' ? '1' : '0';
        $freezer = isset($_POST['freezer']) && $_POST['freezer'] === 'on' ? '1' : '0';
        $quadraEsportiva = isset($_POST['quadraEsportiva']) && $_POST['quadraEsportiva'] === 'on' ? '1' : '0';
        $piscina = isset($_POST['piscina']) && $_POST['piscina'] === 'on' ? '1' : '0';

        if (Hotels::atualizarHotel($nome, $localizacao, $descricao, $preco, $banheira, $varanda, $limpezaDiaria, $arCondicionado, $freezer, $quadraEsportiva, $piscina, $id)) {
            $_SESSION['mensagem'] = '';
            $_SESSION['mensagem'] = 'Hotel adicionado';
            header("location: /exercíciosIndividuais/SimpleRouter3/public/home/adm");
            exit;
         } else {
             echo "Erro ao inserir os dados.";
         }
    }
    

    public function apagarHotel($id = null){
        $hotel = Hotels::getHotelById($id);
        Hotels::deletarHotel($hotel[0]['id']);
        Hotels::deletarFavorito($id);
        Hotels::deletarEvento($hotel[0]['id']);
        header("location: /exercíciosIndividuais/SimpleRouter3/public/home/adm");
        exit;
    }
}