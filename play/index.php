<?php
require_once __ROOT__.'/new/index.php';


/*
class ackMove
{
    public $x, $y, $isWin, $isDraw;
    public $row = array();

}

class move
{
    public $x, $y, $isWin, $isDraw;
    public $row = array();

}
*/

$game = ["response"=> $myJson->response,
             "ack_move"=> [
                 "x"=> $_GET['move'],
                 "y"=> $_GET['move'],
                 "isWin"=> checkWin(),   // winning move?
                 "isDraw"=> checkDraw(),  // draw?
                 "row"=> []],       // winning row if isWin is true
        "move"=> [
            "x"=> 4,
            "y"=> 6,
            "isWin"=> checkWin(),
            "isDraw"=> checkDraw(),
            "row"=> []]];


$session = new Session();
$serialized = $session->get("myJson");

$myJson = unserialize($serialized);



function checkWin(){

}

function checkDraw(){

}


?>