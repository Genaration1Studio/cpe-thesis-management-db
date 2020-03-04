<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Master.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>About</title>
	<!-- InstanceEndEditable -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0">
	<link rel="icon" type="image/png" href="Login/images/icons/icon.ico"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
	<style>
		#labelH_form2_font {
			font-family: 'Sukhumvit Set';
			font-weight: 400;
			font-size: 18px;
			color: #FFFFFF;
		}
		
		.fitbot {
			position: fixed;
			left: 0;
			bottom: 0;
		}
		
		.nobreak {
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		
		#btnLeft:active {
			width: 70px;
			height: 74px;
		}
		
		.destoydiv1 {
			margin-left: 23%;
		}
		
		.destoydiv2 {
			margin-left: 8%;
		}
		
		@media screen and (max-width: 1000px) {
			.destoydiv1 {
				margin-left: 23%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
		}
		
		@media screen and (max-width: 800px) {
			.destoydiv1 {
				margin-left: 23%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
			.nobreak {
				display: none;
			}
		}
		
		@media screen and (max-width: 500px) {
			.destoydiv1 {
				margin-left: 1%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
			.nobreak {
				display: none;
			}
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<!-- InstanceBeginEditable name="head" -->
	<!-- InstanceEndEditable -->
</head>

<body id="page-site-index">

	<div class="limiter">
		<div id="banner">
			<div id="wrapper">
				<div id="container">
					<img class="banner-img" src="images/login_01.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<nav class="nav">
		<div class="form-group destoydiv1">
		</div>
		<a class="nav-link" href="main.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่หน้าหลัก">หน้าหลัก</a>
		<a class="nav-link" href="conta.php"  style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เกี่ยวกับเรา">About</a>
		<div class="form-group destoydiv2">
		</div>
		<div class="col-md-3 nobreak"><a class="nav-link" href="#" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF; text-align: right" data-toggle="tooltip" data-placement="bottom" title="คุณคือผู้ใช้งานขณะนี้">ยินดีต้อนรับ
				<?php
				      $username = $_SESSION[ "MemberID" ];
				   	   $sql = "SELECT titlename.TitleName_Th,member.Fname FROM titlename,member WHERE titlename.TitleNameID = member.TitleName AND member.MemID = '$username';";
				   	   $result = $link->query( $sql );
				   		if ( $result->num_rows == 0 ) {
							
								echo "เออเร่อ";
						}else{
							
							$row = $result->fetch_object();
							$titlename= $row->TitleName_Th;
						   	$name = $row->Fname;
							echo $name;
						}
				   		
				   ?>
	  			</a>
		
		</div>
		<a class="nav-link" href="logout.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="ออกจากระบบสืบค้น">ออกจากระบบ</a>
	</nav>

	<main>
		<!-- InstanceBeginEditable name="Content" -->
		<div class="limiter">
		<div class="container-login100">
		<div class="wrap-conta">
			  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					  เกี่ยวกับเรา
		  </div>
				  <hr width="100%" color="#FFFFFF"><p>
			<div class="container-fluid" style="text-align: center">
					<img src="images/about.gif" width="500px"><br>
			</div>
		  <div  role="alert" style="text-align: center">
			<br>
			นายฉันทวุฒิ	รวมใหม่ 59172110593-1<br>
			Email : chantawut.rm@rmuti.ac.th <br>
			FB: Chantawut Ruammai<br>
			Tel: 098-281-2160<br>
			<br>
			นายยุทธศาสตร์  นอขุนทด 59172110214-1<br>
			Email : Yudthasard.no@rmuti.ac.th <br>
			YouTube: Generation1Studio<br>
			FB: GolFza Pc'Yutthasard<br>
			Tel: 086-451-3711<br>
			<br>
			นายปรมัตถ์  แนบกระโทก 59172110304-2<br>
			Email : pon0814371860@gmail.com<br>
			FB: Watashi Pon Pon<br>
			Tel: 094-521-5454<br>
			<br>
			CPE.59241 <br>
			We're CPY Inc. Computer Engineering #8.
			</div>
			


		</div>
		</div>
		</div>
		</div>
		<!-- InstanceEndEditable -->
	</main>

	<div class="limiter">
		<div id="banner">
			<div id="wrapper">
				<div id="container">
					<img class="banner-img" src="images/login_09.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
</body>

<!-- InstanceEnd --></html>