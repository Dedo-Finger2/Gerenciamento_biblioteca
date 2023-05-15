<?php

    namespace App\Model;

    class Conn
    {
        private static $connection = null;

        /**
         * Creates a connection to database
         * @return mixed - Connection made
         */
        public static function connect()
        {
            try {
                // Tries to create a connection to database
                self::$connection = new \mysqli("localhost", "root", "", "biblioteca");
                return self::$connection;
            } catch(\mysqli_sql_exception $e) {
                echo "[ERROR]: Failed to connect to database: ". $e->getMessage();
                exit();
            }
        }

    }
