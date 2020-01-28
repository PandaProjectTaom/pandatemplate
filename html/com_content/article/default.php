<?php defined('_JEXEC') or die;
$images = json_decode($this->item->images); ?>
<div itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div itemprop="articleBody">
		<h1><?php echo $this->item->title; ?></h1>
		<img src="<?php echo $images->image_intro; ?>" alt="" />
		<?php echo $this->item->text; ?>
	</div>
</div>
