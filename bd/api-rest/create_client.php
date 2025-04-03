<?php
// require_once('../includes/Client.class.php');

// if($_SERVER['REQUEST_METHOD'] == 'POST' 
//     && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['city'])  && isset($_GET['telephone'])){
//         Client::create_client($_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']);
//     }

require_once('../includes/Client.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el JSON enviado desde JavaScript
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true); // Decodificar el JSON a un array asociativo

    if (isset($data['email']) && isset($data['name']) && isset($data['city']) && isset($data['telephone'])) {
        // Acceder a los datos
        $email = $data['email'];
        $name = $data['name'];
        $city = $data['city'];
        $telephone = $data['telephone'];

        // Llamar a tu función Client::create_client()
        $result = Client::create_client($email, $name, $city, $telephone);

        // Enviar una respuesta al cliente
        echo $result;
    } else {
        // Manejar el caso en que faltan datos
        http_response_code(400); // Bad Request
        echo "Faltan datos requeridos.";
    }
} else {
    // Manejar el caso en que la solicitud no es POST
    http_response_code(405); // Method Not Allowed
    echo "Método no permitido.";
}
