<?php defined('_JEXEC') or die; ?>
<div itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div itemprop="articleBody">
	<?php $images = json_decode($this->item->images);?>
	<h1><?php echo $this->item->title; ?></h1>
	<img src="<?php echo $images->image_intro; //вступительное изображение материала ?>" alt="" />
	<?php echo $this->item->text; ?>
	</div>
</div>
