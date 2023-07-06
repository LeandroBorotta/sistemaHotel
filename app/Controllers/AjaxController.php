<?php
namespace Demo\Controllers;

use Demo\Template\Controller;
use Demo\Models\Users;
use Demo\Models\Favorites;

class AjaxController extends Controller{

    public function ajax(){
        session_start();
        header("Content-Type: application/json");

        $id_user = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);
        $id_hotel = filter_input(INPUT_POST, 'item_id', FILTER_SANITIZE_NUMBER_INT);
        $isFavorite = $_POST['is_favorite'];

        if($isFavorite == 0){
            Favorites::removerFavorito($id_user, $id_hotel);
            unset($_SESSION['favorito_selecionado']);
        }else if($isFavorite == 1){
            Favorites::adicionarFavorito($id_user, $id_hotel);
            $_SESSION['favorito_selecionado'] = true;
      }
    }
}