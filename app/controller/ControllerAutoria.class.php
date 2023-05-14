<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerAutoria extends \App\Model\ModelAutoria
    {
        /**
         * Creates a new authorship
         * @param array $data - Data from a form (POST)
         */
        public function createauthorship(array $data)
        {

        }

        /**
         * Edits a authorship's data
         * @param array $data - Data from a form (PSOT)
         * @param int $authorID - ID from author
         * @param int $bookID - ID of the book that belongs to the author
         */
        public function editauthorship(array $data, int $authorID, int $bookID)
        {
            /**
             * To be able to update an authorship's data you must need the new data to replace the old one and some iDS
             * authorID and bookID, those iDs make an authorhsip, so in order to update an authorship's data you need to specify what authorship you're editing
             * you can do that by getting those IDs, so the this method will update the data of the authorship that have that authorID and bookID you've passed
             * to the method
             */
        }

        /**
         * Deletes a authorship
         * @param int $authorID - ID from author
         * @param int $bookID - ID of the book that belongs to the author
         */
        public function deleteauthorship(int $authorID, int $bookID)
        {
            /**
             * To being able to delete an authorship you must firstly get all authors and their related books
             * IF the book has only one author, the book will be deleted with the author, otherwise if the book has more than 1 author
             * this method will only delete the author from that book, but the book will still remain in the system.
             * 
             * Book CANNOT stay in the system without an author and an author CANNOT stay in the system without an writen book
             */
        }
    }