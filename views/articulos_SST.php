    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <!-- PAUTAS -->
                        <div class="widget widget-new-ad">
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Izquierda SST") { ?>
                                            <div class="widget">
                                                <a href="<?php echo $item-> enlace_publicitario ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>" target="_blank">
                                                </a>
                                            </div>
                                    <?php } ?>
                            <?php } ?>
                        </div>
                        <!-- FIN PAUTAS -->
                    </div>
                </div>
                <div class="span6">
                    <div class="news-slider">
                        <div class="flexslider">
                          <ul class="slides">
                            <?php $i=1; foreach ($articulos_SST -> result() as $item) { ?>
                                <?php if ($i<5) { ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>">
                                                <img src="<?php echo base_url()."fotos_SST/".$item -> foto1;?>" alt="<?php echo $item -> foto1; ?>">
                                            </a>
                                            <div class="caption">
                                                <p><?php echo $item -> titulo_SST;?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                             <?php  $i++;  } ?>
                          </ul>
                        </div>
                    </div>
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
                          <!-- PAUTA CENTRAL HORIZONTAL -->
                          <div>
                              <?php foreach ($publicidad -> result() as $item) { ?>  
                                  <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal SST") { ?>   
                                      <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                          <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                      </a>  
                                  <?php } ?>
                              <?php } ?>
                          </div>
                          <!--FIN PAUTA CENTRAL HORIZONTAL -->                          
                    </div>
                </div>
                <div class="span3">
                    <div class="sidebar">
                        <!-- PAUTAS -->
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha SST") { ?>
                                    <?php if (($item -> orden_publicitario <= 2)) { ?>
                                        <div class="widget widget-new-ad">
                                            <div class="widget">
                                                <a href="<?php echo $item-> enlace_publicitario ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>" target="_blank">
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <!-- FIN PAUTAS -->
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
                        <!-- PAUTAS -->
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha SST") { ?>
                                    <?php if (($item -> orden_publicitario == 3)) { ?>
                                        <div class="widget widget-new-ad">
                                            <div class="widget">
                                                <a href="<?php echo $item-> enlace_publicitario ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>" target="_blank">
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <!-- FIN PAUTAS -->
                            <!--ENCUESTAS-->
                            <section>
                                <?php $this->load->view('includes/encuesta');  ?>
                            </section>
                            <!--FIN ENCUESTAS-->
                        <!--NEW CATEGORIES WIDGET START-->
                    </div>
                </div>
            </div>
        </div>
    </div>
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