<div class="mapCategories index">
	<h2><?php echo __('Map Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('media_category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mapCategories as $mapCategory): ?>
	<tr>
		<td><?php echo h($mapCategory['MapCategory']['category_id']); ?>&nbsp;</td>
		<td><?php echo h($mapCategory['MapCategory']['media_category_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mapCategory['MapCategory']['catefory_id, media_category_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mapCategory['MapCategory']['catefory_id, media_category_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mapCategory['MapCategory']['catefory_id, media_category_id']), array('confirm' => __('Are you sure you want to delete # %s?', $mapCategory['MapCategory']['catefory_id, media_category_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Map Category'), array('action' => 'add')); ?></li>
	</ul>
</div>
