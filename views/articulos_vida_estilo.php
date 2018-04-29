    <div class="main-contant">
    	<div class="container">
            <div class="row">
                <div class="span8">
                    <?php $detalle = $articulos_vida_estilo->row(); ?>
                	<section>
                    	<div class="health-news sports-news">
                            <h2 class="h-style">Vida y Estilo <?php echo $detalle->tipo_vida_estilo; ?></h2>
                            <ul id="paginar">
                                <!--LIST ITEM START-->
                                <?php foreach ($articulos_vida_estilo -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$item-> url_amigable_vida_estilo; ?>"><img src="<?php echo base_url()."fotos_vida_estilo/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="250"></a>
                                    </figure>
                                    <div class="text">
                                        <h2><a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$item-> url_amigable_vida_estilo; ?>"><?php echo $item -> titulo_vida_estilo; ?></a></h2>
                                        <p><?php echo $item -> descripcion_vida_estilo; ?></p>
                                    </div>
                                </li>
                                <?php } ?>
                                <!--LIST ITEM END-->
                            </ul>
                            <!-- PAUTA CENTRAL HORIZONTAL -->
                            <div>
                                <?php foreach ($publicidad -> result() as $item) { ?>  
                                    <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal Vida y Estilo") { ?>   
                                        <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                        </a>  
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <!--FIN PAUTA CENTRAL HORIZONTAL -->                               
                        </div>
                    </section>
                </div>

                <div class="span4">
                    <div class="sidebar">

                        <!-- PAUTA COLUMAN DERECHA -->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Vida y Estilo") { ?>
                                <?php if (($item -> orden_publicitario == 1) || ($item -> orden_publicitario == 2)) { ?>
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

                    	<!--LEGISLACION-->
                    	<div class="widget widget-top3">
                            <h2>Últimos Productos </h2>
                            <ul>
                                <?php foreach ($productos_solutions_limit -> result() as $producto) { ?>
                                <li>
                                    <figure> 
                                        <a href="<?php echo base_url();?>fotos_productos/<?php echo $producto-> foto0; ?>">
                                            <img alt="<?php echo $producto ->  nombre_producto; ?>" src="<?php echo base_url();?>fotos_productos/<?php echo $producto-> foto0; ?>" width="100">
                                        </a> 
                                    </figure>
                                    <div class="text">
                                        <a href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo $producto-> url_amigable; ?>"><?php echo $producto -> nombre_producto; ?></a>
                                        <p><span><?php echo $producto -> titulo_producto; ?></span></p>
                                    </div>
                                </li>     
                                <?php } ?>                           
                            </ul>
                        </div>
                        <!--LEGISLACION END-->
                        <!-- PAUTA COLUMAN DERECHA -->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Vida y Estilo") { ?>
                                <?php if (($item -> orden_publicitario == 3) || ($item -> orden_publicitario == 4)) { ?>
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

                         <!--RELATED POST WIDGET START-->
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

                        <!-- PAUTA COLUMAN DERECHA -->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Vida y Estilo") { ?>
                                <?php if (($item -> orden_publicitario == 5) || ($item -> orden_publicitario == 6)) { ?>
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
      perPage:                5,      
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