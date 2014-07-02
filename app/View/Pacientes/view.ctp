<div class="pacientes view">
<h2><?php echo ('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Apellido'); ?></dt>
                
		<dd>
			<?php echo h($paciente['Paciente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto Al'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['contacto_al']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['edad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo ('Aciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(('Editar Paciente'), array('action' => 'edit', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(('Eliminar Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Esta seguro que desea eliminar al paciente  %s?', $paciente['Paciente']['nombre']." ".$paciente['Paciente']['apellido'])); ?> </li>
		<li><?php echo $this->Html->link(('Listar Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(('Nuevo Paciente'), array('action' => 'add')); ?> </li>
	</ul>
</div>

