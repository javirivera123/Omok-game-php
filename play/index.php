<?php
include 'gameCheck.php';

function WSresponse()
{
    $game = ["response" => $myJson->response,
        "ack_move" => [
            "x" => $_GET['move'],
            "y" => $_GET['move'],
            "isWin" => checkWin(),   // winning move?
            "isDraw" => checkDraw(),  // draw?
            "row" => []],       // winning row if isWin is true
        "move" => [
            "x" => 4,
            "y" => 6,
            "isWin" => checkWin(),
            "isDraw" => checkDraw(),
            "row" => []]];

}

function checkWin(){

}

function checkDraw(){

}



?>