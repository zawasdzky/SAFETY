    <div class="main-contant">
    	<div class="container">
            <?php $item = $detalle_articulo_vida_estilo->row(); ?>
        	 <h2 class="h-style"><?php echo $item->titulo_vida_estilo; ?></h2>
            <div class="row">
                <div class="span8">
                    <section class="blog-listing sidebar">
                        <!--POST ARTICLE START-->
                        <article>
                            <!-- En esta linea se comprueba si hay mas de una imagen -->
                            <?php if (!empty($item->foto1) && !empty($item->foto2)) { $slides ="slides";}else{$slides ="";} ?>
                            <section class="fashion-slider">
                                <div class=" slider flexslider">
                                  <ul class="<?php echo $slides; ?>">
                                  <?php if (!empty($item-> foto1)){  $foto_redes = $item-> foto1; ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto1; ?>"  alt="<?php echo $item -> foto1;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto2)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto2; ?>"  alt="<?php echo $item -> foto2;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto3)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto3; ?>"  alt="<?php echo $item -> foto3;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto4)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto4; ?>"  alt="<?php echo $item -> foto4;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto5)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto5; ?>"  alt="<?php echo $item -> foto5;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto6)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item-> foto6; ?>"  alt="<?php echo $item -> foto6;?>"></figure></li>
                                  <?php } ?>
                                  </ul>
                                </div>
                             </section>
                             <?php if (!empty($item->contenido_vida_estilo)){ ?>
                                <div class="text">
                                        <?php echo $item->contenido_vida_estilo; ?>
                                </div>
                            <?php } ?>
                            <?php if (!empty($item->ficha_vida_estilo)){ ?>
                                <div><hr></div>
                                <div>
                                    <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> <a href="<?php echo base_url();?>fotos_vida_estilo/<?php echo $item->ficha_vida_estilo; ?>">DESCARGA LA FICHA TÉCNICA </a></p> <br>
                                </div>
                            <?php } ?>
                            <div><hr></div>
                                       <!-- REDES SOCIALES -->
                                        <div>
                                            <ul class="social-icons2">
                                               <?php $enlace = base_url()."vida_estilo/detalle_vida_estilo/".$item-> url_amigable_vida_estilo; ?>
                                                <li style="width: 230px;"> </li>
                                                <li><a class="facebook" data-original-title="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                                <li><a class="twitter" data-original-title="twitter" href="https://twitter.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip"  target="_blank"><i class="fa fa-twitter"></i></a></li>

                                                <li><a class="linkedin" data-original-title="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-linkedin"></i></a></li>

                                                <li><a class="google" data-original-title="youtube" href="https://plus.google.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-youtube"></i></a></li>

                                                <li><a class="github" data-original-title="whatsapp" href="whatsapp://send?text=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                            <!-- FIN REDES SOCIALES -->
                        </article>
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
