<?php
include __DIR__.'/api/api.php';
header('Content-Type:application/json');
json_encode($albums);
?>