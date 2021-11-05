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
		$userObj = new UsersView();
		$userObj->showUsers("Jane");
		
		echo "<br>";
		// $userObj2 = new UsersContr();
		// $userObj2->createUser("Jane","Doe","05.09.1991");
		
	?>
</body>
</html>