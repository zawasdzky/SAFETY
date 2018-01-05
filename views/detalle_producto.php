        <!--INICIO CONTENIDO-->
        <div class="main-contant">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <section class="blog-listing sidebar">
                            <!--POST ARTICLE START-->
                            <article>
                            <?php foreach ($detalle_producto ->result() as $item) { ?>
                                <!-- En esta linea se comprueba si hay mas de una imagen -->
                                <?php if (!empty($item->foto1) && !empty($item->foto2)) { $slides ="slides";}else{$slides ="";} ?>
                                <section class="fashion-slider">
                                    <h2 class="h-style"><?php echo $item->nombre_producto; $nombre_producto_redes =$item->nombre_producto ?></h2>
                                    <div class=" slider flexslider">
                                      <ul class="<?php echo $slides; ?>">
                                      <?php if (!empty($item->foto1)):  $foto_redes=$item->foto1; ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto1; ?>"  alt="<?php echo $item ->foto1;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto2)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto2; ?>"  alt="<?php echo $item ->foto2;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto3)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto3; ?>"  alt="<?php echo $item ->foto3;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto4)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto4; ?>"  alt="<?php echo $item ->foto4;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto5)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto5; ?>"  alt="<?php echo $item ->foto5;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto6)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto6; ?>"  alt="<?php echo $item ->foto6;?>"></figure></li>
                                      <?php endif ?>
                                      </ul>
                                    </div>
                                 </section>
                                 <?php if (!empty($item->contenido_producto)): ?>
                                    <div class="text">

                                        <div class="post-type">
                                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->icono_producto; ?>">
                                        <a class="post-date">
                                        <?php $fecha = $item->fecha_publicacion_producto;
                                                setlocale(LC_ALL,"es_ES");
                                                date_default_timezone_set('America/Bogota');
                                                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                $mes = date('m', strtotime($fecha));
                                                $mes = intval($mes);
                                                $dia = date('d', strtotime($fecha)); ?>
                                            <p><?php echo  $meses[$mes-1]?></p>
                                            <p class="post-m"><?php echo $dia ?></p>
                                        </a>
                                        </div>
                                            <?php echo $item->contenido_producto; ?>
                                    </div>
                                <?php endif ?>
                                <?php if (!empty($item->ficha_producto)): ?>
                                    <div><hr></div>
                                    <div>
                                        <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> <a href="<?php echo base_url();?>fotos_productos/<?php echo $item->ficha_producto; ?>">DESCARGA LA FICHA TÉCNICA </a></p> <br>
                                    </div>
                                <?php endif ?>
                                <div><hr></div>
                                <div class="text-center"> 
                                    Compártelo con tus colegas 
                                </div>
                                <!-- REDES SOCIALES -->
                                <div>
                                    <ul class="social-icons2">
<div class="sharethis-inline-share-buttons"></div>
                                    </ul>
                                </div>
                                <!-- FIN REDES SOCIALES -->
                                <div> <br> <br> <hr> </div>
                                <!-- VIDEO -->
                                <?php if (!empty($item->video_producto)): ?>
                                    <div class="tech-section">
                                        Video del Producto: <br><br>
                                        <div class="sidebar">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item->video_producto; ?>" frameborder="0" allowfullscreen></iframe> 
                                        </div>
                                    </div>
                                <?php endif ?>
                                <!-- FIN VIDEO -->
                            </article>
                            <!--POST ARTICLE START-->
                        </section>
                    </div>
<!-- INICIO BARRA CONTACTO RAPIDO -->
                <div class="span4">
                    <div class="sidebar">
                    <div class="tech-section">
                        <div class="text-center">
                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->logo_marca; ?>" width="100%">
                        </div>
                        <div class="text-center">
                            <br><strong><?php echo $item->titulo_marca;  $titulo_redes =$item->titulo_marca; ?></strong>
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
                                Dirección:<br>
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
                                Dirección:<br>
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
                                Dirección:<br>
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
        <?php } ?>
        <!--FOOTER START-->
        <footer>
            <div class="copy-rights">
                <p>COPYRIGHT © 2017 safetyworkla.com </p>
            </div>
        </footer>
        <!--FOOTER END-->
    </div>
    <!--FOOTER END-->
    <!--WRAPPER END-->
    </body>
    </html>
<!-- BOTON COMPARTIR FACEBOOK PERSONALIZADO -->

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=59bfdb2fd022ae0011cd8872&product=inline-share-buttons' async='async'></script>