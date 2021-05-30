<?php
$json = file_get_contents('php://input');
$data = json_decode($json);

$file_name = "retorno"; //date("Ymd_His") . "_" . $data->user_id . "_" . $data->data->id;
$file = fopen($filename . '.txt', 'w+');
//ftruncate($file, 0);
fwrite($file , $json);
fclose($file);

http_response_code(200);
exit;