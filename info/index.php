<?php


if ($_SERVER['PHP_SELF'] == '/info/index.php' || '/info')
   info();
    else
        echo 'not valid URL';

/*switch($linkchoice){
    case 'info' :
        newGame();
        break;

    case 'second' :
        newGame();
        break;

    default :
        echo 'no function';
        echo'<br>';
        echo 'lolol'.$linkchoice;
}
*/
function info()
{
    /*echo 'info func has been called'; //debugging
    echo '<br>';
    */
    $omok->size = 15;
    $omok->strategies = ["Smart", "Random"];

    $myJSON = json_encode($omok);

    echo $myJSON;
}
?>