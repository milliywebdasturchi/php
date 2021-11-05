<?php

class Users extends Dbh {
    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE user_firstName = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users (user_firstName, user_lastName, user_birthDay) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    }
}