<body>
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
                    <?php $i=0; foreach ($publicidad -> result() as $item) {
                        if ($item -> tipo_publicitario == "Header Superior Derecho") { $i++; }
                     }
                     ?>
                    <?php $aleatorio = rand(1, $i);?>
                    <?php foreach ($publicidad -> result() as $item) { ?>  
                        <?php if ($item -> tipo_publicitario == "Header Superior Derecho") { ?>
                            <?php if ($item -> orden_publicitario == $aleatorio) { ?>   
                                <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                    <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                </a>  
                            <?php } ?>    
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--LOGO END-->
        <!--MAIN NAVIGATION START-->
        <div class="navigation" id="menu_header">
            <div class="navbar navbar-inverse hidden-phone hidden-tablet">
              <div class="navbar-inner" >
                <div class="container">
                  <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li style="width: 5%; text-align: center; <?php if ($this->uri->segment(1)=='') { echo 'background-color:#4c30b8;';}?>" 
                            class="purple first"><a href="<?php echo base_url();?>">Inicio<br />&nbsp;&nbsp;</a>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Talento_humano') { echo 'background-color:#edb000;';}?>" 
                            class="yellow"><a href="<?php echo base_url();?>Talento_humano">Talento<br />Humano</a>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Salud_bienestar') { echo 'background-color:#5bd9ce;';}?>" class="blue2">
                            <a href="<?php echo base_url();?>Salud_bienestar">Salud y <br /> Bienestar</a>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Vida_estilo') { echo 'background-color:#c40001;';}?>"  class="red">
                            <a href="<?php echo base_url();?>Vida_estilo">Vida y estilo<br />&nbsp;&nbsp;</a>
                            <ul class="carrot dropdown">
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Kids">Safety Kids</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Men">Safety Men</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Women">Safety Women</a></li>
                                    <li><a href="<?php echo base_url();?>Vida_estilo/articulos_vida_estilo/Reflexionemos">Reflexionemos</a></li>
                            </ul>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Seguros') { echo 'background-color:#edb000;';}?>" class="yellow">
                            <a href="<?php echo base_url();?>Seguros">Seguros<br />&nbsp;&nbsp;</a>
                        </li>
                        <li style="width: 5%;  text-align: center; <?php if ($this->uri->segment(1)=='SST') { echo 'background-color:#d92d47;';}?>" class="carrot">
                            <a href="<?php echo base_url();?>SST">SST<br />&nbsp;&nbsp;</a>
                        </li>
                        <li class="blue" style="<?php if ($this->uri->segment(1)=='Legislacion') { echo 'background-color:#00ccf1;';}?>">
                            <a href="<?php echo base_url();?>Legislacion">Legislación<br />&nbsp;&nbsp;</a>
                            <ul class="blue dropdown">
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Ambiental">Ambiental</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Laboral">Laboral</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Minera">Minera</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Petrolera">Petrolera</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Salud">Salud</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Transporte">Transporte</a></li>
                                    <li><a href="<?php echo base_url();?>legislacion/legislaciones/Otros">Otros</a></li>
                            </ul>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Infografias') { echo 'background-color:#52c206;';}?>" class="green">
                            <a href="<?php echo base_url();?>Infografias">Infografías<br />&nbsp;&nbsp;</a>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Noticias') { echo 'background-color:#c80059;';}?>" class="pink">
                            <a href="<?php echo base_url();?>Noticias">Ultima Hora<br />&nbsp;&nbsp;</a>
                        </li>
                        <li style="<?php if ($this->uri->segment(1)=='Sociales') { echo 'background-color:#4c30b8;';}?>" class="purple">
                            <a href="<?php echo base_url();?>Sociales">Sociales<br />&nbsp;&nbsp;</a>
                        </li>
                        <li class="yellow last"><a href="<?php echo base_url();?>safety_solutions">Safety<br /> Solutions</a>
                            <ul class="yellow dropdown">
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
            <!-- NAVEGACIÓN MOVILES -->
            <div class="navbar navbar-inverse hidden-desktop" >
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">Menú</a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                      <li class="active" style=" border-left-style: solid; border-left-color: #4c30b8;" ><a href="<?php echo base_url();?>">Inicio</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #edb000;" ><a href="<?php echo base_url();?>Talento_humano">Talento humano</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #5bd9ce;" ><a href="<?php echo base_url();?>Salud_bienestar">Salud y Bienestar</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #c40001;" ><a href="<?php echo base_url();?>Vida_estilo">Vida y Estilo</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #edb000;" ><a href="<?php echo base_url();?>Seguros">Seguros</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #d92d47;" ><a href="<?php echo base_url();?>SST">SST</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #00ccf1;" ><a href="<?php echo base_url();?>Legislacion">Legislaciones</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #52c206;" ><a href="<?php echo base_url();?>Infografias">Infografías</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #c80059;" ><a href="<?php echo base_url();?>Noticias">Ultima Hora</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #4c30b8;" ><a href="<?php echo base_url();?>Sociales">Sociales</a></li>
                      <li class="active" style=" border-left-style: solid; border-left-color: #edb000;" ><a href="<?php echo base_url();?>safety_solutions">Safety Solutions</a></li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
        </div>
        <!--MAIN NAVIGATION END-->
    </header>
<!-- BLQUE FRASES -->
<!-- MOSTRAR FRASES DEPENDIENDO DE LA SECCION -->
    <?php 
        $seccion = $this->uri->segment(1); if ($seccion=="") {$seccion="Home";} // se determina si está en la seccion home
        $visible = "hidden";
        foreach ($frases -> result() as $frase) { 
            if ($frase-> seccion_varios == $seccion){ 
                 $visible="visible"; 
                } 
            } 
    ?>
    <div class="breaking-news ">
        <div class="container">
            <div class="row">
                <div class="span9 hidden-phone hidden-tablet" style="visibility: <?php echo $visible; ?>;">
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
                            <input type="text" class="input-block-level" name="keyword" required>
                            <button type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN BLOQUE FRASES-->

<script type="text/javascript">
     $(window).scroll(function() {

    if ($(this).scrollTop()>100)
     {
        $('#menu_header').addClass( "menu_header_fix" );
     }
    else
     {
        $('#menu_header').removeClass( "menu_header_fix" );  
     }
 });
</script>