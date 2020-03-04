<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Admin.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>titlneme</title>
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
							echo $name;
						}
				   		
				   ?>
	  			</a>

		</div>
		<a class="nav-link" href="logout.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="ออกจากระบบ">ออกจากระบบ</a>
	</nav>

	<main>
		<!-- InstanceBeginEditable name="Content" -->
		<div class="limiter">
	<div class="container-login100">
		<div class="wrap-titlneme">
			<form action="titlename.php" class='needs-validation form-horizontal  table-striped' id="formsq" role='form' method="post" novalidate> 
					<div class="row align-items-center">
				  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					 คำนำหน้าชื่อ
				  </div>
				   <div class="col-2" style="text-align: right">
		  				<button class="btn btn-success btn-sm" type="button" name="add" id="add" onClick="show_md();" data-toggle="tooltip" data-placement="bottom" title="เพิ่มข้อมูล">เพิ่มข้อมูล</button>
				 </div>
				</div>
				  <hr  width="100%" color="#FFFFFF"><p>
          <div class='form-group row'>
			<label class='col-form-label label_form_font'  style="text-align: right">สืบค้นโดย</label>
           <div class='col-md-4'>
             <select class='form-control cc-select font_ek_14' id="sq" name="sq"  onChange="getSelectValue();" required>
					<option value="" selected>กรุณาเลือก</option>
					<option value="ttid">รหัสคำนำหน้า</option>
				    <option value="ttname">ชื่อคำนำหน้า</option>
				    <option value="full">เลือกทั้งหมด</option>
            </select>
		<div class="invalid-tooltip">
        กรุณาเลือกรูปแบบการสืบค้น
        </div>
          </div>
          	  <div class='col-md-4'>	
          		 <input class='form-control font_ek_14' name="keyword" id="keyword" placeholder='ระบุคำสืบค้น' type='search' required>
				  <div class="invalid-tooltip">
        กรุณากรอกคำสืบค้น
        </div>
            </div>
		    <div class='col-md-2 align-self-center'>
				<button type="submit" name="submit_q"  class="btn-sm btn-secondary label_form_font" data-toggle="tooltip" data-placement="bottom" 
						title="ค้นหา" >ค้นหา</button>
            </div>
        </div>
		</form>
		<div id="maincontent">
		<?php
			$perpage = 10;
			if (isset($_GET['page'])) 
			{
				$page = $_GET['page'];
			}else 
			{
				$page = 1;
			}

			$start = ($page - 1) * $perpage;
            $ct= ($page-1) * $perpage;
			$sq = @$_REQUEST[ 'sq' ];
			$keyword = stripslashes( @$_REQUEST[ 'keyword' ] ); // removes backslashes
			$keyword = mysqli_real_escape_string( $link, $keyword ); //escapes special characters in a string
			if(isset($_POST['submit_q']))
			{			
				switch($sq)
				{
					case 'ttid':
					$sql = "SELECT `titlename`.`TitleNameID` AS ttid,titlename.TitleName_Th AS ttname_th ,titlename.TitleName_En AS ttname_en
							FROM titlename WHERE TitleNameID = $keyword
							ORDER BY TitleNameID ASC limit {$start} , {$perpage};";

					$sql2 = "SELECT `titlename`.`TitleNameID` AS ttid,titlename.TitleName_Th AS ttname_th ,titlename.TitleName_En AS ttname_en
							FROM titlename WHERE TitleNameID = $keyword
							ORDER BY TitleNameID ASC;";
					break;
					case 'ttname':
					$sql = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename WHERE CONCAT(TitleName_Th,TitleName_En) LIKE '%$keyword%'
							ORDER BY titlename.TitleNameID ASC limit {$start} , {$perpage};";

					$sql2 = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename WHERE CONCAT(TitleName_Th,TitleName_En) LIKE '%mr%'
							ORDER BY titlename.TitleNameID ASC;";
					break;	
					case 'full':
					$sql = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename ORDER BY titlename.TitleNameID ASC  limit {$start} , {$perpage};";

					$sql2 = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename ORDER BY titlename.TitleNameID ASC;";
					break;	
				}
			}
			else 
			{
							$sql = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename ORDER BY titlename.TitleNameID ASC limit {$start} , {$perpage};";

							$sql2 = "SELECT titlename.TitleNameID AS ttid,titlename.TitleName_Th AS ttname_th,titlename.TitleName_En AS ttname_en
							FROM titlename ORDER BY titlename.TitleNameID ASC;";
					  
			}
			
			 $result = $link->query( $sql );
			 $result2 = $link->query( $sql2 );
			 $total_record = mysqli_num_rows($result2);
			 $total_page = ceil($total_record / $perpage);
		?>
            <div class="row">
				<div class="col-lg-12 table-responsive">
					 <table class="table table-bordered table-hover" style="width: 100%">
						 <thead>
							<tr style="text-align: center">	 
								 <th>รหัสคำนำหน้าชื่อ</th>
								 <th>คำนำหน้าชื่อ (ไทย)</th>
								<th>คำนำหน้าชื่อ (อังกฤษ)</th>
								<th>การจัดการ</th>
								 </tr> 
								 </thead>
								 <tbody>									
								 <?php
								 	 if($result->num_rows==0)
									{
								 ?>
										<tr>
											<td style="font-weight: bold; text-align: center; color: rgb(255, 0, 0)" colspan="7">---ไม่พบข้อมูล---</td>
										</tr>
								 <?php
									}
									else
									{
										while ( $row=$result->fetch_object())
										  {
											
								 ?>
										  <tr>
										  <td style="text-align: center"><?php echo $row->ttid;?></td>
										  <?php if($row->ttname_th=="")
								 				{
									 	  ?>		<td style="text-align: center"><?php echo "-";?></td>
									 	  <?php		 
												}else
								 				{
									 	   ?>		<td ><?php echo $row->ttname_th;?></td> 
										   <?php
								 				}
										   ?>
										  <?php if($row->ttname_en=="")
								 				{
									 	  ?>		<td style="text-align: center"><?php echo "-";?></td>
									 	  <?php		 
												}else
								 				{
									 	   ?>		<td ><?php echo $row->ttname_en;?></td> 
										   <?php
								 				}
										   ?>											  
										  <td style="text-align: center">
											<img src="images/baseline_border_color_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="แก้ไข"  name="edit" value="edit" id="<?php echo $row->ttid; ?>" class="edit"/>
											 &ensp;
											  <a  href="del_title.php?ttid=<?=$row->ttid;?>" onClick="ts();">
											  <img src="images/baseline_delete_forever_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="ลบ" onClick="return confirm('ต้องการลบคำหน้าชื่อ รหัส <?php echo $row->ttid;?> ใช่หรือไม่')"/></a>
										  </td>
										  </tr>
								<?php
											 $ct++;
										 }
									}
								?>
								 </tbody>
						</table>
 <?php
		if($result->num_rows==0||$total_page==1)
		{
		}
		else
		{
?>
			 <nav class="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" href="titlename.php" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
						</li>
							<?php for($i=1;$i<=$total_page;$i++)
							{
							?>
							 	<li class="page-item"><a class="page-link" href="titlename.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
							}
							?>
							 <li class="page-item">
								<a class="page-link" href="titlename.php?page=<?php echo $total_page;?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
						</li>
				</ul>
			</nav>
<?php
			}
?>
			 		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="md_edit" tabindex="-1" role="dialog" aria-labelledby="edit_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <form class="needs-validation" method="post" action="edit_title.php" novalidate>
      <div class="modal-header">
       <h5 class="modal-title labelH_form_font" id="edit_label">แก้ไขข้อมูลประเภทสมาชิก</h5>
      </div>
      <div class="modal-body" id="show_edit">
		   
      </div>
      <div class="modal-footer">
		<input type="submit" class="btn btn-primary label_form_font" name="submit_edit" value="บันทึก"/>
        <input type="button" class="btn btn-danger label_form_font" id="btn_can_edit" value="ยกเลิก" onclick="hide_md();" />
      </div>
	 </form>
    </div>
  </div>
</div>
<div class="modal fade" id="md_add" tabindex="-1" role="dialog" aria-labelledby="add_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <form class="needs-validation" method="post" action="add_titlename.php" novalidate>
      <div class="modal-header">
        <h5 class="modal-title labelH_form_font" id="add_label">เพิ่มข้อมูลคำนำหน้าชื่อ</h5>
      </div>
      <div class="modal-body">

		    <div class="form-group">
       	    <label for="ttid" class="col-form-label label_form_font">รหัสคำนำหน้าชื่อ</label>
            <input type="text" class="form-control" id="ttid" name="ttid" pattern="([0-9]{1,2}$)"  required>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสคำนำหน้าชื่อ เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="ttname_th" class="col-form-label label_form_font">ชื่อคำนำหน้าชื่อ (ไทย)</label>
            <input type="text" class="form-control" id="ttname_th" name="ttname_th" pattern="^[ก-๙0-9-_\.]{1,255}$" required>
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อคำนำหน้าชื่อ (ไทย)
        	</div>
			</div>
		    <div class="form-group">
            <label for="ttname_en" class="col-form-label label_form_font">ชื่อคำนำหน้าชื่อ (อังกฤษ)</label>
            <input type="text" class="form-control" id="ttname_en" name="ttname_en" pattern="^[a-zA-Z0-9-_\.]{1,255}$"  >
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อคำนำหน้าชื่อ (อังกฤษ)
        	</div>
			</div>
      </div>
      <div class="modal-footer">
		<input type="submit" class="btn btn-primary label_form_font" name="submit_add" value="บันทึก"/>
        <input type="button" class="btn btn-danger label_form_font" id="btn_can_add" value="ยกเลิก" onclick="hide_md();" />
      </div>
	 </form>
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
	<script src="bootstrap/dist/js/popper.min.js"></script>
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
	<!-- InstanceBeginEditable name="script" -->
<script>  
$(document).ready(function(){
$(document).on('click', '.edit', function(){
  //$('#dataModal').modal();
  var ttid = $(this).attr("id");
  $.ajax({
   url:"sh_edit_title.php",
   method:"POST",
   data:{ttid:ttid},
   success:function(data){
    $('#show_edit').html(data);
	$('#md_edit').on('shown.bs.modal', function () {
	   		$('#ttname_th').trigger('focus');
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
					$('#ttid').trigger('focus')
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
	<!-- InstanceEndEditable -->
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
</body>
<!-- InstanceEnd --></html>