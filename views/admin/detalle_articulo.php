        <!--INICIO CONTENIDO-->
        <div class="main-contant">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <section class="blog-listing sidebar">
                            <!--POST ARTICLE START-->
                            <article>
                            <?php foreach ($detalle_articulo ->result() as $item) { ?>
                                <!-- En esta linea se comprueba si hay mas de una imagen -->
                                <?php if (!empty($item->foto1) && !empty($item->foto2)) { $slides ="slides";}else{$slides ="";} ?>
                                <section class="fashion-slider">
                                    <div class="h-style">
                                        <h2><?php echo $item-> titulo_articulo; $nombre_articulo_redes =$item-> titulo_articulo ?></h2>
                                        <h4 class="color"> <?php echo $item-> nombre_articulo; ?></h4>
                                    </div>
                                    <div class=" slider flexslider">
                                      <ul class="<?php echo $slides; ?>">
                                      <?php if (!empty($item->foto1)):  $foto_redes=$item->foto1; ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto1; ?>"  alt="<?php echo $item-> foto1;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto2)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto2; ?>"  alt="<?php echo $item-> foto2;?>"></figure></li>
                                      <?php endif ?>
                                      <?php if (!empty($item->foto3)): ?>
                                        <li><figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto3; ?>"  alt="<?php echo $item-> foto3;?>"></figure></li>
                                      <?php endif ?>

                                      </ul>
                                    </div>

                                     <div class="text">
                                      <?php if (!empty($item->foto4)): ?>
                                        <figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto4; ?>"  alt="<?php echo $item-> foto4;?>"></figure>
                                      <?php endif ?>
                                     </div>
                                </section>

                                 <?php if (!empty($item -> contenido_articulo)): ?>
                                    <div class="text">
                                        <div class="post-type">
                                        <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item->icono_articulo; ?>">
                                        <a class="post-date">
                                        <?php $fecha = $item->fecha_publicacion_articulo;
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
                                            <?php echo $item->contenido_articulo; ?>
                                    </div>
                                <?php endif ?>

                                    <div class="text">
                                      <?php if (!empty($item->foto5)): ?>
                                        <figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto5; ?>"  alt="<?php echo $item-> foto5;?>"></figure>
                                      <?php endif ?>
                                      <br>
                                    </div>

                                <?php if (!empty($item->ficha_articulo)): ?>
                                    <div><hr></div>
                                    <div>
                                        <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> <a href="<?php echo base_url();?>fotos_articulos/<?php echo $item->ficha_articulo; ?>">Descargar documento completo en PDF </a></p> <br>
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
                                <?php if (!empty($item->video_articulo)): ?>
                                    <div class="tech-section">
                                        Video del articulo: <br><br>
                                        <div class="sidebar">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item->video_articulo; ?>" frameborder="0" allowfullscreen></iframe> 
                                        </div>
                                    </div>
                                <?php endif ?>
                                <!-- FIN VIDEO -->
                                <div class="text">
                                  <?php if (!empty($item->foto6)): ?>
                                    <figure> <img src="<?php echo base_url();?>fotos_articulos/<?php echo $item-> foto6; ?>"  alt="<?php echo $item-> foto6;?>"></figure>
                                  <?php endif ?>
                                </div>
                            </article>
                            <!--POST ARTICLE START-->
                        </section>
                    </div>
<!-- INICIO BARRA PUBLICIDAD -->
                    <div class="span4">
                        <div class="sidebar">
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->

                            <!--ARTICULOS ALEATORIOS-->
                            <div class="widget widget-top3">
                                <h2>Artículos Aleatorios</h2>
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="#"><img alt="" src="images/top1.png"></a>
                                        </figure>
                                        <div class="text">
                                            <a href="#">Emma Thomson</a>
                                            <p>New Post<span>12 minutes ago</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#"><img alt="" src="images/top2.png"></a>
                                        </figure>
                                        <div class="text">
                                            <a href="#">Emma Thomson</a>
                                            <p>New Post<span>12 minutes ago</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#"><img alt="" src="images/top3.png"></a>
                                        </figure>
                                        <div class="text">
                                            <a href="#">Emma Thomson</a>
                                            <p>New Post<span>12 minutes ago</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#"><img alt="" src="images/top1.png"></a>
                                        </figure>
                                        <div class="text">
                                            <a href="#">Emma Thomson</a>
                                            <p>New Post<span>12 minutes ago</span></p>
                                        </div>
                                    </li>                                   
                                </ul>
                            </div>
                            <!--NEW CATEGORIES WIDGET END-->

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

                            <!--NEWSLETTER-->
                            <div class="widget widget-newsletter">
                                <h2>Suscríbase</h2>
                                <div class="text">
                                    <input type="text" class="input-block-level" placeholder="Email">
                                    <button class="btn-style">Subscribe</button>
                                </div>
                            </div>

                            <!--FIN NEWSLETTER-->
                            <!-- REVISTA EN LINEA  -->
                            <div class="widget widget-newsletter">
                                    <h2>Revista Digital</h2>
                                <figure>
                                    <img alt="" src="images/revista.png">
                                </figure>
                                <div class="text">
                                    <h4>Email </h4>
                                    <input type="text" class="input-block-level">
                                    <button class="btn-style">Suscribirse</button>
                                </div>
                            </div>
                            <!-- END REVISTA EN LINEA  -->
                            <!-- PAUTA -->
                            <div class="widget">
                                <img src="images/pauta.jpg" class="img-responsive">
                            </div>
                            <!-- FIN PAUTA -->
                        </div>
                    </div>
<!-- FIN BARRA PUBLICIDAD-->
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