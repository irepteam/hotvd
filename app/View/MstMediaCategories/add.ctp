<div class="mstMediaCategories form">
<?php echo $this->Form->create('MstMediaCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Mst Media Category'); ?></legend>
	<?php
		echo $this->Form->input('media_category_id');
		echo $this->Form->input('media_id');
		echo $this->Form->input('media_category_name');
		echo $this->Form->input('create_time');
		echo $this->Form->input('update_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mst Media Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
