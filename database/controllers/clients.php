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

            // Validate inputs
            if(empty($data['client_name']) || empty($data['client_number']) || empty($data['client_username']) || empty($data['client_email']) || empty($data['client_password']) || empty($data['retype_password'])) {
                flash("register", "Please fill out all inputs");
                redirect("../../views/auth/register.php");
            }

            if (!preg_match("/^[a-zA-Z0-9]*$/", $data['client_id'])) {
                flash('register', 'Invalid username');
                redirect("../../views/auth/register.php");
            }

            if (!filter_var($data['client_email'], FILTER_VALIDATE_EMAIL)) {
                flash('register', 'Invalid email');
                redirect("../../views/auth/register.php");
            }

            if (strlen($data['client_password']) < 6) {
                flash('register', 'Invalid password');
                redirect("../../views/auth/register.php");
            }
            else if ($data['client_password'] !== $data['retype_password']) {
                flash('register', "Password don't match");
                redirect("../../views/auth/register.php");
            }

            // User with the same email or username already exists
            if ($this->clientModel->findClientByEmailOrUsername($data['client_email'], $data['client_name'])) {
                flash('register', "Username or Email already taken");
                redirect("../../views/auth/register.php");
            }

            // Passed all validation checks
            // Hash password
            $data['client_password'] = password_hash($data['client_password'], PASSWORD_DEFAULT);

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