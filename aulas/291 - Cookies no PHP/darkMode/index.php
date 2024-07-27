<?php 

$theme = !empty($_COOKIE['theme'])? $_COOKIE['theme'] : 'lightmode';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lightmode{
            background-color: #fff;
            color: #000;
        }
        .darkmode{
            background-color: #000;
            color: #fff;
        }
        a {
            color: red;
        }
    </style>
</head>
<body class="<?= $theme ?>">
    <a href="lightMode.php">Light Mode</a>
    <span> | </span>
    <a href="darkMode.php">Dark Mode</a>

    <h1 class="<?= $theme ?>">Exemplo de cookie com tema</h1>
    <p class="<?= $theme ?>">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis voluptatum voluptates vero labore eligendi repellat tempora suscipit voluptatibus, non aliquam fuga ipsa quas ab magni eum earum nesciunt eius velit!
    Enim nesciunt a eveniet quae ullam molestiae quibusdam magnam, ut eos quis fugit distinctio, repudiandae pariatur odit magni sunt quas ad tempora at aut molestias blanditiis? Aut doloribus illum libero.</p>
</body>
</html>