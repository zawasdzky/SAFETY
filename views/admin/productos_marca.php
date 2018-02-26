   
    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div class="health-news sports-news" style="margin: 0px">
                    <?php $detalle = $productos->row(); ?>
                        <h2 class="h-style"><?php echo $detalle -> nombre_marca ?></h2>
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
                                        <a href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo  $item->url_amigable; ?>"> 
                                        <i class="fa fa-eye"></i> Ver más</a>
                                    </div>
                                </div>
                            </li>
                            <!--LIST ITEM END-->
                           <?php  } ?>
                        </ul>
                    </div>
                </div>
<!-- INICIO BARRA CONTACTO RAPIDO -->
                <div class="span4">
                    <div class="sidebar">
                    <div class="tech-section">
                        <div class="text-center">
                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->logo_marca; ?>" width="100%">
                        </div>
                        <div class="text-center">
                            <br><strong><?php echo $item->titulo_marca; ?></strong>
                        </div>

                        <?php if ($item->descripcion_marca): ?>
                            <div class="text-justify">
                                <hr><p><?php echo $item->descripcion_marca; ?></p>
                            </div>
                        <?php endif ?>

                        <?php if ($item->direccion_marca) { ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_dirección.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <?php  echo $item->direccion_marca;  ?> <br><br>
                                <?php  echo $item->ciudad_marca;  ?><br><br>
                            </div>
                        <?php } ?>

                        <?php if ($item->direccion2_marca) { ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_dirección.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <?php  echo $item->direccion2_marca;  ?> <br><br>
                                <?php  echo $item->ciudad2_marca;  ?><br><br>
                            </div>
                        <?php } ?>


                        <?php if ($item->direccion3_marca) { ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_dirección.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <?php  echo $item->direccion3_marca;  ?> <br><br>
                                <?php  echo $item->ciudad3_marca;  ?><br><br>
                            </div>
                        <?php } ?>

                        <?php if ($item->contacto_marca): ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_operador.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                            <label>Contacto Comercial:</label>
                            <?php echo $item->contacto_marca; ?> <br>
                            <?php echo $item->cargo_contacto_marca; ?><br>
                            <a href="mailto:<?php echo $item->email_marca; ?>" target="_top" class=" color"> <?php echo $item->email_marca; ?></a>
                                <br>                                 
                            </div>    
                        <?php endif ?>

                        <?php if ($item->telefonos_marca): ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_telefono.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <br>
                                LLámenos
                                <br>
                                 <?php echo $item->telefonos_marca; ?><br>
                            </div>
                        <?php endif ?>

                        <?php if ($item->telefonos2_marca): ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_telefono.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <br>
                                
                                 <?php echo $item->telefonos2_marca; ?><br>
                            </div>
                        <?php endif ?>

                        <?php if ($item->telefonos3_marca): ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_telefono.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <br>

                                 <?php echo $item->telefonos3_marca; ?><br>
                            </div>
                        <?php endif ?>

                        <?php if ($item->enlace_marca): ?>
                            <hr style="clear: both;">
                            <div class="icono_contacto hidden-phone">
                                <img src="<?php echo base_url();?>images/icon_wide_web.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                            <br>
                                Visítenos   
                                <br>
                                  <a href="<?php echo $item->enlace_marca; ?>" class=" color" target="_blank"> <?php echo $item->enlace_marca; ?></a><br>                              
                            </div>   
                        <?php endif ?>
                    </div>
                    </div>
                </div>
<!-- FIN BARRA CONTACTO RAPIDO -->
            </div>
        </div>
    </div>
