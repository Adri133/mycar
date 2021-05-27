<?php
require './src/database/database.php';

function addcar($name, $model, $price, $color) {
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