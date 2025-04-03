<?php
    require_once('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $result = Client::get_all_clients();

        echo $result;
        }

?>