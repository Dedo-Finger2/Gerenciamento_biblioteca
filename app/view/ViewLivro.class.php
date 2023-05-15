<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewLivro implements \IView
    {

        /**
         * Create a new form to colect information for new books
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="../app/controller/handler.php" method="post">
                <label for="bookTitle">Título: </label>
                <input required type="text" id="bookTitle" name="bookTitle">
                
                <label for="bookPublicDate">Data de publicação: </label>
                <input required type="date" id="bookPublicDate" name="bookPublicDate">

                <label for="isbnCode">Código ISBN: </label>
                <input required type="password" maxlength="6" minlength="6" id="isbnCode" name="isbnCode">

                <label for="bookPublisher">Editora: </label>
                <select required name="bookPublisher" id="bookPublisher">
                    <option>Selecione uma editora...</option>
                    <!-- Get them from the database and display em here -->
                </select>

                <button type="submit">Criar livro</button>
                <a href="#">Editora não presente na lista?</a> <!-- This will send you to create a new publisher -->
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for books
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of books
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the book's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
