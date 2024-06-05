<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["address"])) {
    header("Location: ../contact.php#address");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_address` SET `address`= :__address WHERE `id`=1 ");
        $stmt->execute(["__address" => $_POST["address"]]);
        $_SESSION["resp_pass"] = "Save address already.";
        header("Location: ../contact.php#address");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
