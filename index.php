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

	<script src="js/jquery.min.js"></script>
	<script src="js/slippry.min.js"></script>
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link href="css/slippry.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/jquery.vm-carousel.css">
	<script src="js/jquery.vm-carousel.js"></script>
	<script src="js/modernizr.js"></script>
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

		<div class="banner">
			<section id="slippry-slider" class="full-width">
				<article class="demo_block">

					<ul id="demo1">
						<?php
						try {
							$stmt = $db->conn->prepare("SELECT img FROM `slide_home` order by id desc");
							$stmt->execute();

							foreach ($stmt->fetchAll() as $row) {
						?>
								<li><img src="back-office/images/slide_home/<?= $row["img"] ?>"></li>

						<?php
							}
						} catch (Exception $e) {
							echo $e->getMessage();
						}

						?>
					</ul>

				</article>
			</section>
		</div>
		<div class="banner-m">
			<section id="slippry-slider" class="full-width">
				<article class="demo_block">


					<ul id="demo2">
						<?php
						try {
							$stmt = $db->conn->prepare("SELECT img_mobile FROM `slide_home` order by id desc");
							$stmt->execute();

							foreach ($stmt->fetchAll() as $row) {
						?>
								<li><img src="back-office/images/slide_home/<?= $row["img_mobile"] ?>"></li>

						<?php
							}
						} catch (Exception $e) {
							echo $e->getMessage();
						}

						?>


					</ul>
				</article>
			</section>
		</div>
	</div>
	<div class="content">
		<div class="left-01">
			<div class="box-main">
				<div class="picture-about-home"><img src="images/picture-about-home.jpg" width="465" height="700" /></div>
				<div class="title-about-home">P.S CHILLER SERVICE</div>
				<div class="sub-about-home">
					<?php
					try {
						$stmt = $db->conn->prepare("SELECT * FROM `aboutus_tell_something`");
						$stmt->execute();

						foreach ($stmt->fetchAll() as $row) {
					?>

							<?= $row["msg"] ?>

					<?php
						}
					} catch (Exception $e) {
						echo $e->getMessage();
					}

					?>
				</div>

				<?php
				try {
					$stmt = $db->conn->prepare("SELECT * FROM `aboutus_home`");
					$stmt->execute();

					foreach ($stmt->fetchAll() as $row) {
				?>
						<div class="text-about-home">
							<?= $row["detail"] ?>
						</div>
						<div class="more-01"><a href="aboutus.php">อ่านต่อ</a></div>


				<?php
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}

				?>

			</div>
		</div>
		<div class="tab-slogan">
			<div class="box-main">
				<div class="box-slogan">
					<div class="icon-slogan"><img src="images/icon-slogan-01.jpg" width="100" height="100" /></div>
					<div class="text-slogan">สินค้าและบริการดี</div>
				</div>
				<div class="box-slogan">
					<div class="icon-slogan"><img src="images/icon-slogan-02.jpg" width="100" height="100" /></div>
					<div class="text-slogan">ใช้เครื่องมือทันสมัย</div>
				</div>
				<div class="box-slogan">
					<div class="icon-slogan"><img src="images/icon-slogan-03.jpg" width="100" height="100" /></div>
					<div class="text-slogan">ดูแลหลังการขาย</div>
				</div>

			</div>

		</div>
		<div class="left-01">
			<div class="box-main">
				<div class="title-all">บริการ</div>
				<?php
				try {
					$stmt = $db->conn->prepare("SELECT * FROM `service` LIMIT 3");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $row) {
				?>
						<div class="box-service">
							<div class="picture-service"><a href="#"><img src="back-office/images/service/<?= $row["service_image"] ?>" width="410" height="273" /></a></div>
							<div class="title-service"><a href="service-detail.php?id=<?= $row["id"] ?>"><?= $row["service_name"] ?></a></div>
							<div class="more-02"><a href="service-detail.php?id=<?= $row["id"] ?>">ดูเพิ่มเติม > </a></div>

						</div>
				<?php
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
				?>

				<div class="more-03"><a href="service.php">ดูทั้งหมด</a></div>
			</div>

		</div>
		<div class="left-02">
			<div class="box-main">

				<div class="title-all-w">ผลงาน</div>


				<div class="box-port-home">
					<ul class="vmcarousel-centered-infitine">

						<?php
						try {
							$stmt2 = $db->conn->prepare("SELECT *
									FROM (
										SELECT *, 
											   ROW_NUMBER() OVER (PARTITION BY id_main ORDER BY id_main) as row_num
										FROM portfolio_sub 
									) as sub
									WHERE sub.row_num <= 2");
							$stmt2->execute();
							foreach ($stmt2->fetchAll() as $row) {
						?>
								<li>
									<div class="box-port">
										<div class="picture-port"><a href="portfolio-list-detail.php?id_main=<?= $row["id_main"] ?>&id=<?= $row["id"] ?>"><img src="back-office/images/portfolio/<?= $row["image"] ?>" width="400" height="267" /></a></div>
										<div class="title-port"><a href="portfolio-list-detail.php?id_main=<?= $row["id_main"] ?>&id=<?= $row["id"] ?>"><?= $row["name"] ?></a></div>

										<div class="more-04"><a href="portfolio-list-detail.php?id_main=<?= $row["id_main"] ?>&id=<?= $row["id"] ?>">ดูเพิ่มเติม > </a></div>
									</div>
								</li>
						<?php
							}
						} catch (Exception $e) {
							echo $e->getMessage();
						}
						?>

					</ul>
				</div>
				<div class="more-03"><a href="portfolio.php">ดูทั้งหมด</a></div>
			</div>

		</div>
		<div class="left-01">
			<div class="box-main">
				<div class="title-all">จำหน่ายอะไหล่</div>
				<?php
				try {
					$stmt = $db->conn->prepare("SELECT * FROM `spare_parts`");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $row) {
				?>
						<div class="box-part">
							<div class="picture-part"><a href="part-brand.php?id=<?= $row["id"] ?>"><img src="back-office/images/spare_parts/<?= $row["image"] ?>" width="285" height="285" /></a></div>
							<div class="text-part"><a href="part-brand.php?id=<?= $row["id"] ?>"><?= $row["name"] ?></a></div>

						</div>
				<?php
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
				?>

				<div class="more-03"><a href="part.php">ดูทั้งหมด</a></div>
			</div>

		</div>

	</div>
	<?php include 'inc/footer.php'; ?>
	<script>
		$(function() {
			var demo1 = $("#demo1").slippry({
				// transition: 'fade',
				// useCSS: true,
				speed: 2000,
				pause: 2000,
				pager: true,
				responsive: true,
				// auto: true,
				// preload: 'visible',
				// autoHover: false
			});

			$('.stop').click(function() {
				demo1.stopAuto();
			});

			$('.start').click(function() {
				demo1.startAuto();
			});

			$('.prev').click(function() {
				demo1.goToPrevSlide();
				return false;
			});
			$('.next').click(function() {
				demo1.goToNextSlide();
				return false;
			});
			$('.reset').click(function() {
				demo1.destroySlider();
				return false;
			});
			$('.reload').click(function() {
				demo1.reloadSlider();
				return false;
			});
			$('.init').click(function() {
				demo1 = $("#demo1").slippry();
				return false;
			});
		});
	</script>
	<script>
		$(function() {
			var demo2 = $("#demo2").slippry({
				// transition: 'fade',
				// useCSS: true,
				speed: 2000,
				pause: 2000,
				pager: true,
				responsive: true,
				// auto: true,
				// preload: 'visible',
				// autoHover: false
			});

			$('.stop').click(function() {
				demo2.stopAuto();
			});

			$('.start').click(function() {
				demo2.startAuto();
			});

			$('.prev').click(function() {
				demo2.goToPrevSlide();
				return false;
			});
			$('.next').click(function() {
				demo2.goToNextSlide();
				return false;
			});
			$('.reset').click(function() {
				demo2.destroySlider();
				return false;
			});
			$('.reload').click(function() {
				demo2.reloadSlider();
				return false;
			});
			$('.init').click(function() {
				demo2 = $("#demo2").slippry();
				return false;
			});
		});
	</script>
	<script>
		jQuery(function($) {
			$('.vmcarousel-centered').vmcarousel({
				centered: true,
				start_item: 2,
				autoplay: true,
				infinite: false
			});

			$('.vmcarousel-centered-infitine').vmcarousel({
				delay: 2000,
				speed: 500,
				autoplay: true,
				items_to_show: 0,
				min_items_to_show: 1,
				items_to_slide: 1,
				dont_cut: true,
				centered: false,
				start_item: 0,
				start_item_centered: false,
				infinite: false,
				changed_slide: $.noop()

			});

			$('.vmcarousel-normal').vmcarousel({
				centered: false,
				start_item: 0,
				autoplay: true,
				infinite: false
			});
		});
	</script>
</body>

</html>