    <div class="main-contant">
        <div class="container">
            <h2 class="h-style">Salud y Bienestar</h2>
            <div class="row">
                <div class="span8">
                    <section>
                        <article class="page-slider">
                        <div class=" slider flexslider">
                          <ul class="slides">
                        <?php foreach ($salud_bienestar -> result() as $item) { ?>
                            <li>
                                <figure>
                                    <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                        <img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto1; ?>" alt="<?php echo $item-> titulo_salud;  ?>">
                                    </a>
                                    <div class="caption">
                                        <h2><?php echo $item -> titulo_salud ?></h2>
                                    </div>
                                </figure>
                            </li>
                            <?php } ?>
                            <!-- items mirrored twice, total of 12 -->
                          </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                          <ul class="slides">
                        <?php foreach ($salud_bienestar -> result() as $item) { ?>
                            <li><img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto1; ?>" alt="<?php echo $item-> titulo_salud;  ?>"></li>
                        <?php } ?>
                            <!-- items mirrored twice, total of 12 -->
                          </ul>
                        </div>
                        </article>
                    </section>
                    <!-- FOTOS  -->
                    <section>
                        <div class="featured-post">
                            <ul>
                                <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                    <li>
                                        <div class="thumb">
                                            <figure>
                                            <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>"><img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto0; ?>" alt="<?php echo $item-> titulo_salud;  ?>"></a>
                                            </figure>
                                            <div class="caption">
                                                <p><?php echo $item ->  titulo_salud; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </section>
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>

                    <!--GALLERY SECTION START-->
                    <section>
                        <div class="row">
                            <div class="span6 span-8">
                                <div class="health-recent-posts">
                                    <h2 class="h-style">Artículos Aleatorios</h2>
                                    <ul class="row">
                                    <?php foreach ($salud_bienestar -> result() as $item) { ?>
                                        <li class="span3">
                                            <div class="thumb hover-style">
                                            <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                                <img src="<?php echo base_url()."fotos_salud_bienestar/".$item-> foto0; ?>" alt="<?php echo $item-> titulo_salud;  ?>" width="264">
                                            </a>
                                            </div>
                                            <div class="text">
                                                <p><?php echo $item ->  titulo_salud; ?></p>
                                                <p class="color"><?php echo $item ->  fecha_publicacion_salud; ?></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2 visible-desktop">
                                <div class="add2">
                                    <a href="#"><img src="images/Nueva_pauta_Home_2.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--GALLERY SECTION END-->
                </div>
<!-- INICIO BLOQUE DERECHO-->                
                <div class="span4">
                    <div class="sidebar">
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
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
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--NEWLETTER WIDGET START-->
                        <div class="widget widget-newsletter">
                            <h2>SUSCRIBASE</h2>
                            <div class="text">
                                <input type="text" class="input-block-level" placeholder="Submit your Email-ID here">
                                <button class="btn-style">Subscribe</button>
                            </div>
                        </div>
                        <!--NEWLETTER WIDGET END-->

                        <!--FACEBOOK FEEDS WIDGET START-->
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


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1468516336501152";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
