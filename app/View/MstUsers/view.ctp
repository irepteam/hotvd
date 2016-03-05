<div class="mstUsers view">
<h2><?php echo __('Mst User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($mstUser['MstUser']['update_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst User'), array('action' => 'edit', $mstUser['MstUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst User'), array('action' => 'delete', $mstUser['MstUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstUser['MstUser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
