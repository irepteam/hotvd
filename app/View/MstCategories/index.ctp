<div class="mstCategories index">
	<h2><?php echo __('Mst Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_name'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('create_time'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mstCategories as $mstCategory): ?>
	<tr>
		<td><?php echo h($mstCategory['MstCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($mstCategory['MstCategory']['category_name']); ?>&nbsp;</td>
		<td><?php echo h($mstCategory['MstCategory']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($mstCategory['MstCategory']['create_time']); ?>&nbsp;</td>
		<td><?php echo h($mstCategory['MstCategory']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mstCategory['MstCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mstCategory['MstCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mstCategory['MstCategory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstCategory['MstCategory']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Mst Category'), array('action' => 'add')); ?></li>
	</ul>
</div>
