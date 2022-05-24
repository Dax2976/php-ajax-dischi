<?php
    include __DIR__ . '/data.php';
    header('Access-Control-Allow-Origin: *');
    echo json_encode($data_dischi)
?>