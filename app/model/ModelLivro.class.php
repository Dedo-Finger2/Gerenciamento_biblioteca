<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelLivro
    {
        private $tittle;
        private $publicDate;
        private $isbnCode;
        private $publisherID;
        private $authorID;

        /**
         * Creates a new book
         * @param array $data - Data that got by POST method from a form
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the book's data to the database
         * @return mixed - ID of the new book created
         */
        public function save()
        {

        }

        /**
         * Edit an book's data
         * @param array $data - New data of the book
         * @param int $id - ID fo the book being edited
         */
        public function edit(array $data, int $id)
        {

        }

        /**
         * Deletes an book from the database
         * @param int $id - ID of the book to be deleted
         */
        public function delete(int $id)
        {

        }

        /**
         * A method to list all books by their author
         * @param int $authorID - ID of the author related to the book
         * @return array - List of all books that are related to the author
         */
        public function getBookByAuthor(int $authorID)
        {

        }

        /**
         * Gives a list of all books within the database
         * @return array $list - An array with all books listed
         */
        public function listAll()
        {

        }

    }
