<?php defined('_JEXEC') or die;
$introcount = count($this->intro_items);
$counter = 0; ?>
<div itemscope itemtype="https://schema.org/Blog">
	<h1><?php echo $this->category->title; ?></h1>
	<div>
		<?php foreach ($this->intro_items as $item) { 
			$images = json_decode($item->images); //декодирование изображения
			$link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language)); //получение ссылки на материал 
			if ($counter == 0) { ?>
				<div itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
					<?php if (!empty($images->image_intro)) { ?>
						<img src="<?php echo $images->image_intro; //вступительное изображение материала ?>" alt="<?php echo $item->title; ?>" />
					<?php } ?>	
					<div>
						<h2><a href="<?php echo $link; ?>"><?php echo $item->title; // название материала ?></a></h2>
						<?php echo $item->introtext; //вступительный текст материала ?>
					</div>
				</div>
			<?php } else { ?>
				<div itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
					<h2><a href="<?php echo $link; ?>"><?php echo $item->title; // название материала ?></a></h2>
					<?php if (!empty($images->image_intro)) { ?>
						<img src="<?php echo $images->image_intro; //вступительное изображение материала ?>" alt="<?php echo $item->title; ?>" />
					<?php } ?>
					<?php echo $item->introtext; //вступительный текст материала ?>
				</div>
			<?php } $counter++; ?>
		<?php } ?>
	</div>
</div>