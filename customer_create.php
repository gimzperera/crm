
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include 'connect.php';

if (isset($_POST['create'])) {
	$sql = "INSERT INTO customer(`company_name`, `address`, `brn`, `website`)
VALUES
('$_POST[company_name]','$_POST[address]','$_POST[brn]','$_POST[website]')";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record added";
	$to = 'srilanka.jobs@webnatics.biz';
	$subject = 'Customer';
	$message = '1 Customer created';
	$headers = 'From: webmaster@example.com' . "rn" . 'Reply-To: webmaster@example.com' . "rn" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	echo 'Email Sent.';
}
elseif (isset($_POST['search'])) {
	$sql = "Select * from customer where company_name='$company_name'";
	$result = mysql_query($query);
	$rows = mysql_num_rows($result);

	//     //echo'USER EXIST';

	if ($rows == 1) {
		while ($rs = mysql_fetch_array($result)) {
			$company_name = $rs["company_name"];
			$address = $rs["address"];
			$brn = $rs["brn"];
			$website = $rs["website"];
		}
	}
}
elseif (isset($_POST['edit'])) {
	$sql = "Update customer SET company_name='company_name', address='address', brn='brn', website='website' where company_name='$company_name'";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record updated";
}
else {
	$sql = "Delete * from contract where company_name='company_name'";
	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}

	echo "1 record deleted";
}

mysql_close($con)
?>
</body>
</html>