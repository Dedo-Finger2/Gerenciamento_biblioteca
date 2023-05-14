<?php

namespace App\Model;

$autoloadPath = "../autoload.php";

if (!file_exists($autoloadPath)) {
    $autoloadPath = "../../autoload.php";
}

require_once($autoloadPath);


class ModelUsuario
{
    private $name;
    private $connection;


    public function __construct()
    {
        $this->connection = (new Conn())::connect();
    }

    /**
     * Creates a new user
     * @param array $data - Data that got by POST method from a form
     */
    public function create(array $data)
    {
        // Verifying if the connection is a mysqli objetct
        if (get_class($this->connection) == "mysqli") {

            // Gets the name from POST form
            $userName = $data['userName'];

            // Prepare to inset the userNmae into database
            $createUser = $this->connection->prepare("INSERT INTO usuario (nome) VALUES (?)");
            $createUser->bind_param("s", $userName);

            // Tries to execute the operation
            try {
                $createUser->execute();

                // Gets the new user ID
                $id = \mysqli_insert_id($this->connection);

                // Registering the action on LOG [SOON]

                return $id;
            } catch (\Exception $e) {
                // Registering the error on LOG [SOON]
                $errorMsg = "[ERROR]: Failed on creating a new user: " . $e->getMessage();

                echo "<div class='erroMsg'>$errorMsg</div>";
            }
        }
    }

    /**
     * Edit an user's data
     * @param array $data - New data of the user
     * @param int $id - ID of the user being edited
     */
    public function edit(array $data, int $id)
    {
        if (get_class($this->connection) == "mysqli") {

            $userName = $data['userName'];

            $editedUser = $this->connection->prepare("UPDATE usuario SET nome = ? WHERE idUsuario = ?");
            $editedUser->bind_param("si", $userName, $id);

            try {
                $editedUser->execute();

                // Registering in log files [SOON]

                return $id;
            } catch (\Exception $e) {
                // Registering the error in log files [SOON]
                $errorMsg = "[ERROR]: Failed on editing a new user: " . $e->getMessage();

                echo "<div class='erroMsg'>$errorMsg</div>"; 
            }
        }
    }

    /**
     * Deletes an user from the database
     * @param int $id - ID of the user to be deleted
     */
    public function delete(int $id)
    {

    }

    /**
     * Gives a list of all users within the database
     * @return array $list - An array with all users listed
     */
    public function listAll()
    {
        if (get_class($this->connection) == "mysqli") {
            $sql = "SELECT * FROM usuario";
            try {
                $stmt = $this->connection->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                $rows = array();
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            } catch (\Exception $e) {
                throw new \Exception("Failed to select users: " . $e->getMessage());
            }
        }
    }


}