<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerUsuario extends \App\Model\ModelUsuario
    {
        /**
         * Creates a new User
         * @param array $data - Data from a form (POST)
         */
        public function createUser(array $data)
        {

        }

        /**
         * Edits a User's data
         * @param array $data - Data from a form (PSOT)
         * @param int $id - ID of the User being edited
         */
        public function editUser(array $data, int $id)
        {

        }

        /**
         * Deletes a User
         * @param int $id - ID of the User being deleted
         */
        public function deleteUser(int $id)
        {

        }
    }