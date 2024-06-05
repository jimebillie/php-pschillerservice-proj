<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["phone_number1"]) || !isset($_POST["phone_number2"])) {
    header("Location: ../contact.php");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_phone` SET `phone_1`=:p1,`phone_2`=:p2 WHERE id=:id");
        $stmt->execute(["p1"=>$_POST["phone_number1"], "p2"=>$_POST["phone_number2"], "id"=> 1]);
        $_SESSION["resp_pass"] = "Save phone number already.";
        header("Location: ../contact.php");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
