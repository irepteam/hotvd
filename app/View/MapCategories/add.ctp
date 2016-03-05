<div class="mapCategories form">
<?php echo $this->Form->create('MapCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Map Category'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Map Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
