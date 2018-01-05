<!--WRAPPER START-->
<div class="wrapper">
    <!--BANNER START-->
    <div class="banner">
        <ul class="bxslider">
          <li>
            <img src="images/slider_1.jpg">
            <div class="banner-caps">
<!--                <h2>Silent Beauty...</h2>
                <p>quis nostrud exercitation ullamco laboris nisi ut</p> -->
            </div>
          </li>
          <li>
            <img src="images/slider_2.jpg">
            <div class="banner-caps">

            </div>
          </li>
          <li>
            <img src="images/slider_3.jpg" >
            <div class="banner-caps">

            </div>
          </li>
          <li>
            <img src="images/slider_4.jpg">
            <div class="banner-caps">
            </div>
          </li>
        </ul>
    </div>
    <!--BANNER END-->
    <div class="whats-new">
        <div class="container">
        <div class="whts-new-hd">
            <h2>Lo Último Noticias</h2>
        </div>
            <div class="row">
            <?php $i=1; foreach ($noticias -> result() as $noticia) { ?>
                <div class="span4">
                    <figure>
                        <a href="<?php echo base_url()."Noticias/detalle_noticia/".$noticia -> url_amigable_noticia; ?>">
                            <img src="<?php echo base_url()."fotos_noticias/". $noticia-> foto1 ?>" alt="<?php echo $noticia -> titulo_noticia; ?>" width=168/>
                        </a>
                    </figure>
                    <div style="color:#fff">
                        <div class="heading" >
                            <br />
                            <h2><?php echo $i; ?></h2>
                            <h4><?php echo $noticia -> titulo_noticia; ?></h4>
                        </div>
                        <a href="<?php echo base_url()."Noticias/detalle_noticia/".$noticia -> url_amigable_noticia; ?>"><font color="white">Ver más</font></a>
                    </div>
                </div>
            <?php $i++; } ?>
            </div>
        </div>
    </div>
    <!--MAIN CONTATN START-->
    <div class="main-contant">
        <div class="container">
            <!--TOP SECTION START-->
            <section>
                <div class="row">
                    <div class="span4">
                        <div class="tabs">
                            <div class="tabs-widget">
                                <img src="images/Nueva_pauta_Home_1.jpg" class="img-responsive">
                            </div>
                            <ul class="mycarousel jcarousel-skin-tango">
                                <li><img src="images/slide-img.png" alt="" ></li>
                                <li><img src="images/slide-img2.png" alt="" ></li>
                                <li><img src="images/slide-img3.png" alt="" ></li>
                                <li><img src="images/slide-img4.png" alt="" ></li>
                                <li><img src="images/slide-img5.png" alt="" ></li>
                                <li><img src="images/slide-img.png"  alt="" ></li>
                                <li><img src="images/slide-img2.png" alt="" ></li>
                                <li><img src="images/slide-img3.png" alt="" ></li>
                                <li><img src="images/slide-img4.png" alt="" ></li>
                                <li><img src="images/slide-img5.png" alt="" ></li>
                           </ul>
                           <a href="#" class="read-more">Infografías</a>
                        </div>
                    </div>
                    <div class="span8">
                        <!--SLIDER DERECHO  START-->
                        <h2 class="h-style">De Interés</h2>
                        <div class="page-slider">
                        <div class=" slider flexslider">
                          <ul class="slides">
                            <?php foreach ($talento_humano-> result() as $talento) { ?>
                            <li>
                                <figure>
                                    <a href="<?php echo base_url()."talento_humano/detalle_articulo_talento/".$talento-> url_amigable_talento; ?>">
                                        <img src="<?php echo base_url()."fotos_talento_humano/". $talento-> foto1 ?>" alt="<?php echo $talento -> foto1; ?>">
                                    </a>
                                    <div class="caption">
<!--                                         <div class="reviews">
                                            <p class="color">/ REVIEWS /</p>
                                        </div> -->
                                        <p class="text"><?php echo $talento -> titulo_talento; ?></p>
                                    </div>
                                </figure>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                          <ul class="slides">
                            <?php foreach ($talento_humano-> result() as $talento) { ?>
                                <li><img src="<?php echo base_url()."fotos_talento_humano/". $talento-> foto1 ?>" alt="<?php echo $talento -> foto0; ?>"></li>
                            <?php } ?>
                          </ul>
                        </div>
                        </div>
                        <!--SLIDER END-->
                        <article>
                            <div class="row">
                                <div class="span6 span-8">
                                    <div class="latest-news">
                                        <h2 class="h-style">Legislación</h2>
                                        <ul class="headlines">
                                            <?php foreach ($legislaciones-> result() as $legislacion) { ?>
                                                <li>
                                                    <figure>
                                                        <a href="<?php echo base_url();?>legislaciones/<?php echo $legislacion-> ficha_legislacion; ?>" download>
                                                            <img src="<?php echo base_url();?>/assets/images/adobe-pdf-icon.jpg" alt="<?php echo $legislacion-> titulo_legislacion; ?>">
                                                        </a>
                                                    </figure>
                                                    <div class="text">
                                                        <h5><?php echo $legislacion-> titulo_legislacion; ?></h5>
                                                        <p><?php echo $legislacion-> descripcion_legislacion;?></p>
                                                        <div class="headline-review">
                                                            <a href="#"><i class="fa fa-calendar"></i><?php echo $legislacion-> fecha_legislacion; ?></a>
                                                            <a href="<?php echo base_url();?>legislacion"><i class="fa fa-eye"></i>Ver Legislaciones</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
<!--                                         <a href="#" class="read-more">Find Our More</a> -->
                                    </div>
                                </div>
                                <div class="span2 visible-desktop">
                                    <div class="new-ad">
                                        <img src="images/new-ad1.jpg" alt="">
                                    </div>
                                    <div class="new-ad">
                                        <img src="images/new-ad1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!--TOP SECTION END-->
            <!--GALLERY SECTION START-->
            <section>
                <div class="image-gallery">
                    <h2 class="h-style">Vida y estilo</h2>
                    <ul class="mycarousel jcarousel-skin-tango gallery">
                        <?php foreach ($vida_estilo-> result() as $vida) { ?>
                            <li>
                                <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $vida-> foto0; ?>" alt="<?php echo $vida-> titulo_vida_estilo; ?>">
                                <div class="caption">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="images/gallery-image.png" data-rel="prettyPhoto[gallery1]"><i class="fa fa-search-plus"></i></a>
                                    <h4><?php echo $vida-> tipo_vida_estilo; ?></h4>
                                    <p> <?php echo $vida-> titulo_vida_estilo; ?></p>
                                </div>
                            </li>
                        <?php } ?>
                   </ul>
                </div>          
            </section>
            <!--GALLERY SECTION END-->
            <!--RIESGOS LABORALES SECTION START-->
            <section>
                <div class="row">
                    <div class="span8">
                        <div class="row sports-section">
                            <div class="span6 span-8">
                                <div class="sports">
                                    <h2 class="h-style">SST</h2>
                                    <?php foreach ($SST-> result() as $item) { ?>
                                        <div class="sports-event">
                                            <div class="thumb hover-style">
                                                <a href="#"><img src="images/sports.png" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h4><?php echo $item -> titulo_SST ?>/h4>
                                                <p>Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. iaculis, ligula arcu ultrices metus, ac venenatis dui leo ut odio. Phasellus a augue congue, faucibus dolor eu, auctor dolor...</p>
                                                <a href="#" class="color pull-right">Continue Reading</a>
                                                <ul class="post-comments">
                                                    <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li>
                                                    <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!--SPORTS THUMBS START-->
                                    <div class="sports-thumbs-list">
                                        <ul>
                                            <li>
                                                <div class="sports-thumbs">
                                                    <figure>
                                                        <a href="#"><img src="images/sports-thumb.png" alt=""></a>
                                                    </figure>
                                                    <div class="text">
                                                        <a href="#">Speaker Boehner Fails </a>
                                                        <p>12 december 2014</p>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sports-thumbs">
                                                    <figure>
                                                        <a href="#"><img src="images/sports-thumb4.png" alt=""></a>
                                                    </figure>
                                                    <div class="text">
                                                        <a href="#">Speaker Boehner Fails </a>
                                                        <p>12 december 2014</p>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--SPORTS THUMBS END-->
                                </div>
                            </div>
                            <div class="span2 visible-desktop">
                                <div class="add2">
                                    <img alt="" src="images/Nueva_pauta_Home_2.jpg">
                                </div>
                            </div>
                        </div>

                        <!--TREVAL START-->
                        <div class="travel-section">
                            <h2 class="h-style">Salud y Bienestar</h2>
                            <article class="travel">
                                <!--TRAVEL SECTION THUMB START-->
                                <div class="treval-thumb">
                                    <figure class="hover-style">
                                        <a href="#"><img alt="" src="images/travel.png"></a>
                                    </figure>
                                    <div class="text">
                                        <h2>Fresh apricot with huge sale</h2>
                                        <ul class="post-comments">
                                            <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li>
                                        </ul>
                                        <p>Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi. Phasellus at ante magna. Quisque nec porta nulla. Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget lacinia rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                                        <a class="read-more" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <!--TRAVEL SECTION THUMB END-->
                                <div class="travel-listing">
                                    <ul>
                                        <li>
                                            <figure>
                                                <a href="#"><img alt="" src="images/travel-listing.png"></a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="#">Speaker Boehner Fails Upwards</a></h2>
                                                <p>Vestibulum nec venenatis erat, et adipiscing ipsumvamus posue eget lacinia rutrum..</p>
                                                <ul class="post-comments">
                                                    <li><a href="#">14th January 2013</a></li>
                                                    <li><a href="#">32 Comments</a></li>
                                                    <li>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>                                                
                                                        124 Votes
                                                     </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="#"><img alt="" src="images/travel-listing2.png"></a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="#">Speaker Boehner Fails Upwards</a></h2>
                                                <p>Vestibulum nec venenatis erat, et adipiscing ipsumvamus posue eget lacinia rutrum..</p>
                                                <ul class="post-comments">
                                                    <li><a href="#">14th January 2013</a></li>
                                                    <li><a href="#">32 Comments</a></li>
                                                    <li>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>                                                
                                                        124 Votes
                                                     </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <img alt="" src="images/pauta_750_200.jpg">
                                </div>
                            </article>
                        </div>
                        <!--TREVAL END-->

                        <!--TECH AND TREVAL START-->
                        <div class="tech">
                            <div class="row">
                                <div class="span2">
                                    <div class="new-ad">
                                        <img src="images/new-ad2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="span6">
                                <!--ENTERTAINMENT START-->
                                <div class="entertainment">
                                    <h2 class="h-style">Sociales</h2>
                                    <div class="entertainment-sec">
                                        <div class="row">
                                            <div class="span3">
                                                <div class="business">
                                                    <figure class="hover-style">
                                                        <a href="#"><img src="images/entertainment.png" alt=""></a>
                                                        <div class="like-icon"><i class="fa fa-heart-o"></i></div>
                                                    </figure>
                                                    <div class="text">
                                                        <h4>Pricey fashion staples</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                        <ul class="post-comments">
                                                            <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li>
                                                            <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li>
                                                        </ul>
                                                        <p>Integer ornare libero nisi.  Suspendisse nec orci vel elit aliquet blandit in non orci. Vivamus posuere dui eget iaculis, ligula arcu ultrices metus, ac venenatis dui leo ut odio. Phasellus a augue congue...</p>
                                                        <a href="#" class="read-more">Find Out More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="sports-thumbs-list">
                                                    <ul>
                                                        <li>
                                                            <div class="sports-thumbs">
                                                                <figure>
                                                                    <a href="#"><img src="images/sports-thumb.png" alt=""></a>
                                                                </figure>
                                                                <div class="text">
                                                                    <a href="#">Speaker Boehner Fails </a>
                                                                    <p>12 december 2014</p>
                                                                    <div class="rating">
                                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sports-thumbs">
                                                                <figure>
                                                                    <a href="#"><img src="images/sports-thumb4.png" alt=""></a>
                                                                </figure>
                                                                <div class="text">
                                                                    <a href="#">Speaker Boehner Fails </a>
                                                                    <p>12 december 2014</p>
                                                                    <div class="rating">
                                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sports-thumbs">
                                                                <figure>
                                                                    <a href="#"><img src="images/sports-thumb2.png" alt=""></a>
                                                                </figure>
                                                                <div class="text">
                                                                    <a href="#">Speaker Boehner Fails </a>
                                                                    <p>12 december 2014</p>
                                                                    <div class="rating">
                                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sports-thumbs">
                                                                <figure>
                                                                    <a href="#"><img src="images/sports-thumb3.png" alt=""></a>
                                                                </figure>
                                                                <div class="text">
                                                                    <a href="#">Speaker Boehner Fails </a>
                                                                    <p>12 december 2014</p>
                                                                    <div class="rating">
                                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <!--ENTERTAINMENT END-->
                                <div class="life">
                                <h2 class="h-style">Life Style</h2>
                                <div class="life-style">
                                    <h3>This week special</h3>
                                    <p class="color"><strong>Philip Seymour expected soon</strong></p>
                                    <ul class="post-comments">
                                        <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li>
                                        <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li>
                                    </ul>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="life-style-thums">
                                                <a href="#"><img src="images/life-style1.png" alt=""></a>
                                                <div class="caption">
                                                    <p>Quisque libero sem, dignissim, dignissim sit amet nulla</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="life-style-thums">
                                                <a href="#"><img src="images/life-style2.png" alt=""></a>
                                                <div class="caption">
                                                    <p>Quisque libero sem, dignissim, dignissim sit amet nulla</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="life-style-thums">
                                                <a href="#"><img src="images/life-style3.png" alt=""></a>
                                                <div class="caption">
                                                    <p>Quisque libero sem, dignissim, dignissim sit amet nulla</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--TECH AND TREVAL END-->
                    </div>
                    <div class="span4">
                        <div class="sidebar">
                            <!--SIDE BAR AD WIDGET START-->
                            <div class="widget widget-new-ad">
                                <img src="images/pauta_300_250.jpg" alt="">
                            </div>
                            <div class="widget widget-new-ad">
                                <img src="images/Nueva_pauta_rotativa_Home.jpg" alt="">
                            </div>                            
                            <!--SIDE BAR AD WIDGET END-->
                            <!--HOT NEW WIDGET START-->
                            <div class=" widget hot-news">
                                <h2>Artículo de opinión</h2>
                                <figure>
                                    <a href="#"><img alt="" src="images/hot-news.png"></a>
                                </figure>
                                <div class="text">
                                    <p>Texto artículo de opinión..</p>
                                    <a href="#" class="color">Leer...</a>
                                </div>
                            </div>
                           <div class="widget widget-new-ad">
                                <img src="images/pauta_300_250.jpg" alt="">
                            </div> 

                            <!--HOT NEW WIDGET END-->
                            <!--POLL WIDGET START-->
                            <div class="widget poll-widget">
                                <h2>Encuesta</h2>
                                <div class="inner">
                                    <p>Pregunta de la encuesta</p>
                                    <input id="demo_box_1" class="css-checkbox" type="radio" checked="checked" name="poll" />
                                    <label for="demo_box_1" class="css-label">Si</label>
                                    
                                    <input id="demo_box_2" class="css-checkbox" type="radio" name="poll" />
                                    <label for="demo_box_2" class="css-label">No</label>
                                    
                                    
                                    <input id="demo_box_3" class="css-checkbox" type="radio" name="poll" />
                                    <label for="demo_box_3" class="css-label">No sé</label>
                                    <a href="#" class="pull-left">Ver resultado</a>
                                    <a href="#" class="pull-right">Votar</a>
                                </div>
                            </div>
                            <!--POLL WIDGET END-->
                           <div class="widget widget-new-ad">
                                <img src="images/pauta_300_250.jpg" alt="">
                            </div>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--MAIN CONTATN END-->

    <!--FOOTER START-->
    <footer>
        <!--FOOTER TOP AREA STAT-->
            <div class="container">
                <div class="row">
                        <figure>
                            <img alt="" src="images/mega_banner_publicidad2.jpg">
                        </figure>
                        <br>
                </div>
            </div>
        <!--FOOTER TOP AREA END-->

        <div class="bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget text-widget">
                            <h2 class="h-style">Políticas de Privacidad</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
                            <p class="phon">Phone: 182 2569 5896</p>
                            <p class="email">Email: info@modu.versus</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget widget-slider">
                            <h2 class="h-style">Publicidad</h2>
                            <div class="flexslider">
                              <ul class="slides">
                                <li><img src="images/footer-slider.jpg" alt=""></li>
                                <li><img src="images/footer-slider2.jpg" alt=""></li>
                                <li><img src="images/footer-slider3.jpg" alt=""></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget widget-signin">
                            <h2 class="h-style">Suscríbase</h2>
                            <ul>
                                <li>
                                    <div class="input-icon user"></div>
                                    <input type="text" class="input-block-level">
                                </li>
                                <li>
                                    <div class="input-icon password"></div>
                                    <input type="password" class="input-block-level">
                                </li>
                                <li><button class="btn-style">Enviar</button></li>
                            </ul>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
        <div class="copy-rights">
            <p>COPYRIGHT © 2013  By <a href="www.crunchpress.com" target="_blank">safetyworkla.com</a></p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.vticker.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.jcarousel.min.js"></script>
<script src='assets/js/fullcalendar.min.js'></script>
<script src="assets/js/weather.js"></script>
<script src="assets/js/Chart.js"></script>
<script src="assets/js/jquery.easy-pie-chart.js"></script>
<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
