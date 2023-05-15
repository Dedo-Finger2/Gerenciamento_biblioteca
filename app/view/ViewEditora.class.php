<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewEditora implements \IView
    {

        /**
         * Create a new form to colect information for new publishers
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="" method="post">
                <label for="publisherName">Nome: </label>
                <input type="text" id="publisherName" name="publisherName">
                <button type="submit">Criar editora</button>
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for publishers
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of publishers
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the publisher's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
