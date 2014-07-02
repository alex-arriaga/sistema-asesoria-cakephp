<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Paciente'); ?></legend>
	<?php

		echo $this->Form->input('nombre');
                echo $this->Form->input('apellido');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('contacto_al',array('label'=>'Contacto Alternativo'));
		echo $this->Form->input('sexo', array('options' => array(
                'Femenino'=>'Femenino',
                'Masculino'=>'Masculino',
                'Otro'=>'Otro')));
		// Configurando opciones para agregar más años
		$options = array(
			'label' => 'Fecha de nacimiento', // Etiqueta
			'dateFormat'    => 'DMY',	// Formato a como lo usamos en español
			'minYear'       => date('Y') - 100, // Configuramos para que aparezcan desde el año actual hasta 100 años menos
			'maxYear'       => date('Y'),		// Aparecerá hasta el año actual como máximo
			'empty'         => array( // Etiquetas para los selects (empty options)
				'day'       => 'Día',
				'month'     => 'Mes',
				'year'      => 'Año'
			)
		);
		echo $this->Form->input('fecha_nac', $options);
	?>
	</fieldset>

<?php echo $this->Form->end(('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('Listar Pacientes'), array('action' => 'index')); ?></li>
	</ul>
</div>