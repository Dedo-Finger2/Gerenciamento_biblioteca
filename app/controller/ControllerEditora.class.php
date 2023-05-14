<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerEditora extends \App\Model\ModelEditora
    {
        /**
         * Creates a new publisher
         * @param array $data - Data from a form (POST)
         */
        public function createPublisher(array $data)
        {

        }

        /**
         * Edits a publisher's data
         * @param array $data - Data from a form (PSOT)
         * @param int $id - ID from publisher being edited
         */
        public function editPublisher(array $data, int $id)
        {

        }

        /**
         * Deletes a publilsher
         * @param int $id - ID from the publisher being deleted
         */
        public function deletePublisher(int $id)
        {

        }
    }