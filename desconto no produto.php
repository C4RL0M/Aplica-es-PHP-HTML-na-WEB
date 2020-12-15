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

    $preco -= $preco + ($preco*10/100);
    echo "</br>O desconto dado no preço final é de 10% de desconto, o valor do desconto será R$ " . number_format($preco, 2);




    ?>
</div>
</body>
</html>