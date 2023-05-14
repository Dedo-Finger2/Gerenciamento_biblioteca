<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerLivro extends \App\Model\ModelLivro
    {
        /**
         * Creates a new Book
         * @param array $data - Data from a form (POST)
         */
        public function createBook(array $data)
        {

        }

        /**
         * Edits a Book's data
         * @param array $data - Data from a form (PSOT)
         * @param int $id - ID of the book being edited
         */
        public function editBook(array $data, int $id)
        {

        }

        /**
         * Deletes a book
         * @param int $id - ID of the book being deleted
         */
        public function deleteBook(int $id)
        {

        }
    }