<?php

abstract class moveStrategy{
    var $board;

    function __construct(board $board = null)
    {
        $this->board=$board;
    }

    abstract function pickPlace();

    function toJson(){
        return array('name'=> get_class($this));
    }

    static function fromJson($obj){
        $strategy = new self();
        return $strategy;
    }
}