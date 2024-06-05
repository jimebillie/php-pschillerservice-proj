<?php
require_once("back-office/database/connect.php");
$db = new connect();
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
        <div class="title-all">อะไหล่</div>
        <?php
        try {
          $stmt = $db->conn->prepare("SELECT * FROM `spare_parts` WHERE `id`=:__id");
          $stmt->execute(["__id" => $_GET["id"]]);
          foreach ($stmt->fetchAll() as $row) {
        ?>
            <div class="show-title">
              <?=$row["name"]?>
            </div>
        <?php
          }
        } catch (Exception $e) {
          echo $e->getMessage();
        }
        ?>

        <?php
        try {
          $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub` WHERE `id_main`=:__id");
          $stmt->execute(["__id" => $_GET["id"]]);
          foreach ($stmt->fetchAll() as $row) {
        ?>
            <div class="box-part-new">
              <div class="picture-part"><a href="part-detail.php?id_main=<?= $_GET["id"] ?>&id=<?= $row["id"] ?>"><img src="back-office/images/spare_parts/<?= $row["image"] ?>" width="285" height="285" /></a></div>
            </div>
        <?php
          }
        } catch (Exception $e) {
          echo $e->getMessage();
        }
        ?>


        <div class="more-03"><a href="part.php">
            < ย้อนกลับ</a>
        </div>


      </div>

    </div>

  </div>
  <?php include 'inc/footer.php'; ?>

</body>

</html>