<?php
# Next and Previous Page
$files = scandir('docs/');
$next  = ""; $prev = "";
array_shift($files);
array_shift($files);

for ($i = 0; $i < count($files); $i++) 	{
	if (($_GET['p'] . '.md') == $files[$i]) {
		if ($i == 0) {
			$prev = str_replace('.md', '', $files[$i]);
		} else {
			$prev = str_replace('.md', '', $files[$i - 1]);
		}

		if ($i == count($files) - 1) {
			$next = str_replace('.md', '', $files[$i]);
		} else {
			$next = str_replace('.md', '', $files[$i + 1]);
		}
	}	
}
?>

<header>
  <h1> InOS </h1>
  <p> InOS - InKernel - InWM </p>

  <a href="?p=<?= $prev ?>"> Sebelumnya </a> -
  <a href="?p=<?= $next ?>"> Selanjutnya </a>
</header>