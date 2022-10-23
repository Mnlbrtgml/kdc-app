<?php

    class Database {
        // Database information
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $dbname = "kdc_database";

        // PDO Object
        private $dbh;
        private $stmt;
        private $error;

        public function __construct()
        {
            // Set DSN (Data Source Name)
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            $options = array(
                // Check for existing PDO
                PDO::ATTR_PERSISTENT => true,

                // Handling errors for PDO
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // Create PDO instance
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            }
            catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        // Prepare statement with query
        public function query($sql) {
            $this->stmt = $this->dbh->prepare($sql);
        }

        // Bind values to prepared statement
        public function bind($param, $value, $type = null) {
            if (is_null($type)) {
                switch(true) {
                    case is_int($value): $type = PDO::PARAM_INT; break;
                    case is_bool($value): $type = PDO::PARAM_BOOL; break;
                    case is_null($value): $type = PDO::PARAM_NULL; break;
                    default: $type = PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }

        // Execute the prepared statement
        public function execute() {
            return $this->stmt->execute();
        }

        // Return multiple records
        public function resultSet() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        // Return single record
        public function single() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        // Get row count
        public function rowCount() {
            return $this->stmt->rowCount();
        }
    }
    
?>