<div class="mstCategories form">
<?php echo $this->Form->create('MstCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mst Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_name');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('create_time');
		echo $this->Form->input('update_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MstCategory.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MstCategory.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Mst Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
