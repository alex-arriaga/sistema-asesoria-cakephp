<div class="actions">
	<h3><?php echo ('Acciones'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(('Nuevo Paciente'), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(('Buscar paciente'), array('action' => 'buscar')); ?></li>

	</ul>
</div>
<div class="pacientes index">
<h2><?php echo ('Pacientes'); ?></h2>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
                        <th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>

	<?php foreach ($pacientes as $paciente): ?>
	<tr>

		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
                <td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['codigo']); ?>&nbsp;</td>
                <td><?php echo h($paciente['Paciente']['created']); ?>&nbsp;</td>
                <td><?php echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(('Ver'), array('action' => 'view', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Html->link(('Editar'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(('Eliminar'), array('action' => 'delete', $paciente['Paciente']['id']), array(), __('Esta seguro que desea eliminar al paciente %s?', $paciente['Paciente']['nombre']." ".$paciente['Paciente']['apellido'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => ('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, comenzando en {:start}, finalizando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . ('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
