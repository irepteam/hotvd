<div class="mstUsers form">
<?php echo $this->Form->create('MstUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Mst User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
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

		<li><?php echo $this->Html->link(__('List Mst Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
