<?php require_once('Connections/demo.php'); ?>
<?php
mysql_select_db($database_demo, $demo);
$query_Recordset1 = "SELECT t1.vard, t2.t22, t2.t21, t2.t23, t2.t24 FROM t2, t1";
$Recordset1 = mysql_query($query_Recordset1, $demo) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><form id="form1" name="form1" method="post" action="">
  <label>nb
  <input name="textfield" type="text" value="<?php echo $row_Recordset1['vard']; ?>" />
  </label>
</form>
<?php
phpinfo();

mysql_free_result($Recordset1);
?>