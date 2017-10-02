<?php

class omokInstance{
    var $pid, $strategy, $playerxy, $computerxy;

    function __construct($strategy)
    {
        $this->pid=uniqid();
        $this->strategy=$strategy;
        $this->computerxy=[];
        $this->playerxy=[];
    }
}//end omokInstance class

if(function_exists($_GET['strategy']))
    $_GET['strategy']();

    else if(!isset($_GET['strategy'])) { // if no strategy is received
        echo json_encode(array('response' => false, 'reason' => 'Strategy not specified'));
        exit;
    }
            else { // if strategy is not known
                echo json_encode(array('response' => false, 'reason' => 'Unknown strategy'));
                exit;
            }


function Random(){
    $game = new omokInstance('Random');

    echo json_encode(array('response'=>true, 'pid'=>$game->pid));
    saveState($game);
}//end Random

function Smart(){
    $game = new omokInstance('Smart');

    echo json_encode(array('response'=>true, 'pid'=>$game->pid));
    saveState($game);
}//end Smart

function saveState($game){

    $log = fopen('../data/'.$game->pid.'.txt', 'a'); //create log file and get ready to append
    fwrite($log, json_encode($game));
    fclose($log);

}
?>