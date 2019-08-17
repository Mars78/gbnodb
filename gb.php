<?php

function save_m(){

    $str = $_POST['name'] . ' - ' . $_POST['text'] . ' - '  . date('Y:m:d H:i:s') . "\n******\n";
    file_put_contents('data.txt', $str, FILE_APPEND);

}
