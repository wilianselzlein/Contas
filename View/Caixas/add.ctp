<div class="caixas form">
<?php echo $this->Form->create('Caixa'); ?>
	<fieldset>
		<legend><?php echo __('Add Caixa'); ?></legend>
	<?php
		echo $this->Form->input('data',  array('dateFormat' => 'DMY'));
		echo $this->Form->input('historico');
		echo $this->Form->input('saida');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('entrada', array('value' => '0'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Caixas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
