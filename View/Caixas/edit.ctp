<div class="caixas form">
<?php echo $this->Form->create('Caixa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Caixa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data');
		echo $this->Form->input('historico');
		echo $this->Form->input('entrada');
		echo $this->Form->input('saida');
		echo $this->Form->input('grupo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Caixa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Caixa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
