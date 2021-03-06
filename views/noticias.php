    <div class="main-contant">
        <div class="container">
            <h2 class="h-style">Titulares</h2>
            <div class="row">
                <div class="span9">
                    <div class="news-slider">
                        <div class="flexslider">
                          <ul class="slides">
                          <?php foreach ($noticias -> result() as $item) { ?>
                                <li>
                                    <div class="thumb">
                                        <a href="<?php echo base_url()."Noticias/detalle_noticia/".$item->url_amigable_noticia; ?>">
                                             <img src="<?php echo base_url()."fotos_noticias/". $item-> foto1 ?>" alt="<?php echo $item -> titulo_noticia; ?>" >
                                        </a>
                                        <div class="caption">
                                            <p><?php echo $item -> titulo_noticia ?></p>
                                        </div>
                                    </div>
                                </li>
                         <?php  } ?>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <?php foreach ($publicidad -> result() as $pauta) { ?>
                        <?php if (( $pauta -> tipo_publicitario == "Pauta Superior Derecha Noticias") && ($pauta -> orden_publicitario <= 2)) { ?>
                        <div class="news-thumb">
                           <a href="<?php echo $pauta -> enlace_publicitario ?>"><img src="<?php echo base_url()."fotos_productos/".$pauta->foto_publicitario; ?>" alt="<?php echo $pauta -> nombre_publicitario ?>"></a>
                        </div>
                        <?php } ?>
                    <?php  } ?>
                </div>
            </div>
            <!--GALLERY SECTION START-->
            <section>
                <div class="image-gallery">
                    <h2 class="h-style">Últimas Noticias</h2>
                    <ul class="mycarousel jcarousel-skin-tango gallery">
                       <?php foreach ($noticias ->result() as $item) { ?>
                           <li>
                                <img src="<?php echo base_url()."fotos_noticias/". $item->foto0 ?>" alt="<?php echo $item -> titulo_noticia; ?>" >
                                <div class="caption">
                                    <a href="<?php echo base_url()."Noticias/detalle_noticia/".$item->url_amigable_noticia; ?>"><i class="fa fa-link"></i></a>
                                    <h4><?php echo $item -> titulo_noticia ?></h4>
                                    <p><?php echo $item  -> descripcion_noticia ?></p>
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
                                <?php foreach ($publicidad ->result() as $item) { ?>
                                    <?php if ($item -> tipo_publicitario == "Pauta Columna Izquierda Noticias"){ ?>
                                        <div class="widget">
                                            <a href="<?php echo $item -> enlace_publicitario ?>" target="_blank">
                                                <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                                            </a>
                                            <br><br><br>
                                        </div>
                                    <?php } ?>
                                <?php  } ?>
                                <!-- FIN PAUTA -->
                            </div>
                            <!-- FIN COLUMNA IZQUIERDA-->
                            <!-- INICIO COLUMNA CENTRAL-->
                            <div class="span6">
                                <div class="health-news">
                                    <h2 class="h-style">Noticias</h2>
                                    <ul class="headlines" id="paginar">

                                         <?php foreach ($noticias ->result() as $item) { ?>
                                         <li>
                                             <figure>
                                                <a  href="<?php echo base_url()."Noticias/detalle_noticia/".$item->url_amigable_noticia; ?>">
                                                <img src="<?php echo base_url()."fotos_noticias/".$item-> foto0;?>" alt="<?php echo $item-> foto0; ?>" width="190" ></a>
                                            </figure>
                                            
                                            <div class="text">
                                                <a  href="<?php echo base_url()."Noticias/detalle_noticia/".$item->url_amigable_noticia; ?>">
                                                <h2><?php echo $item->nombre_noticia; ?></h2></a>
                                                <p><?php echo $item->titulo_noticia; ?></p>
                                            </div>
                                            <div class="headline-review text-right">
                                                <a href="Noticias/detalle_noticia/<?php echo  $item->url_amigable_noticia; ?>"><i class="fa fa-eye"></i>Ver más</a>
                                            </div>
                                        </li> 
                                        <?php  } ?>
                                    </ul>
                                  <!-- PAUTA CENTRAL HORIZONTAL -->
                                  <div>
                                      <?php foreach ($publicidad -> result() as $item) { ?>  
                                          <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal Noticias") { ?>   
                                              <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                              </a>  
                                          <?php } ?>
                                      <?php } ?>
                                  </div>
                                  <!--FIN PAUTA CENTRAL HORIZONTAL -->                                            
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                </div>
                <!-- FIN COLUMNA CENTRAL-->
                <!-- INICIO COLUMNA DERECHA-->
                <div class="span3">
                    <div class="sidebar">
                        <?php foreach ($publicidad ->result() as $item) { ?>
                            <?php if (($item -> tipo_publicitario == "Pauta Columna Derecha Noticias") && ($item -> sitio_publicitario == "Safetywork")){ ?>
                                <div class="widget">
                                    <a href="<?php echo $item -> enlace_publicitario ?>" target="_blank">
                                        <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                                    </a>
                                    <br><br><br>
                                </div>
                            <?php } ?>
                        <?php  } ?>
                    </div>
                    <section>
                    <!--FACEBOOK FEEDS WIDGET START-->
                        <?php $this->load->view('includes/facebook_widget.php');  ?>
                    <!--FACEBOOK FEEDS WIDGET END--> 
                    </section>
                </div>
            </div>
        </div>
    </div>
     <!--FOOTER START-->
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>
<script type="text/javascript">
   $('#paginar').paginate({
  // how many items per page
  perPage:                5,      
  // boolean: scroll to top of the container if a user clicks on a pagination link        
  autoScroll:             true,           
  // which elements to target
  scope:                  '',         
  // defines where the pagination will be displayed    
  paginatePosition:       ['bottom'],     
  // Pagination selectors
 // containerTag:           'nav',
  paginationTag:          'ul',
  itemTag:                'li',
  //linkTag:                'a',
  // Determines whether or not the plugin makes use of hash locations
  useHashLocation:        true,           
  // Triggered when a pagination link is clicked
  onPageClick:            function() {}   
});
</script>   