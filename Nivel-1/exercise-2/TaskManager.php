<?php
class UserLogger {
    private $username;
    private $createdAt;

    public function __construct($username) {
        $this->username = $username;
        $this->createdAt = date('Y-m-d H:i:s');

        echo "<strong>class created in: </strong>" . __FILE__ . "<br>";
        echo "<strong>Line number is: </strong>" . __LINE__ . "<br>";
        echo "<strong>class name: </strong>" . __CLASS__ ;
    }

    public function __toString() {
        return "<strong>user: </strong> {$this->username},  <strong>created in: </strong>{$this->createdAt}";
    }


    public function getUserInfo() {
        return "<strong>if you are interested to know what method it is: </strong>" . __METHOD__ . "<br>";
    }
}

$user = new UserLogger("Inbi");

echo "<br>";

echo $user->getUserInfo() . "<br>";

echo "<strong>Wanna know the folder name? here you go: </strong>" . __DIR__ . "<br>";

echo "<strong>Are you lost? No worry we are on line: </strong>" . __LINE__ . "<br>";

echo $user . "<br>";

?>