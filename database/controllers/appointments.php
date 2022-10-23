<?php

    require_once '../models/client.php';
    require_once '../helpers/session-helper.php';

    class Clients {

        private $clientModel;

        public function __construct()
        {
            $this->clientModel = new Client;
        }


        // Register user
        public function register() {
            // Process form


            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'client_name' => trim($_POST['client_name']),
                'client_number' => trim($_POST['client_number']),
                'client_username' => trim($_POST['client_username']),
                'client_email' => trim($_POST['client_email']),
                'client_password' => trim($_POST['client_password']),
                'retype_password' => trim($_POST['retype_password'])
            ];

            // Register client
            if ($this->clientModel->register($data)) {
                redirect("../../views/auth/signin.php");
            }
            else {
                die("Something went wrong");
            }
        }
    }

    $init = new Clients;
    
    // Ensures that user is sending a POST request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        switch($_POST['type']) {
            case 'register': $init->register(); break;
            
        }
    }

?>