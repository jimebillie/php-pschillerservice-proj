<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_FILES["slide"]) && !isset($_FILES["slide-mobile"])) {
    $_SESSION["resp_err"] = "Something went wrong.";
    header("Location: ../dashboard.php");
    exit;
} else {
    $file = $_FILES["slide"];
    $file2 = $_FILES["slide-mobile"];

    /**
     * Check if the file is a valid image
     */

    $type_file = explode("/", $file["type"]);
    $type_file2 = explode("/", $file2["type"]);
    if ($type_file[0] !== "image" || $type_file2[0] !== "image") {
        // Invalid image
        $_SESSION["resp_warn"] = "Some file is not an image, Please new upload again.";
        header("Location: ../dashboard.php");
        exit;
    } else {
        // Valid image

        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $file_extension2 = "." . explode(".", $file2["name"])[count(explode(".", $file2["name"])) - 1];
        $newName = date("YmdHis") . "-sldie" . $file_extension;
        $newName2 = date("YmdHis") . "-sldie-mobile" . $file_extension2;
        /**
         * Move file upload
         */
        try {
            move_uploaded_file($file["tmp_name"], "../images/slide_home/" . $newName);
            move_uploaded_file($file2["tmp_name"], "../images/slide_home/" . $newName2);
        } catch (Exception $e) {
            echo $e;
        }
        /**
         * Insert to DB
         */
        try {
            $stmt = $db->conn->prepare("INSERT INTO `slide_home`(`img`, `img_mobile`) VALUES (:img_name, :img_mobile_name)");
            $stmt->execute(["img_name" => $newName, "img_mobile_name" => $newName2]);
        } catch (Exception $e) {
            echo $e;
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Insert image slide already ";
        header("Location: ../dashboard.php");
        exit;
    }
}
