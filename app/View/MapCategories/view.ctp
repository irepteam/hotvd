<div class="mapCategories view">
<h2><?php echo __('Map Category'); ?></h2>
	<dl>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($mapCategory['MapCategory']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Category Id'); ?></dt>
		<dd>
			<?php echo h($mapCategory['MapCategory']['media_category_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Map Category'), array('action' => 'edit', $mapCategory['MapCategory']['catefory_id, media_category_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Map Category'), array('action' => 'delete', $mapCategory['MapCategory']['catefory_id, media_category_id']), array('confirm' => __('Are you sure you want to delete # %s?', $mapCategory['MapCategory']['catefory_id, media_category_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Map Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Map Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
