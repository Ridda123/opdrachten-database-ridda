<?php
class Database {

    public function deleteData($table, $condition) {

        $sql = "DELETE FROM $table WHERE $condition";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

$host = "localhost";
$dbname = "opdracht";
$username = "Root";
$password = "Voetballer11!";

$database = new Database($host, $dbname, $username, $password);

$table = "Database";
$deleteCondition = "id = 1";

$database->deleteData($table, $deleteCondition);
?>