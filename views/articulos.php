    <!--BREADCRUMBS END-->
    <div class="main-contant">
    	<div class="container">
            <div class="row">
            	<div class="span3">
                    <div class="sidebar">
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if ($item -> tipo_publicitario == "Columna Izquierda"): ?>
                            <div class="widget">
                            <figure>
                                <a href="<?php echo $item -> enlace_publicitario; ?>"><img src="<?php echo base_url()."fotos_productos/".$item-> foto_publicitario;?>" alt="<?php echo $item -> nombre_publicitario; ?>"></a>
                            </figure>   
                            </div>                             
                            <?php endif ?>
                        <?php } ?>                        
                    </div>
                </div>
                <div class="span6">
                	<section class="blog-listing">
                    	<!--POST ARTICLE START-->

                        	
                                <?php foreach ($publicidad -> result() as $item) { ?>
                                    <?php if (($item -> tipo_publicitario == "Columna Central") && ($item -> orden_publicitario ==1 )): ?>
                                            <figure>
                                                <a href="<?php echo $item -> enlace_publicitario; ?>"><img src="<?php echo base_url()."fotos_productos/".$item-> foto_publicitario;?>" alt="<?php echo $item -> nombre_publicitario; ?>"></a>
                                            </figure>                                
                                    <?php endif ?>
                                <?php } ?>  

                                <?php foreach ($articulos -> result() as $item) { ?>
                                    <article>
                                        <div class="text">
                                        	<div class="post-type">
                                                <img src="<?php echo base_url()."fotos_articulos/".$item->icono_articulo;?>" alt="<?php echo $item -> icono_articulo; ?>">
                                                <a class="post-date">
                                                <?php $fecha = $item -> fecha_publicacion_articulo;
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
                                        	<h4><a href="#"><?php echo $item -> titulo_articulo; ?></a></h4>
                                            <a class="color"><?php echo $item -> nombre_articulo; ?></a>
                                            <p><?php echo $item -> descripcion_articulo; ?></p>
                                        </div>
                                            <div class="post-footer">
                                                <a href="articulos/articulo/<?php echo $item -> url_amigable_articulo; ?>"> <span class="color"> VER MÁS</span></a>
                                                
                                            </div>
                                    </article>
                                <?php  } ?>  
                            <!--POST ARTICLE END-->
                        <div class="pagination-style">

                        </div>
                    </section>
                </div>
                <div class="span3">
                    <div class="sidebar">
                    	<!--PHOTOS WIDGET START-->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if (($item -> tipo_publicitario == "Columna Derecha") && ($item -> orden_publicitario ==1 )): ?>
                                <div class="widget">
                                    <figure>
                                        <a href="<?php echo $item -> enlace_publicitario; ?>"><img src="<?php echo base_url()."fotos_productos/".$item-> foto_publicitario;?>" alt="<?php echo $item -> nombre_publicitario; ?>"></a>
                                    </figure>                                
                                </div>
                            <?php endif ?>
                        <?php } ?>  
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
                    	<!--NEW CATEGORIES WIDGET START-->
                    	<div class="widget widget-top3">
                            <h2>Lo más Leido</h2>
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
                              
                            </ul>
                        </div>
                        <!--NEW CATEGORIES WIDGET END-->
                        <!--TABS WIDGET END-->
                        <!--PHOTOS WIDGET START-->
                        <?php foreach ($publicidad -> result() as $item) { ?>
                            <?php if (($item -> tipo_publicitario == "Columna Derecha") && ($item -> orden_publicitario >1 )): ?>
                                <div class="widget">
                                    <figure>
                                        <a href="<?php echo $item -> enlace_publicitario; ?>"><img src="<?php echo base_url()."fotos_productos/".$item-> foto_publicitario;?>" alt="<?php echo $item -> nombre_publicitario; ?>"></a>
                                    </figure>                                
                                </div>
                            <?php endif ?>
                        <?php } ?>  
                        <!--PHOTOS WIDGET END-->
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
    <!--FOOTER START-->
    <footer>

        <div class="copy-rights">
            <p>COPYRIGHT © 2013  By <a href="www.crunchpress.com" target="_blank">safetyworkla.com</a></p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
</body>
</html>
