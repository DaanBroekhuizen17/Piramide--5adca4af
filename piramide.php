<?php

$blok = "*";
    echo("hoeveel rijen wilt u hebben");
    $aantal = readline();

    for ($i = 0; $i < $aantal; $i ++){
        echo($blok)."\n";
        $blok.="*"; 
        // Echo een aantal sterretjes
    }

?>