<?php

    $nome = "Yago";
    $sobrenome = "Figueredo";
?>

<form action="">
    <div>
        <input type="text" value="<? echo $nome ?>">
    </div>

    
    <div>
        <input type="text" value="<?= $sobrenome ?>">
    </div>

    <div>
        <input type="submit" value="Enviar";> 
    </div>
</form>
