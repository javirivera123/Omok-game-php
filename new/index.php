<?php


if(function_exists($_GET['strategy']))
    $_GET['strategy']();

    else if(!isset($_GET['strategy'])) {  // if no strategy is received
        $omok->response = false;
        $omok->reason = "Strategy not specified";

        $myJSON = json_encode($omok);

        echo $myJSON;
    }        else{                          // if strategy is not known
                $omok->response = false;
                $omok->reason = "Unknown strategy";

                 $myJSON = json_encode($omok);

                echo $myJSON;
            }

function Random(){

    $omok->response = true;
    $omok->pid = uniqid();

    $myJSON = json_encode($omok);
    echo $myJSON;

    $serialized = serialize($myJSON); //saving for play
    $session = new Session();
    $session->add("myJson", $serialized);

}

function Smart(){

    $omok->response = true;
    $omok->pid = uniqid();

    $myJSON = json_encode($omok);
    echo $myJSON;

    $serialized = serialize($myJSON); //saving for play
    $session = new Session();
    $session->add("myJson", $serialized);

}
?>