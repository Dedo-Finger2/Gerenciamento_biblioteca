<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelAutoria implements \ICrud
    {
        private $authorID;
        private $bookID;

        /**
         * Creates a new authorship
         * @param array $data - Data that got by POST method from a form
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the authorship's data to the database
         * @return mixed - ID of the new author and book that created a new authorship
         */
        public function save()
        {

        }

        /**
         * Edit an authorship's data
         * @param array $data - New data of the authorship
         * @param int $authorID - ID from the author being edited
         * @param int $bookID - ID from the book that belongs to that author being edited
         */
        public function edit(array $data, int $authorID, int $bookID)
        {

        }

        /**
         * Deletes an authorship from the database
         * @param int $authorID - ID of the author to be deleted
         * @param int $bookID - ID of the book to be deleted
         */
        public function delete(int $authorID, int $bookID)
        {

        }

        /**
         * Gives a list of all authorships within the database
         * @return array $list - An array with all authorships listed
         */
        public function listAll()
        {

        }

    }
