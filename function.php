<?php 
function getDischi () {
    $dischi = file_get_contents('./dischi.json');
    return json_decode($dischi, true);
}

?>