<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="tabuada.php" method="post">
        <h1>Escolha um número</h1>
       <input type="text" name="numTab">
    </form>
    <?php 
    
    if(isset($_POST["numTab"])){
        $numero = $_POST["numTab"];

        for($i=0; $i<=10; $i++){
            $produto = $numero * $i;
            echo "<p>{$numero} X {$i} = {$produto}</p>";
        }
    }
    
    ?>
</body>
</html>