<?php
require_once('../includes/Client.class.php');

// if($_SERVER['REQUEST_METHOD'] == 'DELETE' 
//     && isset($_GET['id']) ){
//         Client::delete_client_by_id($_GET['id']);
//     }

if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = Client::delete_client_by_id($id);

    if ($result['status'] === 'success') {
        http_response_code(200); // OK
        echo json_encode($result);
    } else {
        http_response_code(404); // Not Found or other error code
        echo json_encode($result);
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(['status' => 'error', 'message' => 'ID no proporcionado o método incorrecto']);
}
