    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <!--TAGS WIDGET START-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--TAGS WIDGET END-->
                        <!--TAGS WIDGET START-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--TAGS WIDGET END-->
                        <!--TAGS WIDGET START-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--TAGS WIDGET END-->

                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>

                    </div>
                </div>
                <div class="span6">
                    <section class="blog-listing">
                        <!--POST ARTICLE START-->
                        <div class="flexslider">
                              <ul class="slides">
                                <?php foreach ($articulos_SST -> result() as $item) { ?>
                                    <li>
                                        <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>">
                                            <img src="<?php echo base_url()."fotos_SST/".$item -> foto1;?>" alt="<?php echo $item -> foto1; ?>">
                                        </a>
                                        <div class="caption">
                                            <h2><?php echo $item -> titulo_SST ?></h2>
                                        </div>
                                    </li>
                                <?php } ?>
                              </ul>
                        </div>
                    </section>

                    <section>
                        <div class="span6">
                            <div class="health-news">
                                <h2 class="h-style">SST</h2>
                                <ul class="headlines" id="paginar">
                                    <?php foreach ($articulos_SST -> result() as $item) { ?>
                                     <li>
                                         <figure>
                                           <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>">
                                            <img src="<?php echo base_url()."fotos_SST/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="200">
                                            </a>
                                        </figure>
                                        
                                        <div class="text">
                                             <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>"></a>
                                            <h2><?php echo $item-> titulo_SST; ?></h2>
                                            <p><?php echo $item-> descripcion_SST; ?></p>
                                        </div>
                                        <div class="headline-review text-right">
                                           <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>"><i class="fa fa-eye"></i>Ver más</a>
                                        </div>
                                    </li> 
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>

                </div>
                <div class="span3">
                    <div class="sidebar">
                        <!--PHOTOS WIDGET START-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--PHOTOS WIDGET END-->
                        <!--TWITTER FEEDS WIDGET START-->
                        <div class="widget widget-twitter">
                            <header>
                                <i class="fa fa-twitter"></i>
                                <h4>Twitter</h4>
                                <p>@RevistaSafety</p>
                             </header>
                             <div>
                                 <a class="twitter-timeline" data-lang="es" data-height="650" data-theme="light" href="https://twitter.com/RevistaSafety">RevistaSafety</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                             </div>
                        </div>
                        <!--TWITTER FEEDS WIDGET END-->

                        <!--TABS WIDGET END-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--NEW CATEGORIES WIDGET START-->
                        <!--TABS WIDGET END-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
                        <!--NEW CATEGORIES WIDGET START-->
                        <!--TABS WIDGET END-->
                        <div class="widget">
                            <img src="images/pauta.jpg" class="img-responsive">
                        </div>
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
                        <!--NEW CATEGORIES WIDGET START-->
                    </div>
                </div>
            </div>
        </div>
    </div>
