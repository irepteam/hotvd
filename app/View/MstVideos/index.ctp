<div class="mstVideos index">
	<h2><?php echo __('Mst Videos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('video_name'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('source_html'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('media_view'); ?></th>
			<th><?php echo $this->Paginator->sort('system_view'); ?></th>
			<th><?php echo $this->Paginator->sort('overall_rank'); ?></th>
			<th><?php echo $this->Paginator->sort('category_rank'); ?></th>
			<th><?php echo $this->Paginator->sort('score'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('publish_time'); ?></th>
			<th><?php echo $this->Paginator->sort('create_time'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mstVideos as $mstVideo): ?>
	<tr>
		<td><?php echo h($mstVideo['MstVideo']['id']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['video_name']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['category_id']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstCategory']['category_name']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['description']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['media_view']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['system_view']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['overall_rank']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['category_rank']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['score']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['delete_flag']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['publish_time']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['create_time']); ?>&nbsp;</td>
		<td><?php echo h($mstVideo['MstVideo']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mstVideo['MstVideo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mstVideo['MstVideo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mstVideo['MstVideo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mstVideo['MstVideo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Mst Video'), array('action' => 'add')); ?></li>
	</ul>
</div>
