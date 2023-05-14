<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelEditora implements \ICrud
    {
        private $name;
        private $books = array();

        /**
         * Creates a new publisher
         * @param array $data - Data that got by POST method from a form
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the publisher's data to the database
         * @return mixed - ID of the new publisher created
         */
        public function save()
        {

        }

        /**
         * Edit an publisher's data
         * @param array $data - New data of the publisher
         * @param int $id - ID of the publisher being edited
         */
        public function edit(array $data, int $id)
        {

        }

        /**
         * Deletes an publisher from the database
         * @param int $id - ID of the publisher to be deleted
         */
        public function delete(int $id)
        {

        }

        /**
         * Gives a list of all publishers within the database
         * @return array $list - An array with all publishers listed
         */
        public function listAll()
        {

        }

    }
