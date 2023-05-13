<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelLoan implements \ICrud
    {
        private $name;
        private $code;

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
         * @param int $id - ID of the loan being edited
         */
        public function edit(array $data, int $id)
        {

        }

        /**
         * Deletes an loan from the database
         * @param int $id - ID of the loan to be deleted
         */
        public function delete(int $id)
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
