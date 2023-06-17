<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>LUXYRY HOTEL</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!-- header -->
	<div class="w3_navigation" style="height: 110px; margin:0px">
		<div class="container" style="display: flex;">
			<nav class="navbar navbar-default padding: none;" style="
    margin-left: 84px;">
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list" style="display: flex; align-items: center;">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Trang Chủ</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Thông Tin</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Bộ Sưu Tập</a></li>
							<li class="menu__item"><img src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg"></img></li>

							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Phòng</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Liên Hệ</a></li>
							<?php
							if (isset($_SESSION['dangnhap']["id"])) {
								$id_user = $_SESSION['dangnhap']["id"];
								$rows_user = mysqli_query($con, "SELECT * FROM tbl_dangki WHERE '" . $id_user . "' = id_dangki");
								$row_user = mysqli_fetch_array($rows_user);
							?>
								<div class="user" style="color:white">
									<img style="width: 20px; height: 20px; border-radius: 50%;line-height:40px; " src="images/avater.png" alt="">
									<p style="display:inline;">
										<?php echo ($_SESSION['dangnhap']["name"]) ?>
									</p>
									<a href="php_hotel/login.php?account=dangxuat" class="logout">Đăng xuất</a>
								</div>
							<?php
							} else {
							?>
								<li class="menu__item"><a href="php_hotel/login.php">Đăng nhập</a></li>
							<?php
							}
							?>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<form style="width:40%; margin:10px auto; display: flex; align-items: center;" method="POST" action="php_hotel/search.php">
		<span>Loại Phòng :</span>
		<select style="width:40%; margin: 0 16px;" name="troom" class="form-control" required>
			<option selected value="1">Phòng Đơn</option>
			<option value="2">Phòng Đôi</option>
			<option value="3">Phòng Víp</option>
			<option value="4">Phòng Thiên Nhiên</option>
		</select>
		<button type="submit" name="search" class=" btn">Tìm kiếm</button>
	</form>
	<div id="home" class="w3ls-banner">
		<video style="width: 100%;" src="https://statics.vinpearl.com/Vinpearl Luxury Nha Trang - The jewel of Hon Tre Island_1686545293.mp4" muted loop autoplay></video>
	</div>
	<!-- //banner -->
	<!--//Header-->
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>LUXURY</h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>We know what you love</h5>
					<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>ĐẶT PHÒNG</h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>Trải nghiệm một kì nghỉ với những ưu đãi lớn</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">PHÒNG NGỦ</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">BAN CÔNG BIỂN</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">CAFE</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI FREE</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about" style="height: 800px;">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">Vinpearl Luxury Nha Trang</h3>
				<p class="about-para-w3ls"> Vinpearl Luxury Nha Trang là điểm đến khó lòng bỏ qua với những du khách trân trọng từng giây phút an tĩnh tuyệt đối bên người mình yêu thương. 84 căn biệt thự xinh đẹp nằm giữa những khu vườn tạo nên khung cảnh yên bình cách xa chốn thị thành bận rộn. Các biệt thự có kiến trúc trang nhã của văn hóa truyền thống Việt Nam với bể bơi riêng, bể Jacuzzi cùng ban công rộng rãi nhìn ra vịnh biển xinh đẹp. Trải nghiệm không thể bỏ lỡ ở đây là thưởng thức một ly cocktail tại Wave Bar hay tận hưởng liệu trình massage tại chòi spa ngay trên mặt biển. </p>
				<img src="https://www.nhaban.vn/media.nb/layout_domain_resources/2/files/nb-cb961a66e949975dde768ae660a28ecc.jpg" class="img-responsive" style="width: 100%; height: 500px; object-fit: cover;" alt="Hair Salon">
				<div class="w3l-slider-img">
					<img src="https://statics.vinpearl.com/styles/378x250/public/2023_06/uu-dai-vinpearl-danh-cho-nhom-trung-nien_1686199384.jpg.webp?itok=Q_IYgDDt" class="img-responsive" alt="Hair Salon">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->

	<div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Các Loại Phòng</h3>
			<div class="priceing-table-main">
			<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Phòng đơn</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h4>1.500.000 <span>VND</span></h4>
								<a href="admin/reservation.php">Đặt ngay</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Phòng Đôi</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								</ul>
							</div>
							<div class="price-selet">
								<h4>1.800.000 <span>VND</span></h4>
								<a href="admin/reservation.php">Đặt ngay</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Phòng thiên nhiên</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h4>2.500.000 <span>VND</span></h4>
								<a href="admin/reservation.php">Đặt ngay</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Phòng vip</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h4>4.500.000 <span>VND</span></h4>
								<a href="admin/reservation.php">Đặt ngay</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits" style="background-color: #ffce14; padding: 8px 0;">Những dịch vụ của chúng tôi</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Trải nghiệm trước,Thanh toán sau!</h4>
							<p><i class="fa fa-check" aria-hidden="true"></i>Không gian sang trọng độc đáo,Đầy đủ tiện nghi</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Ban công riêng tư</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>Dịch vụ thường trực 24/7</h4>
							<p><i class="fa fa-check" aria-hidden="true"></i>Hỗ trợ dịch vụ phòng 24/24</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Hướng dẫn tận tình khách hàng 24/7</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<div class="team" id="team">
		<!-- //team -->
		<!-- Gallery -->
		<section class="portfolio-w3ls" id="gallery">
			<h3 class="title-w3-agileits title-black-wthree">Không gian của chúng tôi</h3>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<img width="50px" src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="">
					</div>
				</a>
			</div>
			<div class="clearfix"> </div>
		</section>
		<!-- //gallery -->

		<!-- contact -->
		<section class="contact-w3ls" id="contact">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
					<div class="contact-agileits">
						<h4>Liên hệ</h4>
						<p class="contact-agile2">Đăng kí để nhận thêm thông tin</p>
						<form method="post" name="sentMessage" id="contactForm">
							<div class="control-group form-group">

								<label class="contact-p1">Họ Tên:</label>
								<input type="text" class="form-control" name="name" id="name" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">SDT:</label>
								<input type="tel" class="form-control" name="phone" id="phone" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">Email:</label>
								<input type="email" class="form-control" name="email" id="email" required>
								<p class="help-block"></p>

							</div>


							<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
						</form>
						<?php
						if (isset($_POST['sub'])) {
							$name = $_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$approval = "Not Allowed";
							$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


							if (mysqli_query($con, $sql))
								echo "OK";
						}
						?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
					<h4>Liên Hệ với chúng tôi</h4>
					<p class="contact-agile1"><strong>SDT :</strong>+84 9999999</p>
					<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@VIN.COM</a></p>
					<p class="contact-agile1"><strong>ĐỊA CHỈ :</strong> Hà Nội</p>

					<div class="social-bnr-agileits footer-icons-agileinfo">
						<ul class="social-icons3">
							<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

						</ul>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662"></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
		<!-- /contact -->
		<div class="copy">
			<p>© 2023 VINNN . All Rights Reserved | Design by HAUI <a href="index.php">VIN</a> </p>
		</div>
		<!--/footer -->
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- contact form -->
		<script src="js/jqBootstrapValidation.js"></script>

		<!-- /contact form -->
		<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
			});
		</script>
		<!-- //Calendar -->
		<!-- gallery popup -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
		<!-- //gallery popup -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- flexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function() {
				// Slideshow 4
				$("#slider4").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function() {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function() {
						$('.events').append("<li>after event fired.</li>");
					}
				});

			});
		</script>
		<!--search-bar-->
		<script src="js/main.js"></script>
		<!--//search-bar-->
		<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function() {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!--//tabs-->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
				$().UItoTop({
					easingType: 'easeOutQuart'
				});
			});
		</script>

		<div class="arr-w3ls">
			<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- //smooth scrolling -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>