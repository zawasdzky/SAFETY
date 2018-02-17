<div class="wrapper">
    <!--HEADER START-->
    <header>
        <!--LOGO START-->
        <div class="logo-container">
            <div class="container">
                <div class="logo">
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt=""></a>
                </div>
                <div class="add">
                    <?php foreach ($publicidad -> result() as $item) { ?>  
                        <?php if ($item -> tipo_publicitario == "Header Superior Derecho") { ?>   
                            <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                            </a>  
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--LOGO END-->
        <!--MAIN NAVIGATION START-->
        <div class="navigation">
            <div class="navbar navbar-inverse">
              <div class="navbar-inner" >
                <div class="container">
                  <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li style="width: 5%;" class="purple first"><a href="<?php echo base_url();?>">Inicio<br />&nbsp;&nbsp;</a></li>
                        <li class="yellow"><a href="<?php echo base_url();?>Talento_humano">Talento<br />Humano</a></li>
                        <li class="blue2"><a href="<?php echo base_url();?>Salud_bienestar">Salud y <br /> Bienestar</a></li>
                        <li class="red"><a href="<?php echo base_url();?>Vida_estilo">Vida y estilo<br />&nbsp;&nbsp;</a>
                            <ul class="carrot">
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Kids">Safety Kids</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Men">Safety Men</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Women">Safety Women</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Reflexionemos">Reflexionemos</a></li>
                            </ul>
                        </li>
                        <li class="yellow"><a href="<?php echo base_url();?>Seguros">Seguros<br />&nbsp;&nbsp;</a></li>
                        <li style="width: 5%;" class="carrot"><a href="<?php echo base_url();?>SST">SST<br />&nbsp;&nbsp;</a></li>
                        <li class="blue"><a href="<?php echo base_url();?>Legislacion">Legislación<br />&nbsp;&nbsp;</a>
                            <ul class="blue">
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Ambiental">Ambiental</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Laboral">Laboral</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Minera">Minera</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Petrolera">Petrolera</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Salud">Salud</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Transporte">Transporte</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Otros">Otros</a></li>
                            </ul>
                        </li>
                        <li class="green"><a href="<?php echo base_url();?>Infografias">Infografías<br />&nbsp;&nbsp;</a></li>
                        <li class="pink"><a href="<?php echo base_url();?>Noticias">Ultima Hora<br />&nbsp;&nbsp;</a></li>
                        <li class="purple"><a href="<?php echo base_url();?>Sociales">Sociales<br />&nbsp;&nbsp;</a></li>
                        <li class="yellow last"><a href="<?php echo base_url();?>safety_solutions">Safety<br /> Solutions</a>
                            <ul class="yellow">
                                <li><a href="<?php echo base_url();?>safety_solutions/productos">Productos</a></li>
                                <li><a href="<?php echo base_url();?>safety_solutions">Servicios</a></li>
                                <li><a href="<?php echo base_url();?>safety_solutions">Profesionales</a></li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--MAIN NAVIGATION END-->
    </header>
    <!--HEADER END-->
        <!--NEWS START-->
    <?php 
        $seccion = $this->uri->segment(1); if ($seccion=="") {$seccion="Home";} // se determina si está en la seccion home
        $visible = "hidden";
        foreach ($frases -> result() as $frase) { 
            if ($frase-> seccion_varios == $seccion){ 
                 $visible="visible"; 
                } 
            } 
    ?>

    <div class="breaking-news">
        <div class="container">
            <div class="row">
                <div class="span9" style="visibility: <?php echo $visible; ?>;">
                    <h3>Frases</h3>
                    <div id="b-news">
                      <ul>
                         <?php  foreach ($frases -> result() as $frase) { ?>
                            <?php if ($frase-> seccion_varios == $seccion){ ?>
                                <li> <?php echo $frase -> texto_varios; ?></li>
                            <?php } ?>
                        <?php } ?>
                      </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="search">
                        <form action="<?php echo base_url();?>Resultado_busqueda/" method="POST">
                            <input type="text" class="input-block-level" name="keyword">
                            <button type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NEWS END-->