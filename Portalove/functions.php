<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'databazis';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
function template_header($title) {
    echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Zverax</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Vtaky</a>
            <a href="read.php"><i class="fas fa-user-circle"></i>Cicavce</a>
            <a href="readp.php"><i class="fas fa-user-circle"></i>Plazy</a>
            <a href="reado.php"><i class="fas fa-user-circle"></i>O nas</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
    echo <<<EOT
    </body>
</html>
EOT;
}
?>
