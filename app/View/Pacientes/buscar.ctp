<div class="buscar form">
<?php
	// Un ejemplo de un buscador por nombre o apellido
	// -----------------------------------------------
	// El parámetro null es para que CakePHP no preconfigure nada, pues este es un formulario
	// que "vive" totalmente independiente.
	echo $this->Form->create(null,array());
	$options = array(
		'label'=>'Buscar pacientes',
		'id'=>'inputToSearch',
		'class' => 'search-input');

	echo $this->Form->input('nombre', $options); // Creamos la caja de texto
?>
	<div id="datosPaciente" class="hidden"></div><!-- "Pintará" los datos del usuario -->
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(('Listar Pacientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
<script type="text/javascript">
(function($){
	$(document).on('ready', function(){
		var $inputToSearch = $('#inputToSearch');

		// Esta variable es muy importante y permite que los llamados funciones no importando el nombre de dominio
		// Y/o la configuración del servidor web
		var baseURL = '<?php echo Router::url('/', true); ?>';

		// 1) Se registra el evento autocomplete para que se dispare cuando el usuario escribe algo en la cajita de texto
		$inputToSearch.autocomplete({
			minLength: 2, // 2) Se comienza a buscar hasta que al menos 2 caracteres existen en la caja de texto
			source: baseURL + 'pacientes/getList/' + $inputToSearch.val(),
			focus: function( event, ui ) { // 3) Este evento se dispara cuando el usuario "señala" una de las opciones encontradas
				$inputToSearch.val( ui.item.Paciente.nombre + ' ' + ui.item.Paciente.apellido );
				return false;
			},
			select: function( event, ui ) {
				$inputToSearch.val( ui.item.Paciente.nombre + ' ' + ui.item.Paciente.apellido );

				// 4) Cuando se obtiene la lista de pacientes, se toma su ID y se hace un llamado Ajax
				//    usando el ID del paciente seleccionado
				$.ajax({
					url:  baseURL + 'pacientes/getData/' + ui.item.Paciente.id,
					type: 'GET',		// Petición tipo GET
					dataType: 'json' 	// Se espera recibir un objeto en JSON
				})
				.success(function(data) {
					// 5) Cuando el llamado Ajax fue exitoso, se "pintan" los datos justo abajo
					var $containerDataPaciente = $('#datosPaciente'),
						paciente = data.Paciente;

					// 6) Si el usuario da click en "Ver más" entonces se redirige a ver los datos completos del paciente
					var htmlWithData = '<strong>' + paciente.nombre + ' ' + paciente.apellido + '</strong>'
						+ '<p>Edad: ' + paciente.edad + '</p>'
						+ '<p><a href="' + baseURL +'pacientes/view/' + paciente.id +'" class="btn">Ver más</a></p>';

					$containerDataPaciente.html(htmlWithData);

				});

				return false;
			}
		}).autocomplete( "instance" )._renderItem = function( ul, item ) {
			return $( "<li>" )
				.append( "<a>" + item.Paciente.nombre + " " + item.Paciente.apellido + "</a>" )
				.appendTo( ul );
		};
	});// ends document.ready
})(jQuery);
</script>