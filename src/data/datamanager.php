<?php
require './src/database/database.php';

function addcar(string $name, string $model, float $price, string $color) {
    $dbco;
    
    connexion($dbco);
    
    try {
        $query = $dbco->prepare("INSERT INTO car(name, model, price, color)
                VALUES(:name,:model,:price,:color)");
                    
        $query->bindValue(':name',$name);
        $query->bindValue(':model',$model);
        $query->bindValue(':price',$price);
        $query->bindValue(':color',$color);

        $query->execute();
        header('location:http://localhost/formation_php/routeur/?status=success&message=added');

    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function select_all_car() {
    $dbco;
    
    connexion($dbco);

    try {
        $query = $dbco->prepare("SELECT * FROM car");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function select_all_car_sort(string $sort) {
    $dbco;
    
    connexion($dbco);

    try {
        if($sort=='ASC') {
            $query = $dbco->prepare("SELECT * FROM car ORDER BY price ASC");
        } 
        else
        {
            $query = $dbco->prepare("SELECT * FROM car ORDER BY price DESC");
        }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}