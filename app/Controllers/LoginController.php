<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;

class LoginController extends Controller{
    
    public function login()
    {   
        session_start();
        $erro = isset($_SESSION['error']) ? $_SESSION['error'] : null;
    
        $this->view('login.php', [
            'erro' => $erro
        ]);
    
        unset($_SESSION['error']);
    }

    public function login_action(){
        session_start();

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        if(!empty($email) && !empty($senha))
        {   
            $user = Users::verificarLogin($email, $senha);
            $adm = Users::verificarAdm($email, $senha);
            if(!$user)
            {
                $_SESSION['error'] = "";
                $_SESSION['error'] = "Digite um email e uma senha que conferem";
                header("Location: /exercíciosIndividuais/SimpleRouter3/public/login ");
                exit;
            }
            
            if($adm){
                $_SESSION['loggedAdm'] = true;
                $parts = explode('@', $email);
                $_SESSION['email'] = $parts[0];
    
                header("Location: /exercíciosIndividuais/SimpleRouter3/public/home/adm ");
                exit; 
            }
            $buscarUserPorId = Users::buscarIdPorEmail($email);
            $_SESSION['id_user'] = $buscarUserPorId;
            $_SESSION['loggedUser'] = true;
            $parts = explode('@', $email);
            $_SESSION['email'] = $parts[0];

            header("Location: /exercíciosIndividuais/SimpleRouter3/public/home ");
            exit;
        }else
        {
            $_SESSION['error'] = "Digite um email e uma senha";
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login/cadastro ");
            exit;
        }
    }

    public function cadastro()
    {
        session_start();
        $erro = isset($_SESSION['error']) ? $_SESSION['error'] : null;
    
        $this->view('cadastro.php', [
            'erro' => $erro
        ]);
    
        unset($_SESSION['error']);
    }

    public function cadastro_action()
    {
        session_start();

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        if(!empty($email) && !empty($senha))
        {   
            $MesmoEmail = Users::buscarPorEmail($email);

            if($MesmoEmail)
            {
                $_SESSION['error'] = "";
                $_SESSION['error'] = "Digite um email que não esteja cadastrado";
                header("Location: /exercíciosIndividuais/SimpleRouter3/public/login ");
                exit;
            }

            Users::novoUsuario($email, $senha);
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login ");
            exit;

        }else
        {
            $_SESSION['error'] = "Digite um email e uma senha";
            header("Location: /exercíciosIndividuais/SimpleRouter3/public/login/cadastro ");
            exit;
        }
    }
}