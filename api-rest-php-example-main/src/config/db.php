<?php
    class db{
        // Properties
        private $dbhost = 'https://professionalservice.usbtopia.usbbog.edu.co/';
        private $dbuser = 'dmoreno';
        private $dbpass = 'Davidb100605B';
        private $dbname = 'slimapp';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
