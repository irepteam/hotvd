<div class="mstVideos view">
<h2><?php echo __('Mst Video'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Video Name'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['video_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media View'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['media_view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('System View'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['system_view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overall Rank'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['overall_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Rank'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['category_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flag'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['delete_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish Time'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['publish_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($mstVideo['MstVideo']['update_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Video'), array('action' => 'edit', $mstVideo['MstVideo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Video'), array('action' => 'delete', $mstVideo['MstVideo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstVideo['MstVideo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Videos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Video'), array('action' => 'add')); ?> </li>
	</ul>
</div>
