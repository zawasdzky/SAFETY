    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <section>
                    <div class="news-slider">
                        <div class="flexslider">
                          <ul class="slides">
                            <?php foreach ($articulos_vida_estilo -> result() as $articulo) { ?>
                                <li>
                                    <div class="thumb">
                                        <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>">
                                            <img src="<?php echo base_url()."fotos_vida_estilo/".$articulo-> foto1; ?>" alt="<?php echo $articulo-> titulo_vida_estilo;  ?>">
                                        </a>
                                        <div class="caption">
                                            <p><?php echo $articulo -> titulo_vida_estilo ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                          </ul>
                        </div>
                    </div>
                    </section>
                    <!--FASHION SECTION END-->
                    <!--LATEST REVIEWS START-->
                    <section class="news-article health-article">
                        <h2 class="h-style">Artículos Kids</h2>
                        <ul>
                            <?php foreach ($articulos_vida_estilo -> result() as $articulo) { ?>
                                <?php if ( $articulo -> tipo_vida_estilo == "Kids") { ?>
                                <li>
                                    <figure class="hover-style"><a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>"><img src="<?php echo base_url()."fotos_vida_estilo/".$articulo-> foto0; ?>" alt="<?php echo $articulo-> titulo_vida_estilo;  ?>"></a></figure>
                                    <div class="text">
                                        <p><?php echo $articulo-> titulo_vida_estilo;  ?></p>
                                    </div>
                                </li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    </section>
                    <!--LATEST REVIEWS END-->
                    <section>
                        <div  class="row">
                            <div class="span6 span-8">
                                <!--LATEST ARTICLE START-->
                                <div class="latest-article">
                                    <h2 class="h-style">Artículos Men</h2>
                                    <ul class="row">
                                        <!--list item start-->
                                        <?php foreach ($articulos_vida_estilo -> result() as $articulo) { ?>
                                        <?php if ( $articulo -> tipo_vida_estilo == "Men") { ?>
                                            <li class="span3">
                                                <div class="tech-section">
                                                    <h4 class="color"><?php echo $articulo-> titulo_vida_estilo;  ?></h4>
                                                    <p><?php echo $articulo-> descripcion_vida_estilo;  ?> </p>
                                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>" class="color">Ver  Más</a>

                                                </div>
                                            </li>
                                            <?php }?>
                                        <?php }?>
                                        <!--list item start-->
                                    </ul>
                                </div>
                                <!--LATEST ARTICLE END-->
                                <div class="recent-posts">
                                    <h2 class="h-style">Artículos Women</h2>
                                    <ul>
                                        <!--list item start-->
                                        <?php foreach ($articulos_vida_estilo -> result() as $articulo) { ?>
                                        <?php if ( $articulo -> tipo_vida_estilo == "Women") { ?>
                                        <li>
                                            <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>"><img src="<?php echo base_url()."fotos_vida_estilo/".$articulo-> foto0; ?>" alt="<?php echo $articulo-> titulo_vida_estilo;  ?>" width="180">
                                                <div class="caption">
                                                    <p><?php echo $articulo-> titulo_vida_estilo;  ?></p>
                                                </div>
                                            </a>
                                        </li>
                                            <?php }?>
                                        <?php }?>
                                        <!--list item end-->
                                    </ul>
                                </div>

                            </div>
                            <div class="span2 visible-desktop">
                                <div class="right-now">
                                    <h2>Reflexionemos</h2>
<!--                                     <p class="color">Morbi condimentum</p>
                                    <p>Morbi condimentum tempus Aenean in erat sed neque convallis metus. </p>
                                    <figure>
                                        <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>"><img src="images/right-now-health.jpg" alt=""></a>
                                    </figure> -->
                                    <ul class="thumb-list">
                                    <?php foreach ($articulos_vida_estilo -> result() as $articulo) { ?>
                                    <?php if ( $articulo -> tipo_vida_estilo == "Reflexionemos") { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>"><img src="<?php echo base_url()."fotos_vida_estilo/".$articulo-> foto0; ?>" alt="<?php echo $articulo-> titulo_vida_estilo;  ?>" ></a>
                                            </figure>
                                            <div class="text">
                                                <p><?php echo $articulo-> titulo_vida_estilo;  ?></p>
                                                <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>" class="color">Ver más</a>
                                            </div>
                                        </li>
                                            <?php }?>
                                        <?php }?>
                                    </ul>
                                </div>
                                <div class="add2">
                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>"><img src="images/add7.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="top-five">
                            <h2 class="h-style">Top 5 Artículos</h2>
                            <ul>
                                <?php foreach ($destacados_vida_estilo -> result() as $articulo) { ?>
                                <li class="hover-style">
                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>">
                                        <img src="<?php echo base_url()."fotos_vida_estilo/".$articulo-> foto0; ?>" alt="<?php echo $articulo-> titulo_vida_estilo; ?>" width="152">
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="span4">
                    <div class="sidebar">
                        <!--PHOTOS WIDGET START-->
                        <div class="widget photos-widget gallery">
                            <ul>
                                <li><a href="images/m1.png" data-rel="prettyPhoto[gallery1]"><img src="images/m1.png" alt=""></a></li>
                                <li><a href="images/m2.png" data-rel="prettyPhoto[gallery1]"><img src="images/m2.png" alt=""></a></li>
                                <li><a href="images/m3.png" data-rel="prettyPhoto[gallery1]"><img src="images/m3.png" alt=""></a></li>
                                <li><a href="images/m4.png" data-rel="prettyPhoto[gallery1]"><img src="images/m4.png" alt=""></a></li>
                            </ul>
                        </div>
                        <!--PHOTOS WIDGET END-->
                        <!--TWITTER FEEDS WIDGET START-->
                        <div class="widget widget-twitter">
                            <header>
                                <i class="fa fa-twitter"></i>
                                <h4>Twitter</h4>
                                <p> Safety</p>
                            </header>
                                <a class="twitter-timeline" data-lang="es" data-width="330" data-height="500" href="https://twitter.com/RevistaSafety?ref_src=twsrc%5Etfw">Tweets  RevistaSafety</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <!--TWITTER FEEDS WIDGET END-->

                         <!--RELATED POST WIDGET START-->
                        <div class="widget widget-related-post">
                            <h2>Related Post</h2>
                            <ul>
                                <li>
                                    <p>Philosophy cannot be taught; it is the application of the sciences to truth</p>
                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>" class="color">by Lord Wilmore</a>
                                </li>
                                <li>
                                    <p>Now let the avenging god make way for me to punish the wrongdoer!</p>
                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>" class="color">by Abbé Busoni</a>
                                </li>
                                <li>
                                    <p>Philosophy cannot be taught; it is the application of the sciences to truth</p>
                                    <a href="<?php echo base_url()."Vida_estilo/detalle_articulo_vida_estilo/".$articulo-> url_amigable_vida_estilo; ?>" class="color">by Lord Wilmore</a>
                                </li>
                            </ul>
                        </div>
                        <!--RELATED POST WIDGET START-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>