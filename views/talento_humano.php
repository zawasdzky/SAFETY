    <div class="main-contant">
    	<div class="container">
            <div class="row">
                <div class="span8">
                	<section>
                    <div class="news-slider">
                        <div class="flexslider">
                          <ul class="slides">
                            <?php $i=1; foreach ($talento_humano -> result() as $item) { ?>
                                <?php if ($i<5) { ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="<?php echo base_url()."Talento_humano/detalle_articulo_talento/".$item-> url_amigable_talento; ?>">
                                                <img src="<?php echo base_url()."fotos_talento_humano/".$item -> foto1;?>" alt="<?php echo $item -> foto1; ?>" >
                                            </a>
                                            <div class="caption">
                                                <p><?php echo $item -> titulo_talento ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                             <?php  $i++;  } ?>
                          </ul>
                        </div>
                    </div>
                    </section>
                    <!-- ARTICULOS -->
                	<section>
                    	<div class="health-news sports-news">
                            <h2 class="h-style">Talento Humano</h2>
                            <ul id="paginar">
                                <!--LIST ITEM START-->
                                <?php  $i=1;  foreach ($talento_humano -> result() as $item) { ?>
                                    <?php if ($i>5) { // Mostrar los 5 resultados siguientes ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."Talento_humano/detalle_articulo_talento/".$item-> url_amigable_talento; ?>"><img src="<?php echo base_url()."fotos_talento_humano/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="250"></a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."Talento_humano/detalle_articulo_talento/".$item-> url_amigable_talento; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_talento; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_talento; ?></p>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php $i++; } ?>
                                <!--LIST ITEM END-->
                            </ul>
                            <!-- PAUTA CENTRAL HORIZONTAL -->
                            <div>
                                <?php foreach ($publicidad -> result() as $item) { ?>  
                                    <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal Talento Humano") { ?>   
                                        <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                            <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                                        </a>  
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <!--FIN PAUTA CENTRAL HORIZONTAL -->
                        </div>
                    </section>
                    <section>
                        <?php $this->load->view('includes/videos');  ?>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                </div>

                <div class="span4">
                    <div class="sidebar">

                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 1)) { ?>
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

                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 2)) { ?>
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

                    	<!--ULTIMOS PRODUCTOS -->
                            <?php $this->load->view('includes/ultimos_productos');  ?>
                        <!--ULTIMOS PRODUCTOS  END-->

                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 3)) { ?>
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
                         <!--RELATED POST WIDGET START-->
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

                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 4)) { ?>
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
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 5)) { ?>
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
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Pauta Columna Derecha Talento Humano") { ?>
                                    <?php if (($item -> orden_publicitario == 6)) { ?>
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
                            <section>
                            <!--FACEBOOK FEEDS WIDGET START-->
                                <?php $this->load->view('includes/facebook_widget.php');  ?>
                            <!--FACEBOOK FEEDS WIDGET END--> 
                            </section>
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