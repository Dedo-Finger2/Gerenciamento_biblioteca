<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelAutor implements \ICrud
    {
        private $name;
        private $code;
        private $books = array();

        /**
         * Creates a new author
         * @param array $data - Data that got by POST method from a form
         * @return mixed - ID of the new author created
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the author's data to the database
         * 
         */
        public function save()
        {

        }

        /**
         * Edit an author's data
         * 
         */
        public function edit()
        {

        }

        /**
         * Deletes an author from the database
         * 
         */
        public function delete()
        {

        }

        /**
         * Gives a list of all authors within the database
         * 
         */
        public function listAll()
        {

        }

    }
