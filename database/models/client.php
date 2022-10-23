<?php

    require_once '../class/database.php';

    class Client {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // Find user by email or username
        public function findClientByEmailOrUsername($email, $username) {
            $this->db->query('SELECT * FROM user_client WHERE client_id = :username OR client_email = :email');
            $this->db->bind(':username', $username);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            // Check row
            if ($this->db->rowCount() > 0) {
                return $row;
            }
            else {
                return false;
            }
        }

        // Register client
        public function register($data) {
            $this->db->query('INSERT INTO user_client (client_name, client_number, client_username, client_email, client_password)
            VALUES (:name, :number, :id, :email, :password)');

            // Bind values
            $this->db->bind(':name', $data['client_name']);
            $this->db->bind(':number', $data['client_number']);
            $this->db->bind(':id', $data['client_username']);
            $this->db->bind(':email', $data['client_email']);
            $this->db->bind(':password', $data['client_password']);

            // Execute
            if ($this->db->execute()) {
                return true;
            }
            else {
                return false;
            }
        }
    }

?>