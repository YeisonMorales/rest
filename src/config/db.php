<?php
    class db{
        // Properties
        private $dbhost = 'remotemysql.com';
        private $dbuser = '0l7w0NtMNk';
        private $dbpass = '3C4LyNYGNG';
        private $dbname = '0l7w0NtMNk';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
