   
    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div class="health-news sports-news" style="margin: 0px">
                    <?php $detalle = $productos->row(); ?>
                        <h2 class="h-style"><?php if (!empty($detalle -> nombre_categoria) ) { echo $detalle -> nombre_categoria;} ?></h2>
                        <ul>
                            <!--LIST ITEM START-->
                            <?php foreach ($productos -> result() as $item) { ?>
                            <li>
                                <figure>
                                    <a  href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo  $item->url_amigable; ?>">
                                        <img src="<?php echo base_url()."fotos_productos/".$item->foto1;?>" alt="<?php echo $item->nombre_producto; ?>" width="300" ></a>
                                </figure>
                                <div class="text">
                                    <h2><a href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo  $item->url_amigable; ?>">
                                    <?php echo $item->nombre_producto; ?></a></h2>
                                    <p><?php echo $item->titulo_producto; ?></p>
                                    <div class="headline-review text-right">
                                        <a href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo  $item->url_amigable; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                    </div>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                           <?php  } ?>
                        </ul>
                    </div>
                </div>
            </div>
               <!-- INICIO WIDGET EVENTOS -->
                <div class="span8">
                    <h2 class="h-style">Eventos</h2>
                    <div class="article-tabs">
                        <div class="tabs-widget">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <?php  $i=1; foreach ($eventos_solutions ->result() as $item) { 
                                if($i == 1){$clase="active";}else{$clase="";}
                                ?>                                
                                    <li class="<?php echo $clase; ?>">
                                        <a href="#<?php echo "tab".$i; ?>" data-toggle="tab">
                                        <?php echo $item->tipo_evento ?></a>
                                    </li>
                                <?php  $i++;} ?>  
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php $i=1;  foreach ($eventos_solutions ->result() as $item) { 
                                if($i == 1){$clase="tab-pane fade active in";}else{$clase="tab-pane fade";}
                                ?>
                                    <div class="<?php echo $clase; ?>" id="<?php echo "tab".$i; ?>">
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
                                            <div class="span1 pull-right">
                                                <div class="text-center">
                                                 <img src="<?php echo base_url();?>images/couple-icon.png"><br>
                                                <a href="<?php echo $item->enlace_evento; ?>" class=" color"  target="_blank"><h4>Ver más</h4></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                <?php  $i++;} ?>    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN WIDGET EVENTOS -->
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
