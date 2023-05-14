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
         * @param int $authorID - ID of the author
         * @param array $books - An associative array like this: [bookID] => "bookTitle"
         */
        public function deleteAuthor(int $authorID, array $books)
        {
            /**
             * In order to delete an author you must firstly check if there's any book writen by that author
             * the system will not allow a book without an author to be there floating on void.
             * 
             * IF any of the books has more than 1 author (the one being deleted), then you can just delete the author you want to, using his ID. Otherwise
             * IF the book has only the author you're trying to delete, then you must delete both author and all the books he writen (only the books that he writen all alone)
             * 
             * Remember to update the authorship after deleting an author, in this case you must delete the author from the authorship, if the author being deleted has only one book
             * and the book has only one author (the one being deleted), then you need to delete the authorship aswell
             */
        }

        /**
         * Edits an author's data
         * @param array $data - Data from form (POST) array [bookID]=>[bookTitle], [name]
         * @param int $authorID- ID from the author
         */
        public function editAuthor(array $data, int $authorID)
        {
            /**
             * In order to eidt an author's data you must provide the new data and the ID of the author being edited
             * Any changes made to the author will affect the system, e.g. the authorship, it must be edited as well
             */
        }

    }
