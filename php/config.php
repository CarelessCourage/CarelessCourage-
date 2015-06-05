<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=user;port=3306", "root", "");
    var_dump($db);
} catch (exception $e) {
    echo "Could not connect to the database";
    exit;
}

echo "Woo-hoo!";

?>