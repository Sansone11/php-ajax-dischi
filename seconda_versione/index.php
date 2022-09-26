<?php
include __DIR__.'/api/api.php';
header('Content-Type:application/json');
echo json_encode($albums);
