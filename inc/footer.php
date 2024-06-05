<?php
require_once("back-office/database/connect.php");
$db = new connect();
?>

<?php
$phone1 = "";
$phone2 = "";
$line_Link = "";
$facebook_link = "";
$messenger_link = "";
$email = "";
$address = "";
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_phone`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $phone1 = $row["phone_1"];
        $phone2 = $row["phone_2"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_line`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $line_Link = $row["line_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_facebook`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $facebook_link = $row["facebook_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_messenger`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $messenger_link = $row["messenger_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_email`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $email = $row["email"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_address`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $address = $row["address"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<div class="footer">
    <div class="box-main">
        <div class="box-footer-left">
            <div class="title-footer">ที่อยู่</div>
            <div class="text-footer-left"><?= $address ?></div>

        </div>
        <div class="box-footer-center">
            <div class="title-footer">ติดต่อ</div>
            <div class="box-footer-center-list">
                <div class="icon-footer-center"><img src="images/icon-footer-01.jpg" width="48" height="37" /></div>
                <div class="text-footer-center"><a href="tel:<?= $phone1 ?>" target="_blank"><?= $phone1 ?></a> , <a href="tel:<?= $phone2 ?>" target="_blank"><?= $phone2 ?></a></div>
            </div>
            <div class="box-footer-center-list">
                <div class="icon-footer-center"><img src="images/icon-footer-02.jpg" width="48" height="37" /></div>
                <div class="text-footer-center"><?= $email ?></div>
            </div>
        </div>
        <div class="box-footer-right">
            <div class="title-footer">ติดตามเราได้ที่</div>
            <div class="icon-footer-right"><a href="<?= $facebook_link ?>" target="_blank"><img src="images/icon-footer-03.jpg" width="32" height="32" /></a><a href="<?= $messenger_link ?>" target="_blank"><img src="images/icon-footer-04.jpg" width="32" height="32" /></a>
                <a href="<?= $line_Link ?>" target="_blank"><img src="images/icon-footer-05.jpg" width="32" height="32" /></a>
            </div>

        </div>


    </div>
    <div class="copy">© pschillerservice.com . All Rights Reserved.</div>
</div>