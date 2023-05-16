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
            <form action="../app/controller/handler.php" method="post">
                <label for="userName">Nome: </label>
                <input type="text" id="userName" name="userName">
                <button type="submit" name="create" value="user">Criar usuário</button>
            </form>
            ';
        printf("%s", $form);
    }

    /**
     * Create a new form to edit information for users
     * @param array $users - Array of users to display in dropdown
     */
    public function editForm($users)
    {
        $options = '';
        foreach ($users as $user) {
            $options .= '<option value="' . $user['idUsuario'] . '">' . $user['nome'] . '</option>';
        }

        $form =
            '
        <form action="../app/controller/handler.php" method="post">
            <label for="userName">Antigo nome:  </label>
            <select name="allUsers">
                <option value="" selected>Selecione um usuário para editar...</option>
                ' . $options . '
            </select>

            <label for="userName">Novo nome: </label>
            <input type="text" id="userName" name="userName">
            <button type="submit" name="edit" value="user">Editar usuário</button>
        </form>
        ';
        printf("%s", $form);
    }

    /**
     * Create a new form to confirm the deletion of users
     * @return mixed - Prints the HTML code
     */
    public function deleteForm($user)
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