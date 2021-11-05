<?php

class UsersView extends Users {
    public function showUsers($name) {
        $results = $this->getUser($name);
        echo "Fullname: " . $results[0]['user_firstName'] . " " . $results[0]['user_lastName'] . "<br>";
        echo "Day of birth: " . $results[0]['user_birthDay'];
    }
}