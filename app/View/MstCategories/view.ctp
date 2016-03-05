<div class="mstCategories view">
<h2><?php echo __('Mst Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstCategory['MstCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($mstCategory['MstCategory']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($mstCategory['MstCategory']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($mstCategory['MstCategory']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($mstCategory['MstCategory']['update_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Category'), array('action' => 'edit', $mstCategory['MstCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Category'), array('action' => 'delete', $mstCategory['MstCategory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstCategory['MstCategory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
