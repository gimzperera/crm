<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connect.php';

if (isset($_POST['contact_create'])) {
	$sql1 = "INSERT INTO contact(`contact_name`, `email`, `contact_number`)
VALUES
('$_POST[contact_name]','$_POST[email]','$_POST[contact_number]')";
	$sql2 = "INSERT INTO customer_contact(`customer_name`, `contact_name`)VALUES('$_POST[customer_name]','$_POST[contact_name]')";
	if (!mysql_query($sql1) && !mysql_query($sql2)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record added";
}
elseif (isset($_POST['contact_search'])) {
	$sql = "Select * from contact where customer_name='$customer_name'";
	$result = mysql_query($query);
	$rows = mysql_num_rows($result);
	if ($rows == 1) {
		while ($rs = mysql_fetch_array($result)) {
			$company_name = $rs["customer_name"];
			$contact_name = $rs["contact_name"];
			$email = $rs["email"];
			$contact_number = $rs["contact_no"];
		}
	}
}
else {
	$sql = "Update contact SET contact_name='contact_name', email='email', contact_number='contact_number' where contact_name='$contact_name'";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record updated";
}

mysql_close($con)
?>
</body>
</html>