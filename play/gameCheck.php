<?php

function check($pid)
{
    if (!file_exists('../data/' . $pid . '.txt')) {
        echo json_encode(array('response' => false, 'reason' => 'Unknown pid'));
        exit;
    }
    return true;
}