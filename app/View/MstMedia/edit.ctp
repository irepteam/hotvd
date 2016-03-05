<div class="mstMedia form">
<?php echo $this->Form->create('MstMedia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mst Media'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('media_name');
		echo $this->Form->input('score_rate');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('create_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MstMedia.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MstMedia.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Mst Media'), array('action' => 'index')); ?></li>
	</ul>
</div>
