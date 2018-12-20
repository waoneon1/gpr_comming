<?php /* Template Name: Comming Soon */ ?>


<!DOCTYPE html>
<!-- saved from url=(0060)https://www.w3schools.com/howto/tryhow_css_fullpage_demo.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
	background-image: url(<?php echo get_template_directory_uri() ?>/comming/bg-utama.png);
	height: 100%;
	padding: 10px 40px 0;
    box-sizing: border-box;
    overflow: hidden;
}


.caption {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption.little-logo {
	 text-align: right;
}
.caption.logo img {
    width: 290px;
}
.caption.comming {
    padding-left: 20px;
}
.caption.comming img {
	width: 60%;
    max-width: 500px;
}
.caption.footer {
	text-align: left;
}

.little-logo img {
	width: 110px;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
.address {
	text-align: left;
	float: left;
	width: 50%;
}
.copyright {
	text-align: right;
	float: right;
	width: 50%;
	position: relative;
	top: 60px;
}
.address span, .copyright span {
	color: #fff;
	font-size: 10px;
	font-style: italic;
	display: block;
}
.copyright span {
	color: #459a54;
}
h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

.wing-left {
	height: 100%;
	width: 30%;
	position: absolute;
	left: 0;
	top: 0;
	background-image: url('<?php echo get_template_directory_uri() ?>/comming/kiri.png');
    background-repeat-x: no-repeat;
}

.wing-right {
	height: 100%;
	width: 30%;
	position: absolute;
	right: 0;
	top: 0;
	background-image: url('<?php echo get_template_directory_uri() ?>/comming/kanan.png');
    background-repeat-x: no-repeat;
    background-position: right;
}
</style>
</head>
<body>

<div class="bgimg-1">
	<div class="caption little-logo">
		<img src="<?php echo get_template_directory_uri() ?>/comming/logo1.png"/>
		<img src="<?php echo get_template_directory_uri() ?>/comming/logo2.png"/>
	</div>
	<div class="caption logo">
		<img src="<?php echo get_template_directory_uri() ?>/comming/logo-utama.png"/>
	</div>
	<div class="caption comming">
		<img src="<?php echo get_template_directory_uri() ?>/comming/comming.png"/>
	</div>
	<div class="caption footer" style="height: 40px; width: 100px;">
		
	</div>
	<!-- <div class="caption footer copy">
		<img src="<?php echo get_template_directory_uri() ?>/comming/alamat.png"><img src="<?php echo get_template_directory_uri() ?>/comming/copyright.png">
	</div> -->

	<div class="caption footer copy">
	 	<div class="address">
	 		<img src="<?php echo get_template_directory_uri() ?>/comming/alamat.png">
	 	</div>
	 	<div class="copyright">
	 		<img src="<?php echo get_template_directory_uri() ?>/comming/copyright.png">
	 	</div>
	</div>

	<div class="wing-left"></div>
	<div class="wing-right"></div>

</div>

</body></html>