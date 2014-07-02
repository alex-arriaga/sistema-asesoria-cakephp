<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	
        <title>Sistema de seguimiento de HIV</title> 
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array ('demo','cake.generic'));
                echo $this->Html->script(array('jquery-ui-1.10.4.custom','jquery-ui-1.10.4.custom.min','jquery-1.10.2'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
 <header>
     <div class="header">
                <?php echo $this->Html->link('Inicio', array('controller'=>'pages', 'action'=>'display','home'));?>
                <span class="right">
                <a href="#"><strong> CERRAR SESION</strong></a>
                </span>
                
    <div class="clr"></div>
    </div>
	
    <div>
    <h1>Sistema de Seguimiento de Asesoria de HIV</h1>    
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
<?php echo $this->Js->writeBuffer() ?>	
</body>
</html>
