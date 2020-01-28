<?php defined('_JEXEC') or die; ?>
<nav class="menu">
 <?php foreach ($list as $i => &$item) { ?>
	<a href="<?php echo JFilterOutput::ampReplace(htmlspecialchars($item->flink, ENT_COMPAT, 'UTF-8', false)); ?>">
	<?php echo $item->title; ?></a>
<?php } ?>
</nav>
