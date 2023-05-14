<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerEmprestimo extends \App\Model\ModelEmprestimo
    {
        /**
         * Creates a new Loan
         * @param array $data - Data from a form (POST)
         */
        public function createLoan(array $data)
        {

        }

        /**
         * Edits a Loan's data
         * @param array $data - Data from a form (PSOT)
         * @param int $userID - ID of the user that made the loan
         * @param int $bookID - ID of the book user made loan with
         * @param mixed $startDate - Date user made the loan
         */
        public function editLoan(array $data, int $userID, int $bookID, $startDate)
        {

        }

        /**
         * Deletes a Loan
         * @param int $userID - ID of the user that made the loan
         * @param int $bookID - ID of the book the user borrowed
         * @param mixed $startDate - Date the user made the loan
         */
        public function deleteLoan(int $userID, int $bookID, $startDate)
        {

        }
    }