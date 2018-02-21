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
                            </div>
                            <div class="span2 visible-desktop">
                                <div class="right-now">
                                    <h2>Reflexionemos</h2>
                                        <!-- <p class="color">Morbi condimentum</p>
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
                                    <?php foreach ($publicidad -> result() as $item) { ?>
                                        <?php if ($item -> tipo_publicitario == "Pauta Vertical Central Vida y Estilo") { ?>
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="span4">
                    <div class="sidebar">
                        <!--PHOTOS WIDGET START-->
                        <div class="widget photos-widget gallery">
                            <ul>
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Superior Derecha Vida y Estilo") { ?>
                                    <?php if (($item -> orden_publicitario <= 4)) { ?>
                                            <li>
                                                <a href="<?php echo $item-> enlace_publicitario ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                                </a>
                                            </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                            </ul>
                        </div>

                        <!-- PAUTA COLUMAN DERECHA -->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Vida y Estilo") { ?>
                                <?php if (($item -> orden_publicitario == 1) || ($item -> orden_publicitario == 2)) { ?>
                                <div class="widget widget-new-ad">
                                    <div class="widget">
                                        <a href="<?php echo $item-> enlace_publicitario ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                        <!--TWITTER FEEDS WIDGET START-->
                        <div class="widget widget-twitter">
                            <header>
                                <i class="fa fa-twitter"></i>
                                <h4>Twitter</h4>
                                <p> Safety</p>
                            </header>
                                <a class="twitter-timeline" data-lang="es" data-width="330" data-height="500" href="https://twitter.com/RevistaSafety?ref_src=twsrc%5Etfw">Tweets  RevistaSafety</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>

                        <!-- PAUTA COLUMAN DERECHA -->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Vida y Estilo") { ?>
                                <?php if (($item -> orden_publicitario == 3) || ($item -> orden_publicitario == 4)) { ?>
                                <div class="widget widget-new-ad">
                                    <div class="widget">
                                        <a href="<?php echo $item-> enlace_publicitario ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>