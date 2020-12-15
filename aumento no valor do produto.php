<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto e R$ " . number_format($preco, 2);

    $preco = $preco + ($preco*10/100);
    echo "</br>O preço com 10% de aumento no produto será R$ " . number_format($preco, 2);
    



    ?>
</div>
</body>
</html>