<?php
    echo '------ INCLUSÃO DE CODIGO (INCLUDE) --------- <br>';
    // INSERIR ARQUIVOS PRONTOS, REAPROVEITAR CODIGO
    echo "<br>";

    include "teste.php";

?>

<p> Após o include </p>
<p> Imprimindo de outra pagina <?php echo $c ?> </p> <br>


<p> -------TESTE--------</p>
<?php

    include_once "teste2.php";
    include_once "teste2.php";
    //arquivo que nao  existe
    require_once "teste3.php";
    
?>






























