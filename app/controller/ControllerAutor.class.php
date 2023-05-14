<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerAutor extends \App\Model\ModelAutor
    {   
        /**
         * Create a new author
         * @param array $data - Array of data from POST method
         */
        public function createAuthor(array $data)
        {

        }

        /**
         * Deletes an author from database
         * @param int $id - ID of the author
         */
        public function deleteAuthor(int $id)
        {

        }

        /**
         * Edits an author's data
         * @param array $data - Data from form (POST)
         * @param int $id - ID from the author
         */
        public function editAuthor(array $data, int $id)
        {

        }

    }
