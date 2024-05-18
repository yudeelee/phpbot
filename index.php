<?php

require_once 'config.php';
require_once 'functions.php';

// $res = json_decode(file_get_contents(BASE_URL . 'getMe'), true);
$res = send_request('getUpdates', [
    'offset' => 6061182 + 1
]);

foreach ($res->result as $update) {
    echo "{$update->update_id} - {$update->message->chat->id} - {$update->message->from->first_name} - {$update->message->text}<br/>";
}

debug($res);