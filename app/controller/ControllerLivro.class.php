<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerLivro extends \App\Model\ModelLivro
    {
        /**
         * Creates a new Book
         * @param array $data - Data from a form (POST) [publicDate] [isbnCode] [title] [authorsID]
         */
        public function createBook(array $data)
        {

        }

        /**
         * Edits a Book's data
         * @param array $data - Data from a form (POST) [publicDate] [isbnCode] [title]
         * @param int $bookID - ID of the book being edited
         * @param int $authorID - ID of the author of that book
         */
        public function editBook(array $data, int $bookID, int $authorID)
        {
            /**
             * To able to update a book's data in the system you need to check if theres any loan on it's ID
             * IF there is a loan happening with the book then you CANNOT edit it's data until the book is back to the library, otherwise if there is not
             * a loan happening with the book then you can edit it's data using the params in this method, but only if youre not changing it's author
             * 
             * IF you are changing it's author, then you must also update the authorship related to this book, there is a method to do that tho
             */
        }

        /**
         * Deletes a book
         * @param int $bookOD - ID of the book being deleted
         * @param int $authorID - ID of the author being deleted
         */
        public function deleteBook(int $bookID, int $authorID)
        {
            /**
             * In order to delete a book from the system you need to check if the book 1 or more authors
             * IF the book has only one author and the book being deleted is the only book writen by that author, the author will be deleted as well
             * otherwise IF the author of the book being deleted has more books, only this book will be deleted.
             * 
             * With the book deleted you must now make sure to update the authorship data of all the authors that participated on writing that book that got deleted
             * if the book was writen by only one author and the author only own that book being deleted, then you can also delete the authorship.
             * 
             * The book cannot be deleted if there's a Loan using it's ID, if there's not a loan happening with that book then you can proceed to delete it
             */
        }
    }