<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewAutor implements \IView
    {

        /**
         * Create a new form to colect information for new authors
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="" method="post">
                <label for="authorName">Nome: </label>
                <input type="text" id="authorName" name="authorName">
                <button type="submit">Criar autor</button>
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for authors
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of authors
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the author's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
