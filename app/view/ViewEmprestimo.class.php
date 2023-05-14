<?php 

    namespace App\View;

    require_once("IView.interface.php");

    class ViewEmprestimo implements \IView
    {

        /**
         * Create a new form to colect information for new loans
         * @return mixed - Prints the HTML code
         */
        public function createForm()
        {
            $form = 
            '
            <form action="../app/controller/handler.php" method="post">
                <label for="loanUser">Usuário: </label>
                <input required type="text" name="loanUser" id="loanUser">
                OU
                <select name="loanUser" id="loanUser">
                    <option value="">Selecione um usuário...</option>
                    <!-- Display all users saved in the database here as options -->
                </select>

                <label for="loanBook">Livro: </label>
                <input required type="text" name="loanBook" id="loanBook">
                OU
                <select name="loanBook" id="loanBook">
                    <option value="">Selecione um livro...</option>
                    <!-- Display all books saved in the database here as options -->
                </select>

                <label for="loanStartDate">Data do emprestmo: </label>
                <input required type="date" name="loanStartDate" id="loanStartDate">

                <label for="loanReturnDatePrevision">Previsão de devolução: </label>
                <input required type="date" name="loanReturnDatePrevision" id="loanReturnDatePrevision">

                <label for="loanReturnDate">Data da devolução: </label>
                <input required disabled type="date" name="loanReturnDate" id="loanReturnDate">

                <button type="submit">Criar emprestimo</button>
            </form>
            ';
            printf("%s", $form);
        }

        /**
         * Create a new form to edit information for loans
         * @return mixed - Prints the HTML code
         */
        public function editForm()
        {

        }

        /**
         * Create a new form to confirm the deletion of loans
         * @return mixed - Prints the HTML code
         */
        public function deleteForm()
        {

        }

        /**
         * Create a table that shows all the loan's data
         * @return mixed - Prints the HTML code
         */
        public function showResults()
        {

        }
    }
