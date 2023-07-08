<?php

namespace Demo\Models;

use DatabaseConnection;
use \PDO;

class Eventos extends DatabaseConnection{
    private $id;
    private $id_user;
    private $id_hotel;
    private $reserva;

    public static function getEventos() {
        $pdo = self::getPDO();
        $select = $pdo->prepare("SELECT * FROM eventos");
        $select->execute();
    
        $eventos = $select->fetchAll(PDO::FETCH_ASSOC);
        $recursos = [];
        foreach($eventos as $evento){
            $recurso['id'] = $evento['id'];
            $recurso['title'] = $evento['reserva'];
            $recurso['id_user'] = $evento['user_id'];
            $recurso['id_hotel'] = $evento['hotel_id'];
            $recurso['inicio'] = $evento['inicioEvento'];
            $recurso['final'] = $evento['finalEvento'];
    
            $recursos[] = $recurso;
        }
    
        return $recursos;
    }

    public static function novoEvento($idUser, $idHotel, $inicio, $final, $reserva) {
        $pdo = self::getPDO();
    
        $query = "INSERT INTO eventos (user_id, hotel_id, reserva, inicioEvento, finalEvento) VALUES (:idUser, :idHotel, :reserva, :inicio, :final)";
        $statement = $pdo->prepare($query);
    
        $statement->bindParam(":idUser", $idUser);
        $statement->bindParam(":idHotel", $idHotel);
        $statement->bindParam(":reserva", $reserva);
        $statement->bindParam(":inicio", $inicio);
        $statement->bindParam(":final", $final);
    
        if ($statement->execute()) {
            return true; 
        } else {
            return false; 
        }
    }   

    public static function adicionarPagamento($id_hotel, $id_user, $preco, $quantidadeDias, $nomeReserva){
        $pdo = self::getPDO();
    
        $query = "INSERT INTO pagamentos (id_hotel, id_user, preco, quantidadeDias, nomeReserva) VALUES (:idHotel, :idUser, :preco, :quantidadeDias, :nomeReserva)";
        $statement = $pdo->prepare($query);
    
        $statement->bindParam(":idUser", $id_user);
        $statement->bindParam(":idHotel", $id_hotel);
        $statement->bindParam(":preco", $preco);
        $statement->bindParam(":quantidadeDias", $quantidadeDias);
        $statement->bindParam(":nomeReserva", $nomeReserva);
    
        if ($statement->execute()) {
            return true; 
        } else {
            return false; 
        }
    }
}