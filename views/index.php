<!--WRAPPER START-->
<div class="wrapper">
    <!--BANNER START-->
    <div class="banner">
        <ul class="bxslider">
<!--           <li>
            <img src="images/slider_1.jpg">
            <div class="banner-caps">
               <h2>Silent Beauty...</h2>
                <p>quis nostrud exercitation ullamco laboris nisi ut</p>
            </div>
          </li> -->
        <?php foreach ($publicidad -> result() as $item) { ?>  
            <?php if ($item -> tipo_publicitario == "Slider Home") { ?>     
                  <li>
                    <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>">
                    </a>
                    <div class="banner-caps">
                        <h2><?php echo $item -> nombre_publicitario; ?></h2>
                        <p><?php echo $item -> titulo_publicitario; ?></p>
                    </div>
                  </li>
            <?php } ?>
        <?php } ?>
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
                            <img src="<?php echo base_url()."fotos_noticias/". $noticia-> foto0 ?>" alt="<?php echo $noticia -> titulo_noticia; ?>" style="width: 168px"/>
                        </a>
                    </figure>
                    <div class="text">
                        <div class="heading">
                            <h2><?php echo $i; ?></h2>
                            <h4 style="line-height: 23px;"><?php echo $noticia -> titulo_noticia; ?></h4>
                        </div>
                        <p><?php //echo $noticia -> descripcion_noticia; ?>                        
                            <a href="<?php echo base_url()."Noticias/detalle_noticia/".$noticia -> url_amigable_noticia; ?>">
                            <!-- <font color="white"> <i class="fa fa-eye"></i>  Ver más</font> -->
                        </a></p>
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

                        <div class="widget-slider">
                            <div class="flexslider">
                              <ul class="slides">
                                <?php foreach ($publicidad -> result() as $item) { ?>
                                     <?php if ($item -> tipo_publicitario == "Home Superior Izquierdo") { ?>   
                                        <li>
                                        <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                        </a> 
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                              </ul>
                            </div>
                        </div>


                <div class="image-gallery">
                    <h3>Infografías</h3>
                    <ul class="mycarousel jcarousel-skin-tango gallery">
                        <?php foreach ($infografias -> result() as $infografia) { ?>
                            <li>
                                <a href="<?php echo base_url();?>Infografias?infografia=<?php echo $infografia-> url_amigable_infografia;?>">
                                    <img src="<?php echo base_url()."fotos_infografias/". $infografia-> foto0 ?>" alt="<?php echo $infografia -> foto0; ?>" style="width: 200px; max-width: 200px; margin-right: 30px;"/>
                                </a>                             
                            </li>
                        <?php } ?>
                   </ul>
                </div> 



                    </div>
                    <div class="span8">
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                        <article>
                            <div class="row">
                                <div class="span6 span-8">
                                    <div class="latest-news">
                                        <h2 class="h-style">Legislaciónes</h2>
                                        <ul class="headlines">
                                            <?php foreach ($legislaciones-> result() as $legislacion) { ?>
                                                <li>
                                                    <figure>
                                                        <a href="<?php echo $legislacion-> url_descarga_legislacion; ?>" target="_blank">
                                                            <img src="<?php echo base_url();?>/assets/images/adobe-pdf-icon.jpg" alt="<?php echo $legislacion-> titulo_legislacion; ?>" width="102">
                                                        </a>
                                                    </figure>
                                                    <div class="text">
                                                        <h5><a href="<?php echo $legislacion-> url_descarga_legislacion; ?>" target="_blank"> <span class="color"><?php echo $legislacion-> titulo_legislacion; ?></span></a></h5>
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
                                    <?php foreach ($publicidad -> result() as $item) { ?>  
                                        <?php if ($item -> tipo_publicitario == "Home Superior Derecho") { ?>  
                                        <div class="new-ad"> 
                                            <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                                <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                            </a>  
                                        </div>
                                        <?php } ?>
                                    <?php } ?>
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
                                    <?php $item_SST = $SST->row(); ?>
                                        <div class="sports-event">
                                            <div class="thumb hover-style">
                                                <a href="<?php echo base_url();?>SST/detalle_SST/<?php echo $item_SST-> url_amigable_SST;?>"><img src="<?php echo base_url();?>fotos_SST/<?php echo $item_SST-> foto1;?>" alt="<?php echo $item_SST-> foto1;?>"></a>
                                            </div>
                                            <div class="text">
                                                <h4><?php echo $item_SST-> titulo_SST ?></h4>
                                                <p><?php echo $item_SST-> descripcion_SST?></p>
                                                <a href="<?php echo base_url();?>SST/detalle_SST/<?php echo $item_SST-> url_amigable_SST;?>" class="color pull-right"> <i class="fa fa-eye"></i>  Ver más</a>
                                                <ul class="post-comments">
                                                </ul>
                                            </div>
                                        </div>
                                    <!--SPORTS THUMBS START-->
                                    <div class="sports-thumbs-list">
                                        <ul>
                                        <?php $i=1; foreach ($SST-> result() as $item) { ?>
                                            <?php if ($i!=1) { //omitiendo el primer articulo ?>
                                                <li>
                                                    <div class="sports-thumbs">
                                                        <figure>
                                                            <a href="<?php echo base_url();?>SST/detalle_SST/<?php echo $item-> url_amigable_SST;?>">
                                                                <img src="<?php echo base_url();?>fotos_SST/<?php echo $item-> foto0;?>" alt="<?php echo $item-> foto0;?>" width="79px">
                                                            </a>
                                                        </figure>
                                                        <div class="text">
                                                            <a href="<?php echo base_url();?>SST/detalle_SST/<?php echo $item-> url_amigable_SST;?>"><?php echo $item-> titulo_SST;?></a>
                                                            <p><?php // echo $item-> fecha_publicacion_SST;?></p>
                                                            <div class="rating">
                                                                    <!-- <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        <?php $i++; } ?>
                                        </ul>
                                    </div>
                                    <!--SPORTS THUMBS END-->
                                </div>
                            </div>
                            <div class="span2 visible-desktop">
                                <div class="add2">
                                    <?php foreach ($publicidad -> result() as $item) { ?>  
                                        <?php if ($item -> tipo_publicitario == "Home Central Vertical") { ?>   
                                            <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                                <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                            </a>  
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--TREVAL START-->
                        <div class="travel-section">
                            <h2 class="h-style">Salud y Bienestar</h2>
                            <article class="travel">
                                <!--TRAVEL SECTION THUMB START-->
                                <?php $salud_bienestar_item = $salud_bienestar->row(); ?>
                                <div class="treval-thumb">
                                    <figure class="hover-style">
                                        <a href="<?php echo base_url();?>Salud_bienestar/detalle_salud_bienestar/<?php echo $salud_bienestar_item-> url_amigable_salud;?>">
                                            <img alt="<?php echo $salud_bienestar_item-> foto1;?>" src="<?php echo base_url();?>fotos_salud_bienestar/<?php echo $salud_bienestar_item-> foto1;?>" style="width: 355px;">
                                        </a>
                                    </figure>
                                    <div class="text">
                                        <h2><?php echo $salud_bienestar_item-> titulo_salud;?></h2>
                                        <ul class="post-comments">
                                            <!-- <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li> -->
                                        </ul>
                                        <p><?php echo $salud_bienestar_item-> descripcion_salud;?></p>
                                        <div class="headline-review text-right">
                                            <a href="<?php echo base_url();?>Salud_bienestar/<?php echo $salud_bienestar_item-> url_amigable_salud;?>"> <i class="fa fa-eye"></i>  Ver más</a>
                                        </div>
                                    </div>
                                </div>
                                <!--TRAVEL SECTION THUMB END-->
                                <div class="travel-listing">
                                    <ul>
                                        <?php $i=1; foreach ($salud_bienestar-> result() as $item_salud) { ?>
                                            <?php if ($i!=1) { //omitiendo el primer articulo ?>
                                                <li>
                                                    <figure>
                                                        <a href="<?php echo base_url();?>Salud_bienestar/detalle_salud_bienestar/<?php echo $item_salud-> url_amigable_salud;?>">
                                                            <img alt="<?php echo $item_salud-> foto0;?>" src="<?php echo base_url();?>fotos_salud_bienestar/<?php echo $item_salud-> foto0;?>" style="width: 120px;">
                                                        </a>
                                                    </figure>
                                                    <div class="text">
                                                        <h2>
                                                            <a href="<?php echo base_url();?>Salud_bienestar/detalle_salud_bienestar/<?php echo $item_salud-> url_amigable_salud;?>">
                                                                <?php echo $item_salud-> titulo_salud; ?>
                                                            </a>
                                                        </h2>
                                                        <p><?php echo $item_salud-> descripcion_salud; ?></p>
                                                        <div class="post-comments">
                                                            <div class="headline-review text-right">
                                                                <a href="<?php echo base_url();?>Salud_bienestar/detalle_salud_bienestar/<?php echo $item_salud-> url_amigable_salud;?>"> <i class="fa fa-eye"></i> Ver más</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        <?php $i++; } ?>
                                    </ul>
                                    <hr>
                                </div>
                                <div>
                                    <?php foreach ($publicidad -> result() as $item) { ?>  
                                        <?php if ($item -> tipo_publicitario == "Home Central Inferior") { ?>   
                                            <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                                <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                            </a>  
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </article>
                        </div>
                        <!--TREVAL END-->
                        <!--TECH AND TREVAL START-->
                        <div class="tech">
                            <div class="row">
                                <div class="span2">
                                    <div class="new-ad">
                                        <?php foreach ($publicidad -> result() as $item) { ?>
                                            <?php if ($item -> tipo_publicitario == "Home Vertical Inferior") { ?>
                                                <a href="<?php echo $item-> enlace_publicitario ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>" target="_blank">
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="span6">
                                <!--ENTERTAINMENT START-->
                                <div class="entertainment">
                                    <h2 class="h-style">Sociales</h2>
                                    <div class="entertainment-sec">
                                        <div class="row">
                                            <div class="span3">
                                                <?php $sociales_item = $sociales->row(); ?>
                                                <div class="business">
                                                    <figure class="hover-style">
                                                        <a href="<?php echo base_url();?>Sociales/detalle_social/<?php echo $sociales_item-> url_amigable_social;?>">
                                                            <img alt="<?php echo $sociales_item-> foto0;?>" src="<?php echo base_url();?>fotos_sociales/<?php echo $sociales_item-> foto0;?>" style="width: 267px;">
                                                        </a>
                                                        <div class="like-icon"><i class="fa fa-heart-o"></i>
                                                        </div>
                                                    </figure>
                                                    <div class="text">
                                                        <h4><?php echo $sociales_item-> titulo_social;?></h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                        <ul class="post-comments">
                                                            <li><a href="<?php echo base_url();?>Sociales/detalle_social/<?php echo $sociales_item-> url_amigable_social;?>"><i class="fa fa-eye"></i>Ver más</a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li>
                                                            <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li>
                                                        </ul>
                                                        <p><?php echo $sociales_item-> descripcion_social;?></p>
                                                        <a href="<?php echo base_url();?>Sociales" class="read-more">Ver Todos</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="sports-thumbs-list">
                                                    <ul>
                                                    <?php 
                                                        $i=1; foreach ($sociales-> result() as $item_social) { 
                                                        $fecha = $item_social-> fecha_publicacion_social;
                                                        setlocale(LC_ALL,"es_ES");
                                                        date_default_timezone_set('America/Bogota');
                                                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                        $mes = date('m', strtotime($fecha));
                                                        $dia = date('d', strtotime($fecha));
                                                        $anio = date('Y', strtotime($fecha));

                                                         if ($i!=1) { //omitiendo el primer articulo 
                                                    ?>
                                                        <li>
                                                            <div class="sports-thumbs">
                                                                <figure>
                                                                    <a href="<?php echo base_url();?>Sociales/detalle_social/<?php echo $item_social-> url_amigable_social;?>">
                                                                        <img alt="<?php echo $item_social-> foto0;?>" src="<?php echo base_url();?>fotos_sociales/<?php echo $item_social-> foto0;?>" style="width: 79px;">
                                                                    </a>
                                                                </figure>
                                                                <div class="text">
                                                                    <a href="<?php echo base_url();?>Sociales/detalle_social/<?php echo $item_social-> url_amigable_social;?>">
                                                                        <?php echo $item_social-> titulo_social;?>
                                                                    </a>
                                                                    <p><?php echo  $meses[$mes-1]." ". $dia." de ".$anio; ?></p>
                                                                    <div class="rating">
                                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php } ?>
                                                    <?php $i++; } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <!--ENTERTAINMENT END-->
                                <div class="life">
                                    <h2 class="h-style">Seguros</h2>
                                    <div class="life-style">
                                        <!-- <h3>This week special</h3> -->
                                        <!-- <p class="color"><strong>Philip Seymour expected soon</strong></p> -->
                                        <ul class="post-comments">
                                            <!-- <li><a href="#"><i class="fa fa-user"></i>M-Elgendy</a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-heart-o"></i>1205</a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-comment-o"></i>125</a></li> -->
                                        </ul>
                                        <div class="row-fluid">
                                            <?php foreach ($seguros-> result() as $item_seguro) { ?>
                                            <div class="span4">
                                                <div class="life-style-thums">
                                                    <img alt="<?php echo $item_seguro-> foto0;?>" src="<?php echo base_url();?>fotos_seguros/<?php echo $item_seguro-> foto0;?>" style="width: 170px;">
                                                    <a href="<?php echo base_url();?>seguros/detalle_seguro/<?php echo $item_seguro-> url_amigable_seguro;?>"> 
                                                    <div class="caption">
                                                        <p><strong><?php echo $item_seguro-> titulo_seguro;?></strong></p>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php } ?>
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
                            <?php foreach ($publicidad -> result() as $item) { ?>  
                                <?php if (($item -> tipo_publicitario == "Home Columna Derecha") && ($item -> orden_publicitario) == 1) { ?>   
                                <div class="widget widget-new-ad">
                                    <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                    </a>  
                                </div>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($publicidad -> result() as $item) { ?>  
                                <?php if (($item -> tipo_publicitario == "Home Columna Derecha") && ($item -> orden_publicitario) == 2) { ?>   
                                <div class="widget widget-new-ad">
                                    <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                    </a>  
                                </div>
                                <?php } ?>
                            <?php } ?>
                            <!--SIDE BAR AD WIDGET END-->
                            <!--HOT NEW WIDGET START-->
<!--                             <div class=" widget hot-news">
                                <h2>Artículo de opinión</h2>
                                <figure>
                                    <a href="#"><img alt="" src="images/hot-news.png"></a>
                                </figure>
                                <div class="text">
                                    <p>Texto artículo de opinión..</p>
                                    <a href="#" class="color">Leer...</a>
                                </div>
                            </div> -->
                            <div class="widget widget-new-ad">
                            <?php foreach ($publicidad -> result() as $item) { ?>  
                                <?php if (($item -> tipo_publicitario == "Home Columna Derecha") && ($item -> orden_publicitario) == 3) { ?>   
                                    <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                    </a>  
                                <?php } ?>
                            <?php } ?>
                            </div>
                            <!--HOT NEW WIDGET END-->
                            <!--ENCUESTAS-->
                            <section>
                                <?php $this->load->view('includes/encuesta');  ?>
                            </section>
                            <!--FIN ENCUESTAS-->
                           <div class="widget widget-new-ad">
                            <?php foreach ($publicidad -> result() as $item) { ?>  
                                <?php if (($item -> tipo_publicitario == "Home Columna Derecha") && ($item -> orden_publicitario) == 4) { ?>   
                                    <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                        <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                    </a>  
                                <?php } ?>
                            <?php } ?>
                            </div>
                            <!-- REVISTA EN LINEA  -->
                            <section>
                                <?php $this->load->view('includes/inscripcion_revista');  ?>
                            </section>
                            <!-- END REVISTA EN LINEA  -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>    

