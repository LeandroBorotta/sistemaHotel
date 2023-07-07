<?php

namespace Demo\Models;

use DatabaseConnection;
use \PDO;

class Hotels extends DatabaseConnection{
    private $id;
    private $nome;
    private $localizacao;
    private $preco;
    private $banheira;
    private $varanda;
    private $limpezaDiaria;
    private $arCondicionado;
    private $freezer;
    private $quadraEsportiva;
    private $piscina;
    private $nota;
    private $descricao;

    
    public static function  novoHotel($nome, $localizacao, $descricao, $preco, $banheira, $varanda, $limpezaDiaria, $arCondicionado, $freezer, $quadraEsportiva, $piscina){
        $pdo = self::getPDO();
        $stmt = $pdo->prepare("INSERT INTO hoteis (nome, localizacao, descricao, preco, banheira, varanda, limpezaDiaria, arCondicionado, freezer, quadraEsportiva, piscina) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $localizacao);
        $stmt->bindValue(3, $descricao);
        $stmt->bindValue(4, $preco);
        $stmt->bindValue(5, $banheira);
        $stmt->bindValue(6, $varanda);
        $stmt->bindValue(7, $limpezaDiaria);
        $stmt->bindValue(8, $arCondicionado);
        $stmt->bindValue(9, $freezer);
        $stmt->bindValue(10, $quadraEsportiva);
        $stmt->bindValue(11, $piscina);
        $stmt->execute();
        
        return true;
    }

    public static function avaliacao($banheira = 0, $varanda = 0, $limpezaDiaria = 0, $arCondicionado = 0, $freezer = 0, $quadraEsportiva = 0, $piscina = 0){
            $pdo = self::getPDO();
            $atmt = $pdo->prepare("SELECT * FROM hoteis WHERE banheira = 1 AND varanda = 1 AND limpezaDiaria = 1 AND arCondicionado = 1 AND freezer = 1 AND quadraEsportiva = 1 AND piscina = 1");
            $atmt->execute();
            
            if ($atmt->rowCount() > 0) {

            
                $nota = 5;
            
                while ($row = $atmt->fetch(PDO::FETCH_ASSOC)) {
                    $hotelId = $row['id'];
            
                    $updateStmt = $pdo->prepare("UPDATE hoteis SET nota = :nota WHERE id = :hotelId");
                    $updateStmt->bindValue(':nota', $nota);
                    $updateStmt->bindValue(':hotelId', $hotelId);
                    $updateStmt->execute();
                }
            }

            //nota 4

            $atmt2= $pdo->prepare("SELECT * FROM hoteis WHERE banheira = 1 AND varanda = 1 AND limpezaDiaria = 1 AND arCondicionado = 1 AND freezer = 1 AND quadraEsportiva = 0 AND piscina = 0");
            $atmt2->execute();
               
            if ($atmt2->rowCount() > 0) {

            
                $nota = 4;
            
                while ($row = $atmt2->fetch(PDO::FETCH_ASSOC)) {
                    $hotelId = $row['id'];
            
                    $updateStmt = $pdo->prepare("UPDATE hoteis SET nota = :nota WHERE id = :hotelId");
                    $updateStmt->bindValue(':nota', $nota);
                    $updateStmt->bindValue(':hotelId', $hotelId);
                    $updateStmt->execute();
                }
            }

            //nota 3


            $atmt3= $pdo->prepare("SELECT * FROM hoteis WHERE banheira = 0 AND varanda = 1 AND limpezaDiaria = 1 AND arCondicionado = 1 AND freezer = 1 AND quadraEsportiva = 0 AND piscina = 0");
            $atmt3->execute();
               
            if ($atmt3->rowCount() > 0) {

            
                $nota = 3;
            
                while ($row = $atmt3->fetch(PDO::FETCH_ASSOC)) {
                    $hotelId = $row['id'];
            
                    $updateStmt = $pdo->prepare("UPDATE hoteis SET nota = :nota WHERE id = :hotelId");
                    $updateStmt->bindValue(':nota', $nota);
                    $updateStmt->bindValue(':hotelId', $hotelId);
                    $updateStmt->execute();
                }
            }


            //nota 2
            $atmt4= $pdo->prepare("SELECT * FROM hoteis WHERE banheira = 0 AND varanda = 0 AND limpezaDiaria = 1 AND arCondicionado = 0 AND freezer = 1 AND quadraEsportiva = 0 AND piscina = 0");
            $atmt4->execute();
               
            if ($atmt4->rowCount() > 0) {

            
                $nota = 2;
            
                while ($row = $atmt4->fetch(PDO::FETCH_ASSOC)) {
                    $hotelId = $row['id'];
            
                    $updateStmt = $pdo->prepare("UPDATE hoteis SET nota = :nota WHERE id = :hotelId");
                    $updateStmt->bindValue(':nota', $nota);
                    $updateStmt->bindValue(':hotelId', $hotelId);
                    $updateStmt->execute();
                }
            }


            //nota 1

            $atmt5= $pdo->prepare("SELECT * FROM hoteis WHERE banheira = 0 AND varanda = 0 AND limpezaDiaria = 0 AND arCondicionado = 0 AND freezer = 0 AND quadraEsportiva = 0 AND piscina = 0");
            $atmt5->execute();
               
            if ($atmt5->rowCount() > 0) {

            
                $nota = 1;
            
                while ($row = $atmt5->fetch(PDO::FETCH_ASSOC)) {
                    $hotelId = $row['id'];
            
                    $updateStmt = $pdo->prepare("UPDATE hoteis SET nota = :nota WHERE id = :hotelId");
                    $updateStmt->bindValue(':nota', $nota);
                    $updateStmt->bindValue(':hotelId', $hotelId);
                    $updateStmt->execute();
                }
            }
        }



        public static function getHotels() {
            $pdo = self::getPDO();
            $select = $pdo->prepare("SELECT *, (SELECT COUNT(*) FROM favorites WHERE favorites.hotel_id = hoteis.id) AS num_favorites FROM hoteis ORDER BY num_favorites DESC, nota DESC");
            $select->execute();
        
            $hotels = $select->fetchAll(PDO::FETCH_ASSOC);
            return $hotels;
        }

        public static function getHotelsAdm() {
            $pdo = self::getPDO();
            $select = $pdo->prepare("SELECT *, (SELECT COUNT(*) FROM favorites WHERE favorites.hotel_id = hoteis.id) AS num_favorites FROM hoteis ORDER BY nota DESC");
            $select->execute();
            
            $hotels = $select->fetchAll(PDO::FETCH_ASSOC);
            return $hotels;
        }

        public static function getHotelById($id){
            $pdo = self::getPDO();
            $select = $pdo->prepare("SELECT * from hoteis WHERE id=:id");
            $select->bindValue(':id', $id);
            $select->execute();
            $hotel = $select->fetchAll(PDO::FETCH_ASSOC);
            return $hotel;
        }

        public static function atualizarHotel($nome, $localizacao, $descricao, $preco, $banheira, $varanda, $limpezaDiaria, $arCondicionado, $freezer, $quadraEsportiva, $piscina, $id) {
            $pdo = self::getPDO();
        
            $query = "UPDATE hoteis SET nome = :nome, localizacao = :localizacao, descricao = :descricao, preco = :preco, banheira = :banheira, varanda = :varanda, limpezaDiaria = :limpezaDiaria, arCondicionado = :arCondicionado, freezer = :freezer, quadraEsportiva = :quadraEsportiva, piscina = :piscina WHERE id = :id";
        

            $stmt = $pdo->prepare($query);
        

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':localizacao', $localizacao);
            $stmt->bindValue(':descricao', $descricao);
            $stmt->bindValue(':preco', $preco);
            $stmt->bindValue(':banheira', $banheira);
            $stmt->bindValue(':varanda', $varanda);
            $stmt->bindValue(':limpezaDiaria', $limpezaDiaria);
            $stmt->bindValue(':arCondicionado', $arCondicionado);
            $stmt->bindValue(':freezer', $freezer);
            $stmt->bindValue(':quadraEsportiva', $quadraEsportiva);
            $stmt->bindValue(':piscina', $piscina);
            $stmt->bindValue(':id', $id);
        

            $stmt->execute();
        
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false; 
            }
        }

        public static function deletarHotel($id){
            $pdo = self::getPDO();
            $delete = $pdo->prepare("DELETE from hoteis where id=:id");
            $delete->bindValue(':id', $id);
            $delete->execute();

            if ($delete->rowCount() > 0) {
                return true; 
            } else {
                return false;
            }
        }

        public static function deletarFavorito($id){
            $pdo = self::getPDO();
            $delete = $pdo->prepare("DELETE from favorites where hotel_id=:id");
            $delete->bindValue(':id', $id);
            $delete->execute();

            if ($delete->rowCount() > 0) {
                return true; 
            } else {
                return false;
            }
        }
}
