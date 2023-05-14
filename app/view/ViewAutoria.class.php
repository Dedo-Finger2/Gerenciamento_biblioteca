<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewAutoria implements \IView
    {

        /**
         * Create a new form to colect information for new authorships
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="../app/controller/handler.php" method="post">
                <label for="authorshipBook">Livro: </label>
                <input type="text" name="authorshipBook" id="authorshipBook">
                OU
                <select name="authorshipBook" id="authorshipBook">
                    <option value="">Selecione um livro...</option>
                    <!--Put in here all authors whithin the database-->
                </select>

                <label for="authorshipAuthor">Autor: </label>
                <input type="text" name="authorshipAuthor" id="authorshipAuthor">
                OU
                <select name="authorshipAuthor" id="authorshipAuthor">
                    <option value="">Selecione um autor...</option>
                    <!--Put in here all authors whithin the database-->
                </select>

                <button type="submit">Criar autoria</button>
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for authorships
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of authorships
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the authorship's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
