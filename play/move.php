<?php
class move{ //encodes responses of the play API

    function __construct(){
    }


    $playerMove = makePlayerMove($x,$y); // instance of move

    if($playerMove->isWin || $playerMove->isDraw){
        echo createResponse($playerMove);
        exit;
    }

    $opponentMove = makeOpponentMove(); //instance
    echo createResponse($playerMove, $opponentMove);

    function createResponse($playerMove, $opponentMove = null){
        $result = array("response"=>true, "ack_move" =>$playerMove);

        if($opponentMove != null){
            $result["move"] = $opponentMove;
        }

        return json_encode($result);
    }
}