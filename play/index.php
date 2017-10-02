<?php
include_once 'gameCheck.php';
include_once 'gameBoard.php';

if( check($_GET['pid']) ){
    $game = new gameBoard();
    $recovered = file_get_contents('../data/'.$_GET['pid'].'.txt');
    $game = json_decode($recovered,true);
    $moves = explode(',', $_GET['move']);
    print_r($moves);
    //$game->make_a_move($moves[0],$moves[1]);
}



?>