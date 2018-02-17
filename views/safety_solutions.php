    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <h2 class="h-style">Novedades</h2>
            <div class="row">
                <div class="span9">
                    <div class="news-slider">
                        <div class="flexslider">
                          <ul class="slides">

                          <?php foreach ($novedades_slider -> result() as $slider) { ?>
                            <li>
                                <div class="thumb">
                                    <a href="<?php echo $slider -> enlace_publicitario ?>"><img src="<?php echo base_url()."fotos_productos/".$slider->foto_publicitario; ?>" alt="<?php echo $slider -> nombre_publicitario ?>"></a>
                                    <div class="caption">
                                        <p><?php echo $slider -> nombre_publicitario ?></p>
                                        <p><?php echo $slider -> titulo_publicitario ?></p>
                                    </div>
                                </div>
                            </li>
                         <?php  } ?>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <?php foreach ($novedades_pauta -> result() as $pauta) { ?>
                    <div class="news-thumb">
                       <a href="<?php echo $pauta -> enlace_publicitario ?>"><img src="<?php echo base_url()."fotos_productos/".$pauta->foto_publicitario; ?>" alt="<?php echo $pauta -> nombre_publicitario ?>"></a>
                    </div>
                    <?php  } ?>
                </div>
            </div>
            <!--GALLERY SECTION START-->
            <section>
                <div class="image-gallery">
                    <h2 class="h-style">Catálogo por marcas</h2>
                    <ul class="mycarousel jcarousel-skin-tango gallery">
                       <?php foreach ($marcas ->result() as $item) { ?>
                           <li>
                                <img src="<?php echo base_url()."fotos_productos/". $item->foto_marca ?>" alt="<?php echo $item -> titulo_marca; ?>" >
                                <div class="caption">
                                    <a href="<?php echo base_url()."safety_solutions/productos_marca/".$item->id_marca; ?>"><i class="fa fa-link"></i></a>
                                    <h4><?php echo $item -> titulo_marca ?></h4>
                                    <p><?php echo $item  -> descripcion_marca ?></p>
                                </div>
                           </li>
                        <?php  } ?>
                   </ul>
                </div>          
            </section>
            <!--GALLERY SECTION END-->
            <!-- INICIO CONTENIDO-->
            <div class="row">
                <div class="span9">
                    <section>
                        <div  class="row">
                        <!-- INICIO COLUMNA IZQUIERDA-->
                            <div class="span3 sidebar hidden-phone">
                                <!-- PAUTA -->
                                <?php foreach ($publicidad_col_izq ->result() as $item) { ?>
                                    <div class="widget">
                                        <a href="<?php echo $item -> enlace_publicitario ?>" target="_blank">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                                        </a>
                                        <br><br><br>
                                    </div>
                                <?php  } ?>
                                <!-- FIN PAUTA -->
                            </div>
                            <!-- FIN COLUMNA IZQUIERDA-->
                            <!-- INICIO COLUMNA CENTRAL-->
                            <div class="span6">
                                <div class="health-news">
                                    <h2 class="h-style">Destacados</h2>
                                    <ul class="headlines" id="paginar">

                                         <?php foreach ($productos_destacados ->result() as $item) { ?>
                                         <li>
                                             <figure>
                                                <a  href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item->foto0;?>" alt="<?php echo $item->nombre_producto; ?>" width="190" ></a>
                                            </figure>
                                            
                                            <div class="text">
                                                <a  href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                                <h2><?php echo $item->nombre_producto; ?></h2></a>
                                                <p><?php echo $item->titulo_producto; ?></p>
                                            </div>
                                            <div class="headline-review text-right">
                                                <a href="safety_solutions/detalle_producto/<?php echo  $item->url_amigable; ?>"><i class="fa fa-eye"></i>Ver más</a>
                                            </div>
                                        </li> 
                                        <?php  } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                    <!-- INICIO NEWS LETTER -->
                    <section>
                        <div class="row">
                            <div class="span9">
                                <!--NEWS BOX START-->
                                <div class="tech-section fondo_aguamarina">
                                <form action="<?php echo base_url();?>assets/php/mailer.php" method="POST">
                                    <div class="span5">
                                    <p> <h2 style="line-height: 1.3em;">Suscríbete a nuestros <b>Newsletter</b> y forma parte de la comunidad Latinoamericana para promover mejores lugares de trabajo </h2></p>
                                    </div>
                                    <div class="span2">
                                        <img src="<?php echo base_url();?>images/icon_ingeniero.svg" width="200">
                                    </div>
                                    <div class="span5">
                                        <input type="email" class="inputnewsletter" name="email" value="@">
                                    </div>
                                    <div class="span2">
                                        <button class="btn-style fondo_verdeviche btn-block" onclick="(alert('Gracias por su registro'))">Suscribirse</button>
                                    </div>
                                    <div class="span5">
                                    <input type="checkbox" class="checknewsletter" name="">
                                        Acepto términos y condiciones
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN NEWS LETTER -->
                </div>
                <!-- FIN COLUMNA CENTRAL-->
                <!-- INICIO COLUMNA DERECHA-->
                <div class="span3">
                    <div class="sidebar">
                        <!-- PAUTA -->
                        <?php foreach ($publicidad_col_der ->result() as $item) { ?>
                            <a href="<?php echo $item -> enlace_publicitario ?>"  target="_blank">
                                <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                            </a>
                             <br><br><br>
                        <?php } ?>
                        <!-- FIN PAUTAS -->

                        <!--TABS WIDGET START-->
<!--                         <div class=" widget tabs">
                            <div class="tabs-widget">
                                <h3>Artículos más leidos</h3>

                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#Recent" data-toggle="tab"><h5>Evento1</h5></a></li>
                                  <li><a href="#Papular" data-toggle="tab"><h5>Evento2</h5></a></li>
                                  <li><a href="#all" data-toggle="tab"><h5>Evento3</h5></a></li>
                                </ul>

                                <div class="tab-content">
                                  <div class="tab-pane tab-pane fade in active" id="Recent">
                                    <div class="text">
                                        <h4>Photos/<span class="color"> What the Stars Wore</span></h4>
                                        <p class="link">Morbi condimentum tempus tincidunt</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  </p>
                                    </div>
                                    <div class="event-image">
                                        <a href="#"><img src="<?php echo base_url();?>images/event-image.png" alt=""></a>
                                        <div class="caption">
                                            <ul>
                                                <li><a href="#">3 weeks ago</a></li>
                                                <li><a href="#">John Doe</a></li>
                                                <li><a href="#">Style</a></li>
                                                <li><a href="#">200</a></li>
                                            </ul>
                                            <h4>This concerns her</h4>
                                        </div>
                                    </div>
                                    <div class="text-cap">
                                        <p>Vestibulum nec venenatis erat, et adipiscing ipsum. Duis ac nisl vel magna imperdiet gravida. </p>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Papular">
                                    <div class="text">
                                        <h4>Photos/<span class="color"> What the Stars Wore</span></h4>
                                        <p class="link">Morbi condimentum tempus tincidunt</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  </p>
                                    </div>
                                    <div class="event-image">
                                        <a href="#"><img src="<?php echo base_url();?>images/event-image2.png" alt=""></a>
                                        <div class="caption">
                                            <ul>
                                                <li><a href="#">3 weeks ago</a></li>
                                                <li><a href="#">John Doe</a></li>
                                                <li><a href="#">Style</a></li>
                                                <li><a href="#">200</a></li>
                                            </ul>
                                            <h4>This concerns her</h4>
                                        </div>
                                    </div>
                                    <div class="text-cap">
                                        <p>Vestibulum nec venenatis erat, et adipiscing ipsum. Duis ac nisl vel magna imperdiet gravida. </p>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="all">
                                    <div class="text">
                                        <h4>Photos/<span class="color"> What the Stars Wore</span></h4>
                                        <p class="link">Morbi condimentum tempus tincidunt</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                    </div>
                                    <div class="event-image">
                                        <a href="#"><img src="<?php echo base_url();?>images/event-image3.png" alt=""></a>
                                        <div class="caption">
                                            <ul>
                                                <li><a href="#">3 weeks ago</a></li>
                                                <li><a href="#">John Doe</a></li>
                                                <li><a href="#">Style</a></li>
                                                <li><a href="#">200</a></li>
                                            </ul>
                                            <h4>This concerns her</h4>
                                        </div>
                                    </div>
                                    <div class="text-cap">
                                        <p>Vestibulum nec venenatis erat, et adipiscing ipsum. Duis ac nisl vel magna imperdiet gravida. </p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div> -->
                        <!--TABS WIDGET END-->
                    </div>
                    <!--FACEBOOK FEEDS WIDGET START-->
                    <div class="widget">
                        <div class="fb-page" data-href="https://www.facebook.com/RevistaSafetyWork/" data-tabs="timeline" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/RevistaSafetyWork/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RevistaSafetyWork/">Revista Safety Work</a></blockquote>
                        </div>
                    </div> 
                    <!--FACEBOOK FEEDS WIDGET END-->
                </div>
            </div>
        </div>
    </div>
     <!--FOOTER START-->
    <footer>
        <!--FOOTER TOP AREA STAT-->
<!--             <div class="container">
                <div class="row">
                        <figure>
                            <img alt="" src="<?php echo base_url();?>images/mega_banner_publicidad2.jpg">
                        </figure>
                        <br>
                </div>
            </div> -->
        <!--FOOTER TOP AREA END-->

        <div class="copy-rights">
             <p>COPYRIGHT © 2017 safetyworkla.com</p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
</body>
</html>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1468516336501152";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
