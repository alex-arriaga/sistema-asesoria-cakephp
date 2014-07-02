<!DOCTYPE html>
<html lang="es">
<?php $this->layout='inicio';?>
    <head>  
    <meta charset="UTF-8" />  
    </head>
    
    <body>    
        <div class="container">
                <ul class="ca-menu">
                    <li>
                        <a href="#">
                           <span><img src="img/page.jpg" alt=""></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Asesoria</h2>
                             
                            </div>
                        </a>
                    </li>
                    <li>
                        
                            <span><img src="img/page2.jpg"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Laboratorio <?php echo $this->Html->link('Ingresar',array('controller'=>'pacientes', 'action'=>'index'));?></h2>
                              
                            </div>
                        
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/page3.jpg" alt=""></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Farmacia</h2>
                                
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/page4.jpg" alt=""></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Infectologia</h2>
                               
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           <span><img src="img/page5.jpg" alt=""></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Estadisticas</h2>
                                
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       
    </body>
</html>