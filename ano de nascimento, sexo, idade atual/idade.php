<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:["Não informado"];
    $ano = isset($_GET["ano"])?$_GET["nome"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:["Não informado"];
    $idade = date("Y") - $ano;
    echo "$nome  e $sexo e tem $idade anos.";
    ?>
    <a href="_idadehtml.html">Voltar</a>
</div>
</body>
</html>
 