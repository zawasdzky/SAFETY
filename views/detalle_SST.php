    <div class="main-contant">
    	<div class="container">
            <?php $item = $detalle_SST->row(); ?>
        	 <h2 class="h-style"><?php echo $item->titulo_SST; ?></h2>
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
                                  <?php if (!empty($item-> foto1)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto1; ?>"  alt="<?php echo $item -> foto1;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto2)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto2; ?>"  alt="<?php echo $item -> foto2;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto3)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto3; ?>"  alt="<?php echo $item -> foto3;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto4)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto4; ?>"  alt="<?php echo $item -> foto4;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto5)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto5; ?>"  alt="<?php echo $item -> foto5;?>"></figure></li>
                                  <?php } ?>
                                  <?php if (!empty($item-> foto6)){ ?>
                                    <li><figure> <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto6; ?>"  alt="<?php echo $item -> foto6;?>"></figure></li>
                                  <?php } ?>
                                  </ul>
                                </div>
                             </section>
                             <?php if (!empty($item->contenido_SST)){ ?>
                                <div class="text">
                                        <?php echo $item->contenido_SST; ?>
                                </div>
                            <?php } ?>
                            <?php if (!empty($item->ficha_SST)){ ?>
                                <div><hr></div>
                                <div>
                                    <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> <a href="<?php echo base_url();?>fotos_SST/<?php echo $item->ficha_SST; ?>">DESCARGA LA FICHA TÉCNICA </a></p> <br>
                                </div>
                            <?php } ?>
                            <div><hr></div>
                                       <!-- REDES SOCIALES -->
                                        <div>
                                            <ul class="social-icons2">
                                               <?php $enlace = base_url()."SST_bienestar/detalle_SST/".$item-> url_amigable_SST; ?>
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

                        <div class="widget photos-widget gallery">
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="<?php echo base_url();?>images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="<?php echo base_url();?>images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                        </div>

                        <!--PRODUCTOS-->
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
                        <!--PRODUCTOS END-->

                        <div class="widget photos-widget gallery">
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="<?php echo base_url();?>images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="<?php echo base_url();?>images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                        </div>

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
