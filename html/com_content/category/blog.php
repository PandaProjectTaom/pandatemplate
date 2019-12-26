<?php defined('_JEXEC') or die; ?>

<div itemscope itemtype="https://schema.org/Blog">
	<?php foreach ($this->intro_items as $item) { 
		$images = json_decode($item->images); //декодирование изображения
		$link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language));//получение ссылки на материал ?>
	<div itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
		<a href="<?php echo $link; ?>"><?php echo $item->title; // название материала ?></a>
		<img src="<?php echo $images->image_intro; //вступительное изображение материала ?>" alt="<?php echo $item->title; ?>" />
		<?php echo $item->introtext; //вступительный текст материала ?>
	</div>
	<?php } ?>
</div>