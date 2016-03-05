<div class="mstUsers index">
	<h2><?php echo __('Mst Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('create_time'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mstUsers as $mstUser): ?>
	<tr>
		<td><?php echo h($mstUser['MstUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['username']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['password']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['role']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['create_time']); ?>&nbsp;</td>
		<td><?php echo h($mstUser['MstUser']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mstUser['MstUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mstUser['MstUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mstUser['MstUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstUser['MstUser']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mst User'), array('action' => 'add')); ?></li>
	</ul>
</div>
