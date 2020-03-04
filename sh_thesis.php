<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Master.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Thesis of CPE.</title>
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
							echo $titlename; echo $name;
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
		<div class="wrap-main">
<?php
		$i=1;
		$j=1;
		$thesis_data=array();
		$an=array();
		$thesis_data_n=array();
		$an_n=array();
		$thesis_id = $_GET['tid'];	
		$sql="SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
			category.Category_Th AS tc_th,category.`Category_En` AS tc_en,
			CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)AS pn_th,
			CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`) AS pn_en,
			`thesis`.`Abstract_Th` AS tab_th,`thesis`.`Abstract_En` AS tab_en,`thesis`.`LocationCollection` AS tlo
			FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
			LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID 
			LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
			LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
			LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor 
			LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
			WHERE `thesis`.`ThesisID` = $thesis_id ;";
	    
		$result = $link->query( $sql );
		while ( $row=$result->fetch_object())
		{
			if($i==1)
			{
				$thesis_data[$i]=$row->tid;
				$i++;
				$thesis_data[$i]=$row->ty;
				$i++;
				$thesis_data[$i]=$row->tn_th;
				$i++;
				$thesis_data[$i]=$row->tn_en;
				$i++;
				$thesis_data[$i]=$row->tc_th;
				$i++;
				$thesis_data[$i]=$row->tc_en;
				$i++;
				$thesis_data[$i]=$row->tab_th;
				$i++;
				$thesis_data[$i]=$row->tab_en;
				$i++;
				$thesis_data[$i]=$row->tlo;
				$i++;
				
			}	
			$thesis_data[$i]=$row->pn_th;
			$i++;
			$thesis_data[$i]=$row->pn_en;
			$i++;
		}
		$thesis_data = array_unique($thesis_data);
		
		$sql2="SELECT CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS an_th,
			CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`) AS an_en
			FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
			LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID 
			LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
			LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
			LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor 
			LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
			WHERE `thesis`.`ThesisID` = $thesis_id ;";
	    
		$result2 = $link->query( $sql2 );
		while ( $row2=$result2->fetch_object())
		{
			$an[$j]=$row2->an_th;
			$j++;
			$an[$j]=$row2->an_en;
			$j++;
		}
		$an = array_unique($an);
?>
			<div class="row">
				<?php
						$k = 0;
				        $q = 0;
						foreach( $thesis_data as $value ) 
						{
							$thesis_data_n[$k]=$value;
							$k++;
						}
						foreach( $an as $value ) 
						{
							$an_n[$q]=$value;
							$q++;
						}	
				?>
				
			</div>
	 <div class='col-md-10 col-md-offset-1 label_formt_font' >
		 <?php echo $thesis_data_n[2]."<br/>"; ?>
	</div>		
	<div class='col-md-10 col-md-offset-1'>
		<?php echo strtoupper($thesis_data_n[3])."<br/>"; ?>
	 </div>				           
<hr width="100%" color="#454545"><p>
				<div class="col-lg-12 col-md-offset-1">
					 <table class="table table-striped" style="width: 100%">
								 <tbody>									
								 	<tr>
										<td width="100%"><?php echo "รหัสปริญญานิพนธ์ : ".$thesis_data_n[0];?>
										&emsp;&emsp;&emsp;
										<?php echo "ประเภท : ".$thesis_data_n[4]."&ensp;(".$thesis_data_n[5].")"; ?>
										&emsp;&emsp;&emsp;
										<?php echo "ปีที่จัดทำ : ".$thesis_data_n[1];?>
										&emsp;&emsp;&emsp;
										<?php echo "สถานที่จัดเก็บ : ".$thesis_data_n[8];?>
										</td>
									 </tr>
									<?php
									 if(count($thesis_data_n)<=13)
									 {									 
									?>
									<tr>
									<?php
											if(count($thesis_data_n)==11)
											{
										?>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]; ?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Provider : ".$thesis_data_n[10]; ?>
												</td>
										<?php
											}else
											{
										?>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]; ?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]; ?>
												</td>
										<?php
											}
										?>
									</tr>
									<?php
									}
									else
									{
									?>	
									<?php
											if(count($thesis_data_n)==15)
											{
										?>   <tr>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]."&nbsp;,&nbsp;".$thesis_data_n[13]; ?></td>
											 </tr>
									         <tr>
												 <td><?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]."&nbsp;,&nbsp;".$thesis_data_n[14]; ?></td>
									         </tr>
										<?php
											}else
											{
										?>
												<tr>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]."&nbsp;,&nbsp;".$thesis_data_n[13]."&nbsp;,&nbsp;".$thesis_data_n[15]; ?></td>
												 </tr>
												 <tr>
												 <td><?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]."&nbsp;,&nbsp;".$thesis_data_n[14]."&nbsp;,&nbsp;".$thesis_data_n[16]; ?></td>
									         	</tr>
										<?php
											}
										?>
									<?php	 
									}
									?>
									
									<?php
									 	if(count($an_n)<=4)
										{
									?>
									 <tr>
									<?php
											 if(count($an_n)==2)
											 {
										?> 
												<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]; ?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Advisor : ".$an_n[1]; ?>
												</td>
										<?php
											 }else
											 {
										?>
												 <td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2] ;?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]; ?>
												</td>
										<?php
											 }
									?>
									 </tr>
									<?php
										}
									 	else
										{
											 if(count($an_n)==6)
											 {	
										?> 		
									 			<tr>
									 			<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2]."&nbsp;,&nbsp;".$an_n[4]."<br>";?></td>
												</tr>
												<tr>
												<td><?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]."&nbsp;,&nbsp;".$an_n[5]."<br>"; ?></td>
												 </tr>
										<?php  
											 }else
											 {
										?>
									 			<tr>
												<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2]."&nbsp;,&nbsp;".$an_n[4]."&nbsp;,&nbsp;".$an_n[6]."<br>";?></td>
												</tr>
												<tr>
												<td><?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]."&nbsp;,&nbsp;".$an_n[5]."&nbsp;,&nbsp;".$an_n[7]."<br>"; ?></td>
						 						</tr>
										<?php
											 }
										}
									?>
									<tr>
									 <td><?php echo "บทคัดย่อ : <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$thesis_data_n[6]; ?></td>
									</tr>
									 <tr>
									 <td><?php echo "Abstract : <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$thesis_data_n[7]; ?></td>
									</tr>
								 </tbody>
						</table>
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

<!-- InstanceEnd -->
</html>