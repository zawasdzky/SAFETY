    <div class="main-contant">
    	<div class="container">
            <div class="row">
                <div class="span9">
                    <!-- RESULTADOS -->
                	<section>
                    	<div class="health-news sports-news">
                            <h2 class="h-style">Resultados para: <?php echo $palabra; ?></h2>
                            <ul id="paginar">
                                <!--LIST ITEM START-->
                                <?php  foreach ($resultados_talento -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."talento_humano/detalle_articulo_talento/".$item-> url_amigable_talento; ?>">
                                                    <img src="<?php echo base_url()."fotos_talento_humano/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."talento_humano/detalle_articulo_talento/".$item-> url_amigable_talento; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_talento; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_talento; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>


                                <?php  foreach ($resultados_salud -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                                    <img src="<?php echo base_url()."fotos_salud_bienestar/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."Salud_bienestar/detalle_salud_bienestar/".$item-> url_amigable_salud; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_salud; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_salud; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_seguros -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."seguros/detalle_seguro/".$item-> url_amigable_seguro; ?>">
                                                    <img src="<?php echo base_url()."fotos_seguros/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."seguros/detalle_seguro/".$item-> url_amigable_seguro; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_seguro; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_seguro; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_SST -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>">
                                                    <img src="<?php echo base_url()."fotos_SST/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."SST/detalle_SST/".$item-> url_amigable_SST; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_SST; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_SST; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_legislacion -> result() as $item) { ?>
                                <li>
                                    <div>
                                        <h2><?php echo $item -> titulo_legislacion; ?></h2>
                                        <p><?php echo $item -> descripcion_legislacion; ?></p>
                                    <?php if (!empty($item->ficha_legislacion)): ?>
                                        <a href="<?php echo base_url();?>legislaciones/<?php echo $item->ficha_legislacion; ?>">
                                          <p style="color: red;"> <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-pdf-zum-download-2.png" width="15 "> <?php echo $item -> ficha_legislacion; ?></p>
                                        </a>

                                        <div class="pull-right col-md-12"" style="margin-right: 20px;">

                                            <a href="<?php echo base_url();?>legislacion/legislacioneses/<?php echo $item->ficha_legislacion; ?>" class="btn btn-default" download> <i class="fa fa-download" style="color:#1F4A67" ></i> Descargar </a>
                                        </div> 

                                <?php endif ?>
                                    </div>
                                 </li>    
                                <?php } ?>

                                <?php  foreach ($resultados_infografias -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url();?>Infografias/">
                                                    <img src="<?php echo base_url()."fotos_infografias/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="200">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url();?>Infografias/">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_infografia; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_infografia; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_noticias -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."Noticias/detalle_noticia/".$item-> url_amigable_noticia; ?>">
                                                    <img src="<?php echo base_url()."fotos_noticias/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."Noticias/detalle_noticia/".$item-> url_amigable_noticia; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_noticia; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_noticia; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_sociales -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."Sociales/detalle_social/".$item-> url_amigable_social; ?>">
                                                    <img src="<?php echo base_url()."fotos_sociales/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="200">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."Sociales/detalle_social/".$item-> url_amigable_social; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> titulo_social; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> descripcion_social; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_productos -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item-> url_amigable; ?>">
                                                    <img src="<?php echo base_url()."fotos_productos/".$item -> foto0;?>" alt="<?php echo $item -> foto0; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item-> url_amigable; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> nombre_producto; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> titulo_producto; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <?php  foreach ($resultados_profesionales -> result() as $item) { ?>
                                        <li>
                                            <figure>
                                                <a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item-> id_profesional; ?>">
                                                    <img src="<?php echo base_url()."cv_profesionales/".$item -> foto_profesional;?>" alt="<?php echo $item -> foto_profesional; ?>" width="150">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h2><a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item-> id_profesional; ?>">
                                                    <span style="font-size: 20px"><?php echo $item -> nombre_profesional; ?></span>
                                                    </a></h2>
                                                <p><?php echo $item -> titulo_profesional; ?></p>
                                            </div>
                                        </li>
                                <?php } ?>

                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                </div>

                <div class="span3">
                    <div class="sidebar">
                    	<div class="widget photos-widget gallery">
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Columna Derecha") { ?>
                                    <?php if (($item -> orden_publicitario == 1) || ($item -> orden_publicitario == 2)) { ?>
                                        <div class="widget">
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."images/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>


                        <div class="widget photos-widget gallery">
                            <?php foreach ($publicidad -> result() as $item) { ?>
                                <?php if ($item -> tipo_publicitario == "Columna Derecha") { ?>
                                    <?php if (($item -> orden_publicitario == 3) || ($item -> orden_publicitario == 4)) { ?>
                                        <div class="widget">
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."images/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>">
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>

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
