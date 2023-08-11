<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Criada</title>

     <!-- CSS Interno -->
     <style>
        .destaque {color: green;}
        .cores {color: blue;}
    </style>

</head>
<body>

<h1 class="destaque">Trabalhando com PHP</h1>
    <p class="cores">Programadora: Giulia Vasconcelos 1DE</p>
    <hr>

<?php

    echo "Chama Sesi-Senai !";

    echo "<h2> Gerando  <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "<h2> Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";

?>

<h1>HTML e PHP mesclados</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quia delectus repellendus numquam eos in ea distinctio voluptas ipsa! Nulla tempore tenetur voluptate eius, praesentium id possimus exercitationem sequi totam.</p>
    <?php
    $linguagem = "Linguagem PHP.";
    ?>

    <p>Parágrafo mesclando HTML com <?=$linguagem?></p>
    
</body>
</html>