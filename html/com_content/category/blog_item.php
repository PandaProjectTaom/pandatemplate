<?php defined('_JEXEC') or die; ?>
<?php foreach($this->item->jcfields as $jcfield) //проход по массиву с доп.полями
     {
          $item->jcFields[$jcfield->name] = $jcfield;
     }
$images = json_decode($this->item->images); //декодирование изображения
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));//получение ссылки на материал
?>

<div>
	<img src="<?php echo $images->image_intro; //вступительное изображение материала ?>" alt="" />
	<a href="<?php echo $link; ?>"><?php echo $this->item->title; // название материала ?></a>
	<?php echo $this->item->introtext; //вступительный текст материала ?>
</div>