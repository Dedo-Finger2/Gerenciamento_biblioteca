<?php

    namespace App\Controller;

    require_once("../config/Conn.class.php");

    class ControllerEmprestimo extends \App\Model\ModelEmprestimo
    {
        /**
         * Creates a new Loan
         * @param array $data - Data from a form (POST) [userID], [bookID] and [startDate]
         */
        public function createLoan(array $data)
        {

        }

        /**
         * Edits a Loan's data
         * @param int $userID - ID of the user that made the loan
         * @param int $bookID - ID of the book user made loan with
         * @param mixed $startDate - Date user made the loan
         */
        public function editLoan(int $userID, int $bookID, $startDate)
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
            /**
             * To be able to delete a loan you must know the user who did it, the book he took and when he borrowed that book
             * with all those PK you can delete an loan from the system
             */
        }
    }