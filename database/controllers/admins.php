<?php

    require_once '../models/admin.php';
    require_once '../helpers/session-helper.php';

    class Admins {

        private $adminModel;

        public function __construct()
        {
            $this->adminModel = new Admin;
        }


        // Register user
        public function register() {
            // Process form


            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'admin_name' => trim($_POST['admin_name']),
                'admin_number' => trim($_POST['admin_number']),
                'admin_username' => trim($_POST['admin_username']),
                'admin_email' => trim($_POST['admin_email']),
                'admin_password' => trim($_POST['admin_password']),
                'retype_password' => trim($_POST['retype_password'])
            ];

            // Validate inputs
            if(empty($data['admin_name']) || empty($data['admin_number']) || empty($data['admin_username']) || empty($data['admin_email']) || empty($data['admin_password']) || empty($data['retype_password'])) {
                flash("register", "Please fill out all inputs");
                redirect("../../views/auth/register.php");
            }

            if (!preg_match("/^[a-zA-Z0-9]*$/", $data['admin_id'])) {
                flash('register', 'Invalid username');
                redirect("../../views/auth/register.php");
            }

            if (!filter_var($data['admin_email'], FILTER_VALIDATE_EMAIL)) {
                flash('register', 'Invalid email');
                redirect("../../views/auth/register.php");
            }

            if (strlen($data['admin_password']) < 6) {
                flash('register', 'Invalid password');
                redirect("../../views/auth/register.php");
            }
            else if ($data['admin_password'] !== $data['retype_password']) {
                flash('register', "Password don't match");
                redirect("../../views/auth/register.php");
            }

            // User with the same email or username already exists
            if ($this->adminModel->findAdminByEmailOrUsername($data['admin_email'], $data['admin_name'])) {
                flash('register', "Username or Email already taken");
                redirect("../../views/auth/register.php");
            }

            // Passed all validation checks
            // Hash password
            $data['admin_password'] = password_hash($data['admin_password'], PASSWORD_DEFAULT);

            // Register admin
            if ($this->adminModel->register($data)) {
                redirect("../../views/auth/signin.php");
            }
            else {
                die("Something went wrong");
            }
        }
    }

    $init = new Admins;
    
    // Ensures that user is sending a POST request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        switch($_POST['type']) {
            case 'register': $init->register(); break;
            
        }
    }

?>