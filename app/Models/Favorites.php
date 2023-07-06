<?php

namespace Demo\Models;

use DatabaseConnection;
use \PDO;

class Favorites extends DatabaseConnection{
    private $favorite_id;
    private $user_id;
    private $hotel_id;

    public static function adicionarFavorito($id_user, $id_hotel)
{
    $pdo = self::getPDO();
    $stmt = $pdo->prepare("INSERT INTO favorites (user_id, hotel_id) VALUES (:id_user, :id_hotel)");
    $stmt->bindValue(':id_user', $id_user);
    $stmt->bindValue(':id_hotel', $id_hotel);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo json_encode("Operação de banco de dados bem-sucedida");
    } else {
        echo json_encode("Erro ao salvar dados no banco de dados");
    }
}

    public static function removerFavorito($userId, $hotelId)
    {
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("DELETE FROM favorites WHERE user_id = :userId AND hotel_id = :hotelId");
        $stmt->bindValue(':userId', $userId);
        $stmt->bindValue(':hotelId', $hotelId);
        $stmt->execute();
    }

    public static function verificarCurtida($userId, $hotelId) {
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM favorites WHERE user_id = :userId AND hotel_id = :hotelId");
        $stmt->bindValue(':userId', $userId);
        $stmt->bindValue(':hotelId', $hotelId);
        $stmt->execute();
    
        $count = $stmt->fetchColumn();
    
        if ($count > 0) {
            return 'star-fill';
        } else {
            return 'star';
        }
    }
}