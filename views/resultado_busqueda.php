   
    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <section>
                        <div class="health-news sports-news" style="margin: 0px">
                            <h2 class="h-style">Resultado Búsqueda</h2>
                            <ul>
                                <!--LIST ITEM START-->
                                <?php foreach ($resultado_productos -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a  href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto1;?>" alt="" width="183" ></a>
                                    </figure>
                                    <div class="text">
                                        <a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                        <h2><?php echo $item->nombre_producto; ?></h2></a>
                                        <p><?php echo $item->titulo_producto; ?></p>
                                        <div class="headline-review text-right">
                                            <a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                        </div>
                                    </div>
                                </li>
                                <!--LIST ITEM END-->
                               <?php  } ?>
                                <?php foreach ($resultado_profesionales -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a  href="<?php echo base_url()."safety_solutions/detalle_profesional".$item->id_profesional; ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto_profesional;?>" alt="" width="183" ></a>
                                    </figure>
                                    <div class="text">
                                        <a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item->id_profesional; ?>">
                                        <h2><?php echo $item->nombre_profesional; ?></h2></a>
                                        <p><?php echo $item->descripcion_profesional; ?></p>
                                        <div class="headline-review text-right">
                                            <a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item->id_profesional; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                        </div>
                                    </div>
                                </li>
                                <!--LIST ITEM END-->
                               <?php  } ?>
                            </ul>
                        </div>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <h2 class="h-style">Eventos</h2>
                        <div class="article-tabs">
                            <div class="tabs-widget">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <?php  $i=0; foreach ($eventos_solutions ->result() as $item) { 
                                    if(++$i == 1){$clase="active";}else{$clase="";}
                                    ?>                                
                                        <li class="<?php echo $clase; ?>">
                                            <a href="#<?php echo $i?>" data-toggle="tab">
                                            <?php echo $item->tipo_evento ?></a>
                                        </li>
                                    <?php  } ?>  
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php $i=0;  foreach ($eventos_solutions ->result() as $item) { 
                                    if(++$i == 1){$clase="tab-pane fade active in";}else{$clase="tab-pane fade";}
                                    ?>
                                        <div class="<?php echo $clase; ?>" id="<?php echo $i ?>">
                                            <div class="special-offer">
                                                <div class="thumb">
                                                    <img src="<?php echo base_url()."fotos_productos/". $item->foto_evento ?>" alt="foto_evento" width="200">
                                                </div>
                                                <div class="text">
                                                    <p><b><?php echo $item->ciudad_evento ?> 
                                                    - <?php echo $item->fecha_inicio_evento ?></b></p>
                                                    <h2 class="color"><?php echo $item->nombre_evento; ?></h2>
                                                    <br>
                                                    <hr>
                                                </div>
                                                <div class="span6">
                                                <p class="text-justify"><?php echo $item->descripcion_evento; ?></p>
                                                </div>
                                                <div class="span1 text-center">
                                                 <img src="<?php echo base_url();?>images/couple-icon.png"><br>
                                                <a href="<?php echo $item->enlace_evento; ?>" class=" color" target="_blank"><h4>Conocer más</h4></a>
                                                </div>
                                            </div>
                                        </div>                                  
                                    <?php } ?>    
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                </div>
                <div class="span3">
                    <div class="sidebar">
                        <!-- PAUTA -->
                        <?php foreach ($publicidad_col_der ->result() as $item) { ?>
                            <a href="<?php echo $item -> enlace_publicitario ?>">
                                <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                            </a>
                             <br><br><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER START-->
    <footer>
<!--         <div class="health-news">
            <h3 class="color text-center">Nuestros pautantes</h3>
            <hr style="margin: 0px">
            <ul class="mycarousel jcarousel-skin-tango">
                <li><img src="<?php echo base_url();?>images/slide-img.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img2.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img3.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img4.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img5.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img2.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img3.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img4.png" alt="" ></li>
                <li><img src="<?php echo base_url();?>images/slide-img5.png" alt="" ></li>
           </ul>
        </div> -->
        <div class="copy-rights">
            <p>COPYRIGHT © 2013  By <a href="www.crunchpress.com" target="_blank">safetyworkla.com</a></p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
</body>
</html>

