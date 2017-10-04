<?php
include_once 'gameCheck.php';
include_once 'gameBoard.php';

$file = $_GET['pid'];

if( check($file) ){
    //$game = new gameBoard();
    $json = file_get_contents('../data/'.$file.'.txt');
    $game = gameBoard::fromJsonString($json);
/*
    $moves = explode(',', $file);
    $game->board = $values['board'];
    $game->make_a_move($moves[0],$moves[1]);
  */
    $playerMove = $game->makePlayerMove($x,$y);
    if($playerMove->isWin || $playerMove->isDraw){
    unlink($_GET['pid']);
    exit;
    }

    $opponentMove = $game->makeOpponentMove();
    if($opponentMove->isWin || $opponentMove->isDraw){
        unlink($_GET['pid']);
        exit;
    }
    storeState($file, $game->toJsonString();)


}



?>