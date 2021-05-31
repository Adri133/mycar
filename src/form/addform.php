<?php
require './src/validation/validation.php';
require './src/data/datamanager.php';

if(isset($_POST['name'], $_POST['model'], $_POST['price'], $_POST['color'])) 
{
    if(!empty($_POST['name']) && !empty($_POST['model']) && !empty($_POST['price']) && !empty($_POST['color']))
    {
        $name = valid_data($_POST['name']);
        $model = valid_data($_POST['model']);
        $price = valid_data($_POST['price']);
        $color = valid_data($_POST['color']);

        addcar($name, $model, $price, $color);
        
        // header('location:http://localhost/formation_php/routeur/?status=success');
    }
    else
    {
        header('location:http://localhost/formation_php/routeur/add?status=missing');
    }
}
else
{
    header('location:http://localhost/formation_php/routeur/add&status=invalid');
}