<?php
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<jdoc:include type="head"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes"/>
	<link href="css/style.css" rel="stylesheet" >
	<script src="js/script.js"></script>
</head>
<body class="<?php echo $active->alias; ?>">
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