<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCar App</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        $url = $_GET['url'] ?? '';
        
        if($url === '' || $url === 'home') {
            require './src/template/home.php';
        }
        elseif($url == 'add')
        {
            require './src/template/add.php';
        }
        elseif($url == 'addform')
        {
            require './src/form/addform.php';
        }
        else
        {
            require './src/template/404.php';
        }


    ?>
</body>
</html>