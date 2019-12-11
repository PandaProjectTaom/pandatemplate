<?php defined('_JEXEC') or die; ?>
<?php foreach ($list as $item) { // переберает массив с материалами ?>
	<?php $images = json_decode($item->images); // декодирует json строку с изображением ?>
	<img src="<?php echo $images->image_intro; // выводит путь к изображению ?>" alt="">
	<?php echo $item->title; // выводит название материала ?>
	<?php echo $item->text; // выводит текст материала ?>
<?php } ?>