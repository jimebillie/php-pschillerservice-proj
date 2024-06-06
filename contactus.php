<?php
session_start();
require_once("back-office/database/connect.php");
$db = new connect();
?>

<?php
$phone1 = "";
$phone2 = "";
$line_name = "";
$line_Link = "";
$facebook_name = "";
$facebook_link = "";
$messenger_name = "";
$messenger_link = "";
$email = "";
$address = "";
$map = "";
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
        $line_name = $row["line_name"];
        $line_Link = $row["line_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_facebook`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $facebook_name = $row["facebook_name"];
        $facebook_link = $row["facebook_link"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_messenger`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $messenger_name = $row["messenger_name"];
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
try {
    $stmt = $db->conn->prepare("SELECT * FROM `contact_map`");
    $stmt->execute();

    foreach ($stmt->fetchAll() as $row) {
        $map = $row["map"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>P.S CHILLER SERVICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/header-m.css" rel="stylesheet" type="text/css" />
    <link href="css/header-t.css" rel="stylesheet" type="text/css" />
    <link href="css/content.css" rel="stylesheet" type="text/css" />
    <link href="css/content-m.css" rel="stylesheet" type="text/css" />
    <link href="css/content-t.css" rel="stylesheet" type="text/css" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-m.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-t.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="header">
        <div class="logo"><a href="index.php"><img src="images/logo.jpg" width="240" height="86" /></a></div>
        <div class="box-menu">
            <nav id="nav" role="navigation">
                <a href="#nav" title="Show navigation">Show navigation</a>
                <a href="#" title="Hide navigation">Hide navigation</a>
                <ul>
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="aboutus.php">เกี่ยวกับเรา</a></li>
                    <li><a href="service.php">บริการ</a></li>
                    <li><a href="portfolio.php">ผลงาน</a></li>
                    <li><a href="part.php">อะไหล่</a></li>
                    <li><a href="contactus.php">ติดต่อเรา</a></li>
                    <li class="menu-none"><a href="#">#</a></li>



                    </li>

                </ul>
            </nav>
        </div>
        <?php include 'inc/contact-top.php'; ?>



    </div>
    <div class="content">




        <div class="left-01-all">
            <div class="box-main">
                <div class="title-all">ติดต่อเรา</div>
                <div class="box-form-contact">
                    <div class="form-title-contact">แบบฟอร์มขอใบเสนอราคา<br />(Quotation Form)</div>
                    <div class="form-text-contact">เพื่อความรวดเร็วในการเสนอราคา กรุณากรอกข้อมูลให้ครบถ้วน</div>
                    <form enctype="multipart/form-data" onsubmit="submitForm(event)">
                        <?php
                        $mail_for_customer = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `contact_email_for_customer`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $mail_for_customer = $row["email"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <input type="email" name="mail_for_customer" value="<?= $mail_for_customer ?>" hidden required>
                        <div class="form-list">
                            <div class="form-left">ชื่อ-นามสกุล FULL NAME <span class="star-red">*</span></div>
                            <div class="form-right"><input name="name" type="text" class="input-02" required /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">อีเมล E-MAIL<span class="star-red">*</span></div>
                            <div class="form-right"><input name="email" type="email" required class="input-02" /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">เบอร์ติดต่อ CONTACT NUMBER<span class="star-red">*</span></div>
                            <div class="form-right"><input name="tel" type="text" required class="input-02" /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">ชื่อบริษัท COMPANY NAME<span class="star-red">*</span></div>
                            <div class="form-right"><input name="company" required type="text" class="input-02" /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">รหัสสินค้าที่สนใจ PART NUMBER</div>
                            <div class="form-right"><input name="part_number" type="text" class="input-02" /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">จำนวนสินค้าที่ต้องการสั่งซื้อ ORDER QUANTITY</div>
                            <div class="form-right"><input name="quantity" type="text" class="input-02" /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">รายละเอียดเพิ่มเติม (ถ้ามี) ETC.</div>
                            <div class="form-right"><textarea name="detail" cols="" rows="" class="input-03"></textarea></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">แนบไฟล์ NAMEPLATE , SPARE PARTS อื่นๆ <br>
                                (*ไฟล์ขนาดไม่เกิน 1 mb)
                            </div>
                            <div class="form-right"><input type="file" name="file_send" class="input-01" /></div>
                            <div class="form-right"><input type="file" name="file_send2" class="input-01" /></div>
                        </div>
                        <div class="form-list">

                            <div class="form-choose"><input name="" type="submit" value="ส่งฟอร์มขอราคา" class="btn-send-02" /></div>
                        </div>
                    </form>

                </div>
                <div class="box-contact">
                    <div class="box-contact-list">
                        <div class="icon-contact-list"><img src="images/icon-contact-01.png" width="43" height="40" /></div>
                        <div class="text-contact-list"><a href="tel:<?= $phone1 ?>" target="_blank"><?= $phone1 ?></a> , <a href="tel:<?= $phone2 ?>" target="_blank"><?= $phone2 ?></a></div>

                    </div>
                    <div class="box-contact-list">
                        <div class="icon-contact-list"><img src="images/icon-contact-02.png" width="43" height="40" /></div>
                        <div class="text-contact-list"><?= $address ?></div>

                    </div>
                    <div class="box-contact-list">
                        <div class="icon-contact-list"><img src="images/icon-contact-03.png" width="43" height="40" /></div>
                        <div class="text-contact-list"><?= $email ?></div>

                    </div>
                </div>
                <div class="title-social">ติดตามเราได้ที่..</div>
                <div class="box-social">
                    <div class="icon-social"><a href="<?= $facebook_link ?>" target="_blank"><img src="images/icon-contact-04.png" width="55" height="52" /></a></div>
                    <div class="text-social"><a href="<?= $facebook_link ?>" target="_blank"><?= $facebook_name ?></a></div>
                </div>
                <div class="box-social">
                    <div class="icon-social"><a href="<?= $messenger_link ?>" target="_blank"><img src="images/icon-contact-05.png" width="55" height="52" /></a></div>
                    <div class="text-social"><a href="<?= $messenger_link ?>" target="_blank"><?= $messenger_name ?></a></div>
                </div>
                <div class="box-social">
                    <div class="icon-social"><a href="<?= $line_Link ?>" target="_blank"><img src="images/icon-contact-06.png" width="55" height="52" /></a></div>
                    <div class="text-social"><a href="<?= $line_Link ?>" target="_blank"><?= $line_name ?></a></div>
                </div>
            </div>

        </div>
        <div class="googlemap"><?= $map ?></div>
    </div>
    <?php include 'inc/footer.php'; ?>


    <script>
        async function submitForm(e) {
            e.preventDefault();
            const mail_for_customer = document.querySelector("input[name='mail_for_customer']").value;
            const name = document.querySelector("input[name='name']").value;
            const email = document.querySelector("input[name='email']").value;
            const tel = document.querySelector("input[name='tel']").value;
            const company = document.querySelector("input[name='company']").value;
            const part_number = document.querySelector("input[name='part_number']").value;
            const quantity = document.querySelector("input[name='quantity']").value;
            const detail = document.querySelector("textarea[name='detail']").value;
            const file_send = document.querySelector("input[name='file_send']");
            const file_send2 = document.querySelector("input[name='file_send2']");

            let formData = new FormData();

            formData.append("mail_for_customer", mail_for_customer);
            formData.append("name", name);
            formData.append("email", email);
            formData.append("tel", tel);
            formData.append("company", company);
            formData.append("part_number", part_number);
            formData.append("quantity", quantity);
            formData.append("detail", detail);

            let chk_err = 0;
            if (file_send.files.length > 0) {
                if (file_send.files[0].size <= 1000000) {
                    formData.append("file_send", file_send.files[0]);
                } else {
                    alert("ไฟล์ที่ 1 มีขนาดเกิน 1 mb");
                    chk_err = 1;
                    file_send.value = "";
                }
            }
            if (file_send2.files.length > 0) {
                if (file_send2.files[0].size <= 1000000) {
                    formData.append("file_send2", file_send2.files[0]);
                } else {
                    alert("ไฟล์ที่ 2 มีขนาดเกิน 1 mb");
                    chk_err = 1;
                    file_send2.value = "";
                }
            }

            const currentUrl = window.location.href;
            const baseUrl = new URL(currentUrl).origin;
            apiUrl = `${baseUrl}/pschillerservice/sys_mail/sendmail.php`;
            // apiUrl = `${baseUrl}/sys_mail/sendmail.php`;


            if (chk_err === 0) {
                const api = await fetch(apiUrl, {
                    method: "post",
                    body: formData
                });
                const res = await api.text();
                if (res.includes("resp_pass")) {
                    alert("ส่งแบบฟอร์มขอใบเสนอราคาเรียบร้อยแล้ว");
                    window.location.reload();
                }
            }

        }
    </script>
</body>

</html>