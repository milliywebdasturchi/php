<?php

class Test extends Dbh {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['user_firstName'] . '<br>';
        }
    }

    public function getUsersStmt($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE user_firstName = ? AND user_lastName = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['user_birthDay'] . '<br>';
        }
    }

}