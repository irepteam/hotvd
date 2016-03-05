<div class="mstVideos form">
<?php echo $this->Form->create('MstVideo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mst Video'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('video_name');
		echo $this->Form->input('category_id');
		echo $this->Form->input('description');
		echo $this->Form->input('media_view');
		echo $this->Form->input('system_view');
		echo $this->Form->input('overall_rank');
		echo $this->Form->input('category_rank');
		echo $this->Form->input('score');
		echo $this->Form->input('delete_flag');
		echo $this->Form->input('publish_time');
		echo $this->Form->input('create_time');
		echo $this->Form->input('update_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MstVideo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MstVideo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Mst Videos'), array('action' => 'index')); ?></li>
	</ul>
</div>
