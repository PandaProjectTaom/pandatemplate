<?php defined('_JEXEC') or die; ?>
<div class="custom item-page<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div itemprop="articleBody">
		<?php echo $this->item->text; ?>
	</div>
</div>
