<?php include 'inc/class-autoload.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP and MySQL</title>
</head>
<body>
	<?php
		$obj = new Test();
		echo $obj->setUsersStmt('John','Doe','17.03.2000');
	?>
</body>
</html>