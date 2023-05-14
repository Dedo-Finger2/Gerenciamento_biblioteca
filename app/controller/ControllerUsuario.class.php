<?php

    namespace App\Controller;
    use App\Model\ModelUsuario;
    use App\View\ViewUsuario;

    //require_once("../config/Conn.class.php");

    class ControllerUsuario extends ModelUsuario
    {

        public function editForm()
        {
            $users = (new ModelUsuario())->listAll();

            $view = (new ViewUsuario())->editForm($users);

        }

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
        public function editUser(array $data, int $userID)
        {

        }

        /**
         * Deletes a User
         * @param int $id - ID of the User being deleted
         */
        public function deleteUser(int $userID)
        {

        }
    }