<div class="caixas view">
<h2><?php  echo __('Caixa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historico'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['historico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrada'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saida'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['saida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($caixa['Grupo']['nome'], array('controller' => 'grupos', 'action' => 'view', $caixa['Grupo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caixa'), array('action' => 'edit', $caixa['Caixa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caixa'), array('action' => 'delete', $caixa['Caixa']['id']), null, __('Are you sure you want to delete # %s?', $caixa['Caixa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
