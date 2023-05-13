<?php

    namespace App\Model;

    require_once("../config/Conn.class.php");

    class ModelUser implements \ICrud
    {
        private $name;
        private $code;

        /**
         * Creates a new user
         * @param array $data - Data that got by POST method from a form
         */
        public function create(array $data)
        {

        }

        /**
         * Saves the user's data to the database
         * @return mixed - ID of the new user created
         */
        public function save()
        {

        }

        /**
         * Edit an user's data
         * @param array $data - New data of the user
         * @param int $id - ID of the user being edited
         */
        public function edit(array $data, int $id)
        {

        }

        /**
         * Deletes an user from the database
         * @param int $id - ID of the user to be deleted
         */
        public function delete(int $id)
        {

        }

        /**
         * Gives a list of all users within the database
         * @return array $list - An array with all users listed
         */
        public function listAll()
        {

        }

    }
