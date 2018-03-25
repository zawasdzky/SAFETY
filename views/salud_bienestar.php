    <div class="main-contant">
        <div class="container">
            <h2 class="h-style">Salud y Bienestar</h2>
            <div class="row">
                <div class="span8">
                    <section>
                        <!--
                            <article class="page-slider">
                            <div class=" slider flexslider">
                              <ul class="slides">
                            <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                            <img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto1; ?>" alt="<?php echo $item-> titulo_salud;  ?>">
                                        </a>
                                        <div class="caption">
                                            <h2><?php echo $item -> titulo_salud ?></h2>
                                        </div>
                                    </figure>
                                </li>
                                <?php } ?>
                              </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                              <ul class="slides">
                            <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                <li><img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto1; ?>" alt="<?php echo $item-> titulo_salud;  ?>"></li>
                            <?php } ?>
                              </ul>
                            </div>
                            </article>
                        -->
                    </section>

                    <section>
                        <div class="featured-post">
                            <ul id="paginar">
                                <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                    <li>
                                        <div class="thumb">
                                            <figure>
                                            <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>"><img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto0; ?>" alt="<?php echo $item-> titulo_salud;  ?>"></a>
                                            </figure>
                                            <div class="caption">
                                                <p><?php echo $item ->  titulo_salud; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <!-- PAUTA CENTRAL HORIZONTAL -->
                            <div>
                                <?php foreach ($publicidad -> result() as $item) { ?>  
                                    <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal Salud y Bienestar") { ?>   
                                        <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                        </a>  
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <!--FIN PAUTA CENTRAL HORIZONTAL  -->                            
                        </div>
                    </section>
                    
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <section style="margin-top: 50px;">
                        <div class="row">
                            <div class="span6 span-8">
                                <div class="health-recent-posts">
                                    <h2 class="h-style">Mas Leídos</h2>
                                    <ul class="row" id="paginar2">
                                    <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                        <li class="span3">
                                            <div class="thumb hover-style">
                                            <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                                <img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto0; ?>" alt="<?php echo $item-> titulo_salud;  ?>" width="264">
                                            </a>
                                            </div>
                                            <div class="text">
                                                <p><?php echo $item ->  titulo_salud; ?></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2 visible-desktop">
                                <div class="add2">
                             <!-- PAUTAS PUBLICITARIA CENTRAL -->
                                <?php foreach ($publicidad -> result() as $item) { ?>
                                    <?php if ($item -> tipo_publicitario == "Pauta Vertical Central Salud y Bienestar") { ?>
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                    <?php } ?>
                                <?php } ?>
                             <!-- FIN PAUTAS PUBLICITARIA CENTRAL -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--GALLERY SECTION END-->
                </div>
<!-- INICIO BLOQUE DERECHO-->                
                <div class="span4">
                    <div class="sidebar">
                    <!-- PAUTAS PUBLICITARIAS -->
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Salud y Bienestar") { ?>
                                    <?php if ( ($item -> orden_publicitario < 4)) { ?>
                                        <div class="widget widget-new-ad">
                                            <div class="widget">
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                    <!-- FIN PAUTAS PUBLICITARIAS -->
                         <!--LEGISLACIONES START-->
                        <div class="widget widget-related-post">
                            <h2>Últimas Legislaciones</h2>
                            <ul>
                             <?php foreach ($legislaciones -> result() as $legislacion) { ?>
                                <li>
                                    <a href="<?php echo base_url();?>legislaciones/<?php echo $legislacion-> ficha_legislacion; ?>" class="color" ><?php echo $legislacion ->  titulo_legislacion; ?></a>
                                    <p> <?php echo $legislacion ->  categoria_legislacion; ?>: <small> <?php echo $legislacion ->  tipo_legislacion; ?></small></p>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <!--LEGISLACIONES END-->
                    <!-- PAUTAS PUBLICITARIAS -->
                        <div class="widget widget-new-ad">
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Salud y Bienestar") { ?>
                                    <?php if ( ($item -> orden_publicitario == 4)) { ?>
                                        <div class="widget">
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <!-- FIN PAUTAS PUBLICITARIAS -->
                    <!-- REVISTA EN LINEA  -->
                    <section>
                        <?php $this->load->view('includes/inscripcion_revista');  ?>
                    </section>
                    <!-- END REVISTA EN LINEA  -->
                    <!-- PAUTAS PUBLICITARIAS -->
                        <div class="widget widget-new-ad">
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Salud y Bienestar") { ?>
                                    <?php if ( ($item -> orden_publicitario == 5)) { ?>
                                        <div class="widget">
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <!-- FIN PAUTAS PUBLICITARIAS -->
                    <section>
                    <!--FACEBOOK FEEDS WIDGET START-->
                        <?php $this->load->view('includes/facebook_widget.php');  ?>
                    <!--FACEBOOK FEEDS WIDGET END--> 
                    </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>
<script type="text/javascript">
   $('#paginar').paginate({
  // how many items per page
  perPage:                9,      
  // boolean: scroll to top of the container if a user clicks on a pagination link        
  autoScroll:             true,           
  // which elements to target
  scope:                  '',         
  // defines where the pagination will be displayed    
  paginatePosition:       ['bottom'],     
  // Pagination selectors
 // containerTag:           'nav',
  paginationTag:          'ul',
  itemTag:                'li',
  //linkTag:                'a',
  // Determines whether or not the plugin makes use of hash locations
  useHashLocation:        true,           
  // Triggered when a pagination link is clicked
  onPageClick:            function() {}   
});
   $('#paginar2').paginate({
  // how many items per page
  perPage:                4,      
  // boolean: scroll to top of the container if a user clicks on a pagination link        
  autoScroll:             true,           
  // which elements to target
  scope:                  '',         
  // defines where the pagination will be displayed    
  paginatePosition:       ['bottom'],     
  // Pagination selectors
 // containerTag:           'nav',
  paginationTag:          'ul',
  itemTag:                'li',
  //linkTag:                'a',
  // Determines whether or not the plugin makes use of hash locations
  useHashLocation:        true,           
  // Triggered when a pagination link is clicked
  onPageClick:            function() {}   
});   
</script>    
