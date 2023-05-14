<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelEmprestimo implements \ICrud
    {
        private $userID;
        private $bookID;
        private $startDate;
        private $expectedReturnDate;
        private $returnDate;
        

        /**
         * Creates a new loan
         * @param array $data - Data that got by POST method from a form
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the loan's data to the database
         * @return mixed - ID of the new loan created
         */
        public function save()
        {

        }

        /**
         * Edit an loan's data
         * @param array $data - New data of the loan
         * @param int $userID - ID of the user that made the loan
         * @param int $bookID - ID of the book user made loan with
         * @param mixed $startDate - Date user made the loan
         */
        public function edit(array $data, int $userID, int $bookID, $startDate)
        {

        }

        /**
         * Deletes an loan from the database
         * @param int $userID - ID of the user that made the loan
         * @param int $bookID - ID of the book the user borrowed
         * @param mixed $startDate - Date the user made the loan
         */
        public function delete(int $userID, int $bookID, $startDate)
        {

        }

        /**
         * Gives a list of all loans within the database
         * @return array $list - An array with all loans listed
         */
        public function listAll()
        {

        }

    }
