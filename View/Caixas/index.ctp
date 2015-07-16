<div class="caixas index">
	<h2><?php echo __('Caixas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('historico'); ?></th>
			<th><?php echo $this->Paginator->sort('entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('saida'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($caixas as $caixa): ?>
	<tr>
		<td><?php echo h($caixa['Caixa']['id']); ?>&nbsp;</td>
		<td><?php echo h($caixa['Caixa']['data']); ?>&nbsp;</td>
		<td><?php echo h($caixa['Caixa']['historico']); ?>&nbsp;</td>
		<td><?php echo h($caixa['Caixa']['entrada']); ?>&nbsp;</td>
		<td><?php echo h($caixa['Caixa']['saida']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($caixa['Grupo']['nome'], array('controller' => 'grupos', 'action' => 'view', $caixa['Grupo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $caixa['Caixa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $caixa['Caixa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caixa['Caixa']['id']), null, __('Are you sure you want to delete # %s?', $caixa['Caixa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Caixa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
