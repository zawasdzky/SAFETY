        <!--INICIO CONTENIDO-->
        <div class="main-contant">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <section class="blog-listing">
                            <!--POST ARTICLE START-->
                            <article>
                            <?php foreach ($detalle_producto ->result() as $item) { ?>
                                <div class="sidebar">
                                    <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto1; ?>" alt="">
                                </div>
                                <div class="text">
                                    <div class="post-type">
                                        <a href="#" class="type"><i class="fa fa-comments-o"></i></a>
    <!--                                     <a href="#" class="post-date">
                                            <p>March</p>
                                            <p class="post-m">05</p>
                                        </a> -->
                                    </div>
                                    <h4><a href="#"><?php echo $item->nombre_producto; ?></a></h4>
                                    <a class="color"> </a>
                                    <?php echo $item->contenido_producto; ?>

                                </div>
                                <div><hr></div>
                                <div>
                                    <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> <a href="<?php echo $item->ficha_producto; ?>">DESCARGA LA FICHA TÉCNICA </a></p> <br>
                                </div>
                                <div><hr></div>
                                <div class="text-center"> 
                                    Compártelo con tus colegas 
                                </div>
                                <!-- REDES SOCIALES -->
                                <div>
                                    <ul class="social-icons2">
                                        <li style="width: 230px;"> </li>
                                        <li><a class="facebook" data-original-title="facebook" href="#" data-toggle="tooltip" title=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" data-original-title="twitter" href="#" data-toggle="tooltip" title=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" data-original-title="linkedin" href="#" data-toggle="tooltip" title=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="tumblr" data-original-title="instagram" href="#" data-toggle="tooltip" title=""><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="google" data-original-title="youtube" href="#" data-toggle="tooltip" title=""><i class="fa fa-youtube"></i></a></li>
                                        <li><a class="github" data-original-title="whatsapp" href="#" data-toggle="tooltip" title=""><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <!-- FIN REDES SOCIALES -->
                                <div> <br> <br> <hr> </div>
                                <!-- VIDEO -->
                                <div class="tech-section">
                                Video del Producto: <br><br>
                                <div class="sidebar">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item->video_producto; ?>" frameborder="0" allowfullscreen></iframe> 
                                </div>
                                </div>
                                <!-- FIN VIDEO -->
                            <?php } ?>
                            </article>
                            <!--POST ARTICLE START-->
                        </section>
                    </div>
                    <div class="span4">
                        <div class="sidebar">
                         <!-- INICIO BARRA CONTACTO RAPIDO -->
                        <div class="tech-section">
                            <div>
                                <img src="<?php echo base_url();?>images/msa-logo-home2-ss-270x180.gif">
                            </div>
                            <hr>
                            <p>
                            Hacemos uso de la ingeniería de precisión para fabricar productos de seguridad de la mayor calidad posible, para las personas de todo el mundo
                            </p>
                            <hr>

                            <div class="icono_contacto">
                                <img src="<?php echo base_url();?>images/icon_dirección.svg" width="50">
                            </div>

                            <div class="datos_contacto">
                            Autopista Botogá - Medellin Km 6.3 Costado Sur <br>
                            Parque Industrial Siberia <br>
                            Real, Bodeega 1 <br><br>
                            Tenjo, Cundinamarca <br><br>
                            </div>
                            <hr style="clear: both;">

                            <div class="icono_contacto">
                                <img src="<?php echo base_url();?>images/icon_operador.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                Contacto comercial <br> <br> 
                                Camilo cifuentes<br>
                                Gerente de Mercadeo<br><br>
                                camilo@msa.com <br>
                                <br>                                 
                            </div>
                            <hr style="clear: both;">
                            <div class="icono_contacto">
                                <img src="<?php echo base_url();?>images/icon_telefono.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                                <br>
                                LLámenos
                                <br>
                                57-1 288 4424<br>
                            </div>
                            <hr style="clear: both;">

                            <div class="icono_contacto">
                                <img src="<?php echo base_url();?>images/icon_wide_web.svg" width="50">
                            </div>
                            <div class="datos_contacto">
                            <br>
                                Visítenos   
                                <br>
                                www.co.msasafety.com<br>                              
                            </div>
                        </div>
                        <!-- FIN BARRA CONTACTO RAPIDO -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.vticker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.jcarousel.min.js"></script>
    <script src='<?php echo base_url();?>assets/js/fullcalendar.min.js'></script>
    <script src="<?php echo base_url();?>assets/js/weather.js"></script>
    <script src="<?php echo base_url();?>assets/js/Chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url();?>assets/js/functions.js"></script>