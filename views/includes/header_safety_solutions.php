<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER END-->
    <!--BUSCADOR MOVILES  START-->
    <div class="row">
        <div id="b-news" style="display: none;">
        </div>
            <div class="search hidden-desktop hidden-tablet">
             <form action="<?php echo base_url(); ?>safety_solutions/resultado_busqueda/" method ="POST">
                <input type="text" class="input-block-level" name="keyword" placeholder="¿Que producto o servicio necesitas">
                <button type="submit" value="Submit">Buscar</button>         
            </form> 
            </div>
    </div>
    <!--BUSCADOR MOVILES  END-->
    <!--BUSCADOR DESKTOP START-->
    <div class="row fondo_franja">
        <div class="container hidden-phone hidden-tablet">
            <br><br><br><br><br><br>
            <div class="search span4 pull-right">
                <form action="<?php echo base_url(); ?>safety_solutions/resultado_busqueda/" method ="POST">
                    <input type="text" class="input-block-level input_lupa" name="keyword" placeholder="¿Que producto o servicio necesitas?">
                    <button type="submit" value="Submit">Buscar</button>
                </form> 
            </div>  
        </div>        
    </div>
    <!--BUSCADOR DESKTOP END-->
    <!--MENU DE NAVEGACION 2-->
    <div class="container" >
      <div class="navbar  yamm">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav1">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
               <a class="brand hidden-desktop" href="#" > Menú </a>
                <div class="nav-collapse collapse" id="nav1">
                    <ul class="nav">
                   <!--  <li style="margin-left: 25%;" class="hidden-phone">  &nbsp; </li> -->
                        <li style=" border-bottom-style: solid; border-bottom-color: #52c206;"><a href="<?php echo base_url();?>safety_solutions/"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                        <li style=" border-bottom-style: solid; border-bottom-color: #d92d47;"><a href="<?php echo base_url();?>safety_solutions/productos">Productos</a></li>
                        <li class="dropdown" style=" border-bottom-style: solid; border-bottom-color: #edb000;">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Categorias <b class="caret"></b> </a>
                          <ul class="dropdown-menu">
                            <li>
                              <div class="yamm-content">
                                <div class="span10" >
                                  <div class="accordion" id="accordion" style="font-size: 12px;">
                                      <?php  $i=0; foreach ($menu_categorias -> result() as $categoria) { ?>
                                        <?php if (($categoria -> id_padre ) == '0'): ?>
                                      <div class="span3">
                                        <div class="accordion-group">
                                          <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>">
                                            <strong><?php echo $categoria -> nombre_categoria ?></strong>
                                            </a>
                                          </div>
                                          <div id="<?php echo $i; ?>" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                             <?php $id_categoria = $categoria -> id_categoria ?>
                                                <a href="<?php echo base_url();?>safety_solutions/productos_categoria/<?php echo $id_categoria ?>"> 
                                                - <?php echo $categoria -> nombre_categoria ?></a>
                                                <ul>
                                                  <?php  foreach ($menu_categorias -> result() as $subcategoria) { ?>
                                                    <?php if ($id_categoria == ($subcategoria -> id_padre)): ?>
                                                          <li> 
                                                           <a href="<?php echo base_url();?>safety_solutions/productos_categoria/<?php echo $subcategoria -> id_categoria ?>">
                                                           <?php echo $subcategoria -> nombre_categoria ?>
                                                           </a>
                                                           </li>
                                                    <?php endif ?>
                                                  <?php   } ?>
                                                </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                        <?php endif ?>
                                      <?php  $i++; } ?>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown" style=" border-bottom-style: solid; border-bottom-color: #4c30b8;">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Marcas <b class="caret"></b> </a><!-- Classic Dropdown -->
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <?php foreach ($menu_marcas -> result() as $marca) { ?>
                                <li><a href="<?php echo base_url();?>safety_solutions/productos_marca/<?php echo $marca -> id_marca ?>"><?php echo $marca -> nombre_marca ?></a></li>
                            <?php  } ?>
                          </ul>
                        </li>
                        <li class="dropdown" style=" border-bottom-style: solid; border-bottom-color: #00ccf1;">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profesionales <b class="caret"></b> </a><!-- Classic Dropdown -->
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <?php foreach ($menu_profesionales -> result() as $profesional) { ?>
                                <li><a href="<?php echo base_url();?>safety_solutions/profesionales_categoria/<?php echo $profesional -> id_categoria ?>"><?php echo $profesional -> nombre_categoria ?></a></li>
                            <?php  } ?>
                          </ul>
                        </li>
                    </ul>
                </div>
          </div>
        </div>
      </div>


    </div>
    <!--FIN DE NAVEGACION 2-->
    <!--SCRIPT DEL MEGAMENU-->
