        <!--INICIO CONTENIDO-->
        <div class="main-contant">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <section class="blog-listing sidebar">
                            <!--POST ARTICLE START-->
                            <article>
                            <?php foreach ($detalle_legislacion ->result() as $item) { ?>
                                <!-- En esta linea se comprueba si hay mas de una imagen -->
                                <?php if (!empty($item->foto1) && !empty($item->foto2)) { $slides ="slides";}else{$slides ="";} ?>

<!-- INICIO CONTENIDO legislacion -->
                                 <?php if (!empty($item -> descripcion_legislacion)): ?>
                                    <div class="text">
                                        <div class="post-type">
                                        <img src="<?php echo base_url();?>legislaciones/<?php echo $item->icono_legislacion; ?>">
                                        <a class="post-date">
                                        <?php $fecha = $item->fecha_legislacion;
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
                                            <?php echo $item->descripcion_legislacion; ?>
                                    </div>
                                <?php endif ?>
<!-- FIN CONTENIDO legislacion -->
<!-- INICIO PDF -->
                                <?php if (!empty($item->ficha_legislacion)): ?>
                                    <div><hr></div>
                                    <div>
                                        <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> 
                                        <a href="<?php echo base_url();?>legislaciones/<?php echo $item->ficha_legislacion; ?>">Descargar Legislación en PDF </a></p> <br>
                                    </div>
                                <?php endif ?>
<!-- FIN PDF -->

                                <div> <br> <br> <hr> </div>

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

                            <!--legislaciones ALEATORIOS-->
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