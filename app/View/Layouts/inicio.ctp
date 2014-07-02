<!DOCTYPE html>
<html lang="es">
<head>
                <?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('reset','demo','style6'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                ?>
                <title>Sistema de seguimiento de HIV</title>    
</head>

<body>
<header>
     <div class="header">
                <span class="right">
                <a href="#"><strong>&laquo; CERRAR SESION</strong></a>
                </span>
                
    <div class="clr"></div>
    </div>
	<div id="container">
		<div id="header">
                    <h1>Sistema de Seguimiento de asesoria de HIV</h1>    
                </div>
        </div>    
</header>        
    <seccion>
                <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
       
    </seccion>	
    <footer>
                <div id="footer">
                    <a> Derechos reservados &copy; Serrano Patricia</a>
		</div>    
    </footer>
	
</body>
</html>
