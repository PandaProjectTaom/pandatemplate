<?php
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<jdoc:include type="head"/>
	<meta charset="UTF-8">
	<link rel="preload" href="style.css" as="style">
	<link rel="preload" href="script.js" as="script">
</head>
<body>
	<header class="menu">
		<jdoc:include type="modules" name="menu" style="xhtml" />
	</header>
	<main class="container">
		<div class="top">
			<jdoc:include type="modules" name="top" style="xhtml" />
		</div>
		<div class="middle">
			<jdoc:include type="modules" name="middle" style="xhtml" />
		</div>
		<div class="bottom">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
	</main>
	<footer class="footer">
		<jdoc:include type="modules" name="footer" style="xhtml" />
	</footer>
</body>
</html>