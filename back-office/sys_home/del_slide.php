<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../dashboard.php");
    exit;
} else {
    /**
     * Check if the id is a valid id.
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `slide_home` WHERE `id`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/slide_home/" . $row['img']) &&  file_exists("../images/slide_home/" . $row['img_mobile'])) {
                unlink("../images/slide_home/" . $row['img']);
                unlink("../images/slide_home/" . $row['img_mobile']);

                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `slide_home` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete image slide already.";
                    header("Location: ../dashboard.php");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `slide_home` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete image slide already.";
                    header("Location: ../dashboard.php");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }


            $count_stmt += 1;
        }
        if ($count_stmt === 0) {
            header("Location: ../dashboard.php");
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
