<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Calculadora de Raiz</title>

</head>
<body>
<div>
    <?php
    $valor = $_GET["V"];
    $rq = sqrt($valor);
    echo "A raiz de $valor e igual a $rq";

    ?>
</div>

</body>
</html>
