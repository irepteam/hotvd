<div class="mstMediaCategories index">
	<h2><?php echo __('Mst Media Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('media_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('media_id'); ?></th>
			<th><?php echo $this->Paginator->sort('media_category_name'); ?></th>
			<th><?php echo $this->Paginator->sort('create_time'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mstMediaCategories as $mstMediaCategory): ?>
	<tr>
		<td><?php echo h($mstMediaCategory['MstMediaCategory']['media_category_id']); ?>&nbsp;</td>
		<td><?php echo h($mstMediaCategory['MstMediaCategory']['media_id']); ?>&nbsp;</td>
		<td><?php echo h($mstMediaCategory['MstMediaCategory']['media_category_name']); ?>&nbsp;</td>
		<td><?php echo h($mstMediaCategory['MstMediaCategory']['create_time']); ?>&nbsp;</td>
		<td><?php echo h($mstMediaCategory['MstMediaCategory']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstMediaCategory['MstMediaCategory']['media_category_id, media_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Mst Media Category'), array('action' => 'add')); ?></li>
	</ul>
</div>
