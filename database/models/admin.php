<?php

    require_once '../class/database.php';

    class Admin {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // Find user by email or username
        public function findAdminByEmailOrUsername($email, $username) {
            $this->db->query('SELECT * FROM user_admin WHERE admin_id = :username OR admin_email = :email');
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

        // Register admin
        public function register($data) {
            $this->db->query('INSERT INTO user_admin (admin_name, admin_number, admin_username, admin_email, admin_password)
            VALUES (:name, :number, :id, :email, :password)');

            // Bind values
            $this->db->bind(':name', $data['admin_name']);
            $this->db->bind(':number', $data['admin_number']);
            $this->db->bind(':id', $data['admin_username']);
            $this->db->bind(':email', $data['admin_email']);
            $this->db->bind(':password', $data['admin_password']);

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