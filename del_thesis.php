<?php
include("conn.php");
$tid = $_REQUEST['tid'];
$sql="DELETE FROM `thesis` WHERE `thesis`.`ThesisID` = $tid;";
$result=$link->query($sql);
if(!$result)
{
?>
 <meta http-equiv="refresh" content="0;url='admin.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
 <meta http-equiv="refresh" content="0;url='admin.php'" ? />
<script>
		var sessionName = '<?php echo "ลบข้อมูลปริญญานิพนธ์ รหัส "; echo $aid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

