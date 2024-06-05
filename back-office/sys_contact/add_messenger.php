<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["messenger_name"]) || !isset($_POST["messenger_link"])) {
    header("Location: ../contact.php#messenger_name");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_messenger` SET `messenger_name`=:__messenger_name,`messenger_link`=:__messenger_link WHERE `id`=1");
        $stmt->execute(["__messenger_name" => $_POST["messenger_name"], "__messenger_link" => $_POST["messenger_link"]]);
        $_SESSION["resp_pass"] = "Save messenger already.";
        header("Location: ../contact.php#messenger_name");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
