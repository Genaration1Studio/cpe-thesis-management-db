<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
	<?php
	include( "conn.php" );
	$username = stripslashes( $_REQUEST[ 'username' ] ); // removes backslashes
	$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
	$password = stripslashes( $_REQUEST[ 'pass' ] );
	$password = mysqli_real_escape_string( $link, $password );

	$sql1 = "SELECT* FROM admin WHERE admin.AdminID='$username' AND admin.Admin_pass='$password'";
	$sql2 = "SELECT* FROM member WHERE member.MemID='$username' AND member.Mem_pass='$password'";
	$result1 = $link->query( $sql1 );
	$result2 = $link->query( $sql2 );
	if ( $result2->num_rows == 0 ) {
		if( $result1->num_rows == 0){
		?>
	<script>
		var sessionName3 = '<?php echo "Username หรือ Password ไม่ถูกต้อง ! "; echo "กรุณาลองใหม่อีกครั้ง "; ?>';
		alert( sessionName3 );
	</script>
	<meta http-equiv="refresh" content="0;url='index.php'"/>
	<?php
	}else {
		$row = $result1->fetch_object();
		$_SESSION[ "AdminID" ] = $username;
		$_SESSION[ "Fname" ] = $row->Fname;
		$_SESSION[ "Lname" ] = $row->Lname;

		?>
	<script>
		var sessionName1 = '<?php echo "ยินดีต้อนรับเข้าสู่ะบบ Admin "; echo $_SESSION['Fname'];?>';
		alert( sessionName1 );
	</script>
	<meta http-equiv="refresh" content="0;url='admin.php'"/>
	<?php
	}}else{
		$row = $result2->fetch_object();
		$_SESSION[ "MemberID" ] = $username;
		$_SESSION[ "Fname" ] = $row->Fname;
		$_SESSION[ "Lname" ] = $row->Lname;

		?>
	<script>
		var sessionName2 = '<?php echo "ยินดีต้อนรับเข้าสู่ะบบ คุณ "; echo $_SESSION['Fname']; echo " "; echo $_SESSION['Lname'];?>';
		alert( sessionName2 );
	</script>
	<meta http-equiv="refresh" content="0;url='main.php'"/>
	<?php		
		}
	?>
</body>

</html>