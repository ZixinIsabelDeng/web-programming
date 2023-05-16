<?php

//$file = file_get_contents('./Hompage .txt', true);
// Otherwise
$file = file_get_contents('./Hompage .txt', FILE_USE_INCLUDE_PATH);
var_dump($file)

?>