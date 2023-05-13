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
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the author's data to the database
         * @return mixed - ID of the new author created
         */
        public function save()
        {

        }

        /**
         * Edit an author's data
         * @param array $data - New data of the author
         */
        public function edit(array $data)
        {

        }

        /**
         * Deletes an author from the database
         * @param int $id - ID of the author to be deleted
         */
        public function delete(int $id)
        {

        }

        /**
         * Gives a list of all authors within the database
         * @return array $list - An array with all authors listed
         */
        public function listAll()
        {

        }

    }
