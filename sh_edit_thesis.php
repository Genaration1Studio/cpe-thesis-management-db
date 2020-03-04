<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Admin.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Edit Thesis</title>
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
			margin-left: 21.5%;
		}
		
		.destoydiv2 {
			margin-left: 0%;
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
		<a class="nav-link" href="admin.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่หน้าหลัก">หน้าหลัก</a>
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="จัดการปริญญานิพนธ์">การจัดการฐานข้อมูล</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="admin.php" data-toggle="tooltip" data-placement="right" title="ปริญญานิพนธ์">ปริญานิพนธ์</a>
				<a class="dropdown-item" href="category.php" data-toggle="tooltip" data-placement="right" title="ประเภทปริญญานิพนธ์">ประเภทปริญานิพนธ์</a>
				<a class="dropdown-item" href="provider.php" data-toggle="tooltip" data-placement="right" title="ผู้จัดทำปริญญานิพนธ์">ผู้จัดทำปริญานิพนธ์</a>
				<a class="dropdown-item" href="advisor.php" data-toggle="tooltip" data-placement="right" title="อาจารย์ที่ปรึกษาปริญญานิพนธ์">อาจารย์ที่ปรึกษาปริญานิพนธ์</a>
				<a class="dropdown-item" href="faculty.php" data-toggle="tooltip" data-placement="right" title="คณะ">คณะ</a>
				<a class="dropdown-item" href="department.php" data-toggle="tooltip" data-placement="right" title="สาขาวิชา">สาขาวิชา</a>
				<a class="dropdown-item" href="course.php" data-toggle="tooltip" data-placement="right" title="หลักูตร">หลักูตร</a>
				<a class="dropdown-item" href="titlename.php" data-toggle="tooltip" data-placement="right" title="คำนำหน้าชื่อ">คำนำหน้าชื่อ</a>
				<a class="dropdown-item" href="member.php" data-toggle="tooltip" data-placement="right" title="สมาชิก">สมาชิก</a>
				<a class="dropdown-item" href="membertype.php" data-toggle="tooltip" data-placement="right" title="ประเภทสมาชิก">ประเภทสมาชิก</a>
			</div>
		<a class="nav-link" href="sp.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="งาน Query เดี่ยว">Query</a>
		<div class="form-group destoydiv2">
		</div>
		<div class="col-md-3 nobreak"><a class="nav-link" href="#" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF; text-align: right" data-toggle="tooltip" data-placement="bottom" title="คุณคือผู้ดูแลระบบ">ยินดีต้อนรับ Admin 
				<?php
				      $username = $_SESSION[ "AdminID" ];
				   	   $sql = "SELECT admin.Fname FROM admin WHERE admin.AdminID = '$username';";
				   	   $result = $link->query( $sql );
				   		if ( $result->num_rows == 0 ) {
							
								echo "เออเร่อ";
						}else{
							
							$row = $result->fetch_object();
						   	$name = $row->Fname;
							echo $titlename; echo $name;
						}
				   		
				   ?>
	  			</a>

		</div>
		<a class="nav-link" href="logout.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="ออกจากระบบ">ออกจากระบบ</a>
	</nav>

	<main>
		<!-- InstanceBeginEditable name="Content" -->
<?php
		
	$tid = stripslashes( $_REQUEST[ 'tid' ] ); // removes backslashes
	$tid = mysqli_real_escape_string( $link, $tid ); //escapes special characters in a string
	$sql ="SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
							category.Category_Th AS tc_th,category.`Category_En` AS tc_en,
							CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)AS pn_th,
							CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`) AS pn_en,
							CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS an_th,
							CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`) AS an_en,
							`thesis`.`Abstract_Th` AS tab_th,`thesis`.`Abstract_En` AS tab_en,`thesis`.`LocationCollection` AS tlo
							FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
							LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID 
							LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
							LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
							LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor 
							LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
							WHERE thesis.ThesisID = $tid
							GROUP BY `ThesisID` ORDER BY Thesis_Year ASC ;";
	$result=$link->query($sql);
	
?>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-main">
	<form action="edit_thesis.php" class='needs-validation form-horizontal' role='form'  novalidate>
				  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					 แก้ไขข้อมูลปริญญานิพนธ์
				  </div>
	<hr width="100%" color="#FFFFFF"><p>
	<div class="col-lg-12 col-md-offset-1">
					 <table class="table table-striped" style="width: 100%">
						 <?php
						 			while($row1=$result->fetch_object())
									{
						?>
								 <tbody>
									 <tr>
										<td width="100%">
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="tname_th" >หัวข้อปริญญานิพนธ์ : </label>
										<div class='col-md-8'>
											<input class='form-control' name="tname_th" placeholder='ชื่อหัวข้อปริญญานิพนธ์' type='text'autofocus value="<?php echo $row1->tn_th;?>" required>	
											<div class="invalid-tooltip">
											กรุณากรอกหัวข้อปริญญานิพนธ์ (ไทย)
											</div>
										</div>
										
										</div>
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="tname_en" >Titel : </label>
										<div class='col-md-8'>
											<input class='form-control' name="tname_en" placeholder='Titel' type='text' value="<?php echo $row1->tn_en;?>" required>
											<div class="invalid-tooltip">
											กรุณากรอกหัวข้อปริญญานิพนธ์ (อังกฤษ)
											</div>
										</div>
											
										</div>
										</td>
									 </tr>
								 	<tr>
										<td width="100%">
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="tid" >รหัสปริญญานิพนธ์ : </label>
											
										<div class='col-md-2'>
											<input class='form-control' name="tid" placeholder='รหัสปริญญานิพนธ์' type='text'  pattern="([0-9]{1,4}$)" value="<?php echo $row1->tid;?>" readonly required>	
											<div class="invalid-tooltip">
											กรุณากรอกรหัสปริญญานิพนธ์ เป็นตัวเลข 0-9
											</div>
										</div>
										&emsp;&emsp;&emsp;
											<label class='col-form-label col-md-2'for="tc">ประเภท : </label>
										<div class='col-md-3'>
										<select class="form-control cc-select" name="tc" id="tc" required>
											<option value="" selected>กรุณาเลือก</option>
												<?php
													$sql = "SELECT `CategoryID` AS cid,`Category_Th` AS ctth,`Category_En` AS cte FROM `category`;";
													$result = $link->query($sql);
													while($row=$result->fetch_object())
													{
												?>
														<option value="<?php echo $row->cid;?>"
												<?php
														if($row->ctth==$row1->tc_th)
														{
												?>
																selected
												<?php
														}
												?>							
																
														><?=$row->ctth." &nbsp;".$row->cte;?></option>
												<?php
													}
												?>
												<option value="NULL">ไม่มีประเภท</option>
											</select>
											<div class="invalid-tooltip">
											กรุณาเลือกประเภทปริญญานิพนธ์
											</div>
										</div>
										</div>
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="ty" >ปีที่จัดทำ : </label>
										<div class='col-md-2'>
											<input class='form-control' name="ty" placeholder='ปีที่จัดทำ' type='text' pattern="([0-9]{1,4}$)" value="<?php echo $row1->ty;?>" required>	
											<div class="invalid-tooltip">
											กรุณากรอกปีที่จัดทำ เป็น พ.ศ.
											</div>
										</div>
										&emsp;&emsp;&emsp;
											<label class='col-form-label col-md-2'for="tl" >สถานที่จัดเก็บ : </label>
										<div class='col-md-2'>
											<input class='form-control' name="tl" placeholder='สถานที่จัดเก็บ' type='text' value="<?php echo $row1->tlo;?>" required>	
											<div class="invalid-tooltip">
											กรุณากรอกสถานที่จัดเก็บ
											</div>
										</div>
										</div>
										</td>
									 </tr>
									 	<tr>
										<td width="100%">
											<div class="form-group row" style="margin: 0px 2px 0px 2px">
												<label for="">บทคัดย่อ :</label>
												<textarea class="form-control" id="ab_th"  name="ab_th" rows="8" pattern="^[ก-๙0-9-_\.]{1,255}$"   required><?php echo $row1->tab_th;?></textarea>
												<div class="invalid-tooltip">
											กรุณากรอกบทคัดย่อ (ไทย)
											</div>
											  </div>
										</td>
									 </tr>
									 	 <tr>
										<td width="100%">
											<div class="form-group row" style="margin: 0px 2px 0px 2px">
												<label for="">Abstract :</label>
												<textarea class="form-control" id="ab_en" name="ab_en" rows="8" pattern="^[a-zA-Z0-9-_\.]{1,255}$"  required><?php echo $row1->tab_en;?></textarea>
												<div class="invalid-tooltip">
											กรุณากรอกบทคัดย่อ (อังกฤษ)
											</div>
											  </div>
											<br>
											 <div class='form-group row' style="margin-top: 40px; text-align: center">
											<div class='offset-md-3 col-md-3' style="margin-left: 280px">
												<input type="submit" name="submit_re"  class="btn btn-primary label_form_font" value="บันทึก"
													   data-toggle="tooltip" data-placement="bottom" title="เพิ่มข้อมูล"/>
											</div>
											<div class='col-md-1'>
												<input type="button" name="cen_re"  class="btn btn-danger label_form_font" value="ยกเลิก" onClick="window.location='index.php'"
													   data-toggle="tooltip" data-placement="bottom" title="ยกเลิก"/>
											</div>
										  </div>
											
										</td>
									 </tr>
								 </tbody>
					<?php
							}
					?>
						</table>	
		</div>
		</form>
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
	<script src="bootstrap/dist/js/popper.min.js"></script>
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
	<!-- InstanceBeginEditable name="script" -->
<script>  
$(document).ready(function(){
$(document).on('click', '.edit', function(){
  //$('#dataModal').modal();
  var pid = $(this).attr("id");
  $.ajax({
   url:"sh_edit_pro.php",
   method:"POST",
   data:{pid:pid},
   success:function(data){
    $('#show_edit').html(data);
	$('#md_edit').on('shown.bs.modal', function () {
	   		$('#fname_th').trigger('focus');
	})
    $('#md_edit').modal('toggle');
   }
  });
 });
});  
 </script>
<script>
	function hide_md()
	{
		 $('#md_add').modal('hide');
		 $('#md_edit').modal('hide');
	}
</script>
<script>
	  function show_md()
        {
            //var selectedValueC = document.getElementById("add_c").value;
			$('#md_add').on('shown.bs.modal', function () {
					$('#pid').trigger('focus')
			})
			$('#md_add').modal('toggle');
		}
</script>		
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() 
 {
  'use strict';
  	window.addEventListener('load', function() 
	{
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) 
		{
		  		form.addEventListener('submit', function(event) 
				{
					if (form.checkValidity() === false ) 
					{
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');	
		  		}, false);
		});
   }, false);
})();
</script>
<script>
        function getSelectValue()
        {
            var selectedValue = document.getElementById("sq").value;
            if(selectedValue != 'full')
			{
					document.getElementById("keyword").disabled = false;
			}else 
			{
				document.getElementById("keyword").disabled = true;
			}
        }
 </script>
 <script>
        function getSelectValue2()
        {
            var selectedValue = document.getElementById("fact_name").value;
            if(selectedValue == '1500')
			{
				$('#dapt_name_se').hide();
				$('#dapt_bs').show();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1600')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').show();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();
			}
			else if(selectedValue == '1800')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').show();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1700')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').show();
			}
			else
			{
				$('#dapt_name_se').show();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
        }
  </script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function()
 {
  'use strict';
  	window.addEventListener('load', function()
	{
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form)
		{
		  		form.addEventListener('submit', function(event)
				{
					if (form.checkValidity() === false )
					{
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
		  		}, false);
		});
   }, false);
})();
</script>
<script>  
$(document).ready(function(){
			$('#md_edit').on('shown.bs.modal', function () {
			var selectedValue = document.getElementById("fact_name").value;
            if(selectedValue == '1500')
			{
				$('#dapt_name_se').hide();
				$('#dapt_bs').show();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1600')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').show();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();
			}
			else if(selectedValue == '1800')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').show();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1700')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').show();
			}
			else
			{
				$('#dapt_name_se').show();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			})
	$('#md_add').on('shown.bs.modal', function () {
			var selectedValue = document.getElementById("fact_name").value;
            if(selectedValue == '1500')
			{
				$('#dapt_name_se').hide();
				$('#dapt_bs').show();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1600')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').show();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();
			}
			else if(selectedValue == '1800')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').show();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1700')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').show();
			}
			else
			{
				$('#dapt_name_se').show();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			})
});  
 </script>
	<!-- InstanceEndEditable -->
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
</body>
<!-- InstanceEnd --></html>