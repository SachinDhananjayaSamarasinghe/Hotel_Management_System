<?php require_once('../Connections/localhost2.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_localhost2, $localhost2);
$query_CMSPage = "SELECT * FROM pages2 ORDER BY `Timestamp` ASC";
$CMSPage = mysql_query($query_CMSPage, $localhost2) or die(mysql_error());
$row_CMSPage = mysql_fetch_assoc($CMSPage);
$totalRows_CMSPage = mysql_num_rows($CMSPage);

$colname_PageContent = "-1";
if (isset($_GET['ID'])) {
  $colname_PageContent = $_GET['ID'];
}
mysql_select_db($database_localhost2, $localhost2);
$query_PageContent = sprintf("SELECT * FROM pages2 WHERE ID = %s", GetSQLValueString($colname_PageContent, "int"));
$PageContent = mysql_query($query_PageContent, $localhost2) or die(mysql_error());
$row_PageContent = mysql_fetch_assoc($PageContent);
$totalRows_PageContent = mysql_num_rows($PageContent);
?>
<!DOCTYPE html>
<html>
<head>
	<title>More About Services</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="xcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="w3-third">
        <p>Services</p>
        <p><?php echo $row_PageContent['PageName']; ?></p>
        <p><?php echo $row_PageContent['PageContent']; ?></p>
        <?php if ($totalRows_CMSPage > 0) { // Show if recordset not empty ?>
          <?php do { ?>
          <p><a href="SubPage2.php?ID=<?php echo $row_CMSPage['ID']; ?>" class="w3-hover-red"><?php echo $row_CMSPage['PageName']; ?></a></p>
        <?php } while ($row_CMSPage = mysql_fetch_assoc($CMSPage)); ?>
          <?php } // Show if recordset not empty ?>
    </div>
</body>
</html>
<?php
mysql_free_result($CMSPage);

mysql_free_result($PageContent);
?>
