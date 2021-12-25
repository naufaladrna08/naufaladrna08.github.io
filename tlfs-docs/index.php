<?php
require_once "phpv/Parsedown.php";

$pd = new Parsedown();
$page = ""; $css = ""; $head = "";

if (isset($_GET['p'])) {
	$page = 'docs/' . $_GET['p'] . '.md';
	$css  = 'style.css';
	$head = 'html/header-kernel.php';
} else {
	$page = 'index.md';
	$css  = 'home.css';
	$head = 'html/header-home.php';
}
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> TLFS Documentation </title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="<?= $css ?>" rel="stylesheet">
</head>
<style>
	body {
		font-family: 'Open Sans', sans-serif;
		font-size: 18px;
		line-height: 24px;
	}
</style>
<body>
	<?php require_once($head) ?>

	<div class="container">
		<?= $pd->text(file_get_contents($page)) ?>
	</div>
	
	<br><br>
</body>
</html>
