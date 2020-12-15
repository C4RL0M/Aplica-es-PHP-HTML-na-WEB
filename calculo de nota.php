<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title> SOMADOR </title>
</head>
<body>
<div>
    <?php
    $a1 = $_GET["g1"];
    $a2 = $_GET["g1"];
    $b1 = $_GET["g2"];
    $b2 = $_GET["g2"];

    $g1 = 0.4*a1+0.6*a2;
    $g2 = 0.4*b1+0.6*b2;

    $m = 3 / [($a1+$a2)+2*($g1+$g2)]

    echo "A media entra $a1+$a2 e $b1+$b2 é $m";

    ?>
</div>
</body>
</html>