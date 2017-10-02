<?php

class gameBoard {
    var $x, $y, $isWin, $isDraw, $size, $row, $board;


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

    }// end construct

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


}

}// end gameBoard class