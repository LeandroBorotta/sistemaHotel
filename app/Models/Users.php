<?php

namespace Demo\Models;

use DatabaseConnection;
use \PDO;

class Users extends DatabaseConnection{
    
    private $id;
    
    private $email;

    private $senha;

    public static function  novoUsuario($email, $senha){
        $pdo = self::getPDO();
        $pdo = $pdo->prepare("INSERT INTO users (email, senha) VALUES (:email, :senha)");
        $pdo->bindParam(':email', $email);
        $pdo->bindParam(':senha', $senha);
        $pdo->execute();
        
    }

    public static function verificarLogin($email, $senha) {
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND senha = :senha");
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return true;
        }
    
        return false;
    }

    public static function verificarAdm($email, $senha) {
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND senha = :senha");
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && $user['isAdmin'] == 1) {
            return true;
        }
    
        return false;
    }
     

    public static function buscarPorEmail($email){
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return true;
        }
    
        return false;
    }

    public static function buscarIdPorEmail($email){
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row !== false) {
            return $row['id'];
        }
    
        return false;
    }

}