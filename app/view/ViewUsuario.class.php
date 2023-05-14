<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewUsuario implements \IView
    {

        /**
         * Create a new form to colect information for new users
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="" method="post">
                <label for="userName">Nome: </label>
                <input type="text" id="userName" name="userName">
                <button type="submit">Criar usuário</button>
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for users
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of users
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the user's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
