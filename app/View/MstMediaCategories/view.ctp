<div class="mstMediaCategories view">
<h2><?php echo __('Mst Media Category'); ?></h2>
	<dl>
		<dt><?php echo __('Media Category Id'); ?></dt>
		<dd>
			<?php echo h($mstMediaCategory['MstMediaCategory']['media_category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Id'); ?></dt>
		<dd>
			<?php echo h($mstMediaCategory['MstMediaCategory']['media_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Category Name'); ?></dt>
		<dd>
			<?php echo h($mstMediaCategory['MstMediaCategory']['media_category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($mstMediaCategory['MstMediaCategory']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($mstMediaCategory['MstMediaCategory']['update_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Media Category'), array('action' => 'edit', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Media Category'), array('action' => 'delete', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Media Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Media Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
