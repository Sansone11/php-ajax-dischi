<?php
include __DIR__ .'/api/api.php';
header('Content-Type:application/json');
$data = [
    'success'=>true,
    'resposnse'=>$albums
];

json_encode($data);