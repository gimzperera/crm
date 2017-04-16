<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connect.php';

if (isset($_POST['create_activity'])) {
	$sql = "INSERT INTO activity(`date`, `type`, `outcome`, `sales_person_name`, `customer_name`)
VALUES
('$_POST[date]','$_POST[type]','$_POST[outcome]','$_POST[sales_person_name]', '$_POST[customers_name]')";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record added";
}
elseif (isset($_POST['search_activity'])) {
	$sql = "Select * from activity where customer_name='$customers_name'";
	$result = mysql_query($query);
	$rows = mysql_num_rows($result);

	//     //echo'USER EXIST';

	if ($rows == 1) {
		while ($rs = mysql_fetch_array($result)) {
			$customers_name = $rs["customers_name"];
			$date = $rs["date"];
			$type = $rs["type"];
			$outcome = $rs["outcome"];
			$sales_person_name = $rs["sales_person_name"];
		}
	}
}
else {
	$sql = "Update activity SET customer_name='customers_name', date='date', type='type', outcome='outcome', sales_person_name='Sales_person_name' where customer_name='$customers_name'";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record updated";
}

mysql_close($con)
?>
</body>
</html>