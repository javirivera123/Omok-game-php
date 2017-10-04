<?php

class gameBoard {
    var $strategy, $x, $y, $isWin, $isDraw, $size, $row, $board;


    function __construct()
    {
        $this->isWin = false;
        $this->isDraw = false;
        $this->size = 15;
        $this->row = [];

        $this->board = array(                                   //15x15 game board
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
            array('','','','','','','','','','','','','','',''),
        );

        for($i=0; $i<15; $i++){
            for($j=0; $j<15; $j++){
                $this->board[$i][$j] = false;
            }
        }

    }// end construct

    function load(){

    }

    function checkWin(){

    }

    function checkDraw(){

    }

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

    function make_a_move($x,$y){
        if($this->board == null){
            echo json_encode(array('response' => false, 'reason' => 'Move not well formed'));
        }

        if($this->board[$x][$y] == false){
            echo "move is allowable";
            $this->board[$x][$y] = true;
            updateFile();
        }else{
            echo "spot is taken";
        }
    }//end make_a_move

    function updateFile(){
        $json = file_get_contents('../data/'.$_GET['pid'].'.txt');
        $values = json_decode($recovered,true);
        $moves = explode(',', $_GET['move']);
        $game->board = $values['board'];
        $game->make_a_move($moves[0],$moves[1]);

        fwrite($log, json_encode($game));
        fclose($log);
    }

    static function fromJsonString($json){
        $obj = json_decode($json); //instance
        $strategy = $obj->{'strategy'};
        $board = $obj->{'board'};
        $game = new gameBoard();
        $game->board = board::fromJson($board);
        $name = $strategy->{'name'};
        $game->strategy


    }

}// end gameBoard class