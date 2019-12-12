<?php defined('_JEXEC') or die; ?>
<?php foreach($this->item->jcfields as $jcfield)
     {
          $item->jcFields[$jcfield->name] = $jcfield;
     }
$images = json_decode($this->item->images); 
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); 
?>

<div class="card">
	<a href="<?php echo $link; ?>">
		<img src="<?php echo $images->image_intro; ?>" class="card-img-top" alt="" />
		<div class="card-body">
			<div><?php echo $this->item->title;?></div>
			<?php echo $this->item->introtext;?>
		</div>
	</a>
</div>


