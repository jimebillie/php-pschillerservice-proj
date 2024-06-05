<?php
require_once("back-office/database/connect.php");
$db = new connect();
?>

<?php
$phone = "";
$line = "";
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_phone`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $phone = $row["phone_1"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_line`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $line = $row["line_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<div class="contact-top"><a href="tel:<?=$phone?>" target="_blank"><img src="images/icon-top-call.jpg" width="30" height="30" /></a><a href="<?=$line?>" target="_blank"><img src="images/icon-top-line.jpg" width="30" height="30" /></a></div>