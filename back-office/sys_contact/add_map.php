<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["map"])) {
    header("Location: ../contact.php#map");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_map` SET `map`= :__map WHERE `id`=1 ");
        $stmt->execute(["__map" => $_POST["map"]]);
        $_SESSION["resp_pass"] = "Save map already.";
        header("Location: ../contact.php#map");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
