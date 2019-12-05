<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->setHtml5(true);
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/script.js', $type = 'text/javascript', $defer = false, $async = false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<jdoc:include type="head"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes"/>
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