<?php
include_once '../new/index.php';

if(!file_exists('../data/'.$this->pid.'.txt')){
    echo json_encode(array('response'=>false, 'reason'=>'Unknown pid'));
    exit;
}

