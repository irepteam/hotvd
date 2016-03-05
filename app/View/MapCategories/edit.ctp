<div class="mapCategories form">
<?php echo $this->Form->create('MapCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Map Category'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('media_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MapCategory.catefory_id, media_category_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MapCategory.catefory_id, media_category_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Map Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
