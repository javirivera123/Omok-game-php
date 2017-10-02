<?php

if ($_SERVER['PHP_SELF'] == '/info/index.php' || '/info')
   info();
    else
        echo 'not valid URL';

function info()
{
    $omok->size = 15;
    $omok->strategies = ["Smart", "Random"];

    $myJSON = json_encode($omok);

    echo $myJSON;
}
?>