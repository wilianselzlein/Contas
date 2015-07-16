<div class="grupos view">
<h2><?php  echo __('Grupo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo'), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('controller' => 'caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('controller' => 'caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Caixas'); ?></h3>
	<?php if (!empty($grupo['Caixa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Historico'); ?></th>
		<th><?php echo __('Entrada'); ?></th>
		<th><?php echo __('Saida'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Caixa'] as $caixa): ?>
		<tr>
			<td><?php echo $caixa['id']; ?></td>
			<td><?php echo $caixa['data']; ?></td>
			<td><?php echo $caixa['historico']; ?></td>
			<td><?php echo $caixa['entrada']; ?></td>
			<td><?php echo $caixa['saida']; ?></td>
			<td><?php echo $caixa['grupo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'caixas', 'action' => 'view', $caixa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'caixas', 'action' => 'edit', $caixa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'caixas', 'action' => 'delete', $caixa['id']), null, __('Are you sure you want to delete # %s?', $caixa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Caixa'), array('controller' => 'caixas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
