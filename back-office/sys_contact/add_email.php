<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["email"])) {
    header("Location: ../contact.php");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_email` SET `email`= :__email WHERE `id`=1 ");
        $stmt->execute(["__email" => $_POST["email"]]);
        $_SESSION["resp_pass"] = "Save email already.";
        header("Location: ../contact.php#email");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
