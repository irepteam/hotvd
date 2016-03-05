<div class="mstMedia view">
<h2><?php echo __('Mst Media'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mstMedia['MstMedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Name'); ?></dt>
		<dd>
			<?php echo h($mstMedia['MstMedia']['media_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Rate'); ?></dt>
		<dd>
			<?php echo h($mstMedia['MstMedia']['score_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($mstMedia['MstMedia']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($mstMedia['MstMedia']['create_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mst Media'), array('action' => 'edit', $mstMedia['MstMedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mst Media'), array('action' => 'delete', $mstMedia['MstMedia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstMedia['MstMedia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mst Media'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mst Media'), array('action' => 'add')); ?> </li>
	</ul>
</div>
