    <div class="main-contant">
    	<div class="container">
            <div class="row">
                <div class="span8">
                    <?php $detalle = $articulos_vida_estilo->row(); ?>
                	<section>
                    	<div class="health-news sports-news">
                            <h2 class="h-style">Vida y Estilo <?php echo $detalle->tipo_vida_estilo; ?></h2>
                            <ul>
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
                        </div>
                    </section>
                </div>

                <div class="span4">
                    <div class="sidebar">

                    	<div class="widget photos-widget gallery">
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                        </div>

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

                        <div class="widget photos-widget gallery">
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                        </div>

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
                        <!--FACEBOOK FEEDS WIDGET START-->
                        <div class="widget">
                            <div class="fb-page" data-href="https://www.facebook.com/RevistaSafetyWork/" data-tabs="timeline" data-height="650" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/RevistaSafetyWork/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RevistaSafetyWork/">Revista Safety Work</a></blockquote>
                            </div>
                        </div> 
                        <!--FACEBOOK FEEDS WIDGET END-->
                    </div>
                </div>
            </div>
        </div>
    </div>
