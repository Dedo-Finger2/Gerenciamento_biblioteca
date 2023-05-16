<?php

    namespace App\Controller;
    use App\Model\ModelUsuario;
    use App\View\ViewUsuario;

    //require_once("../config/Conn.class.php");

    class ControllerUsuario extends ModelUsuario
    {

        /**
         * Method that sends the data to the view, so it can be seen on user's screen
         */
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
            try {
                // If all inputs are empty throw new exeption
                if (empty($data['userName'])) {
                    
                    throw new \Exception('Please fill all required inputs!');
                }

                // If all inputs has something as value
                if (($data['userName'])) {

                    return $createdUser = (new ModelUsuario())->create($data);
                }
            } catch (\Exception $e) {

                return '[ERROR]: Failed to create new user: '. $e->getMessage();
            }
        }

        /**
         * Edits a User's data
         * @param array $data - Data from a form (PSOT)
         * @param int $id - ID of the User being edited
         */
        public function editUser(array $data, int $userID)
        {
            try {
                // If all inputs are empty throw new exeption
                if (empty($data['allUsers']) || empty($data['userName'])) {
                    
                    throw new \Exception('Please fill all required inputs!');
                }

                // If all inputs has something as value
                if (($data['allUsers']) && ($data['userName'])) {

                    return $editedUser = (new ModelUsuario())->edit($data, $userID);
                }
            } catch (\Exception $e) {

                return '[ERROR]: Failed to update user data: '. $e->getMessage();
            }
        }

        /**
         * Deletes a User
         * @param int $id - ID of the User being deleted
         */
        public function deleteUser(int $userID)
        {
            try {
                // If all inputs are empty throw new exeption
                if (empty($userID)) {
                    
                    throw new \Exception('Please provide a valid ID!');
                }

                // If all inputs has something as value
                if (($userID)) {

                    return $deletedUser = (new ModelUsuario())->delete($userID);
                }
            } catch (\Exception $e) {

                return '[ERROR]: Failed to delete user data: '. $e->getMessage();
            }
        }
    }