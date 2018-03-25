    <div class="main-contant">
        <!--CONTAINER START-->
        <div class="container">
            <h2 class="h-style2">Sociales</h2>
            <!--GALLERY DETAIL START-->
            <section class="gallery-detail">
<!--                 <p class="gallery-text">Duis mollis, est non commodo luctus, <span class="color">nisi erat porttitor ligula, eget lacinia odio sem nec elit.Duis mollis, est non commodo luctus</span>, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p> -->
                <div class="row mb30px">
                    <div class="span9">
                        <div class="flexslider">
                              <ul class="slides">
                                <?php foreach ($sociales -> result() as $item) { ?>
                                    <li>
                                        <img src="<?php echo base_url()."fotos_sociales/". $item-> foto1 ?>" width="770px" height="460px">
                                        <div class="caption">
                                            <h2><?php echo $item -> titulo_social ?></h2>
                                            <a href="<?php echo base_url()."Sociales/detalle_social/".$item-> url_amigable_social; ?>" class="anchor">Ver Más</a>
                                        </div>
                                    </li>
                                    <?php } ?>
                              </ul>
                        </div>
                    </div>
                    <div class="span3">
                        <?php foreach ($publicidad -> result() as $pauta) { ?>
                            <?php if ( ($pauta -> tipo_publicitario == "Pauta Superior Derecha Sociales") && ($pauta -> orden_publicitario == 1) ) { ?>
                                <div class="widget-new-ad">
                                        <a href="<?php echo $pauta -> enlace_publicitario ?>" target="_blank">
                                            <img src="<?php echo base_url()."fotos_productos/".$pauta->foto_publicitario; ?>" alt="<?php echo $pauta -> nombre_publicitario ?>">
                                        </a>
                                </div>
                            <?php } ?>
                        <?php  } ?>

                        <?php foreach ($publicidad -> result() as $pauta) { ?>
                            <?php if ( ($pauta -> tipo_publicitario == "Pauta Superior Derecha Sociales") && ($pauta -> orden_publicitario == 2) ) { ?>
                                <div class="widget-new-ad">
                                        <a href="<?php echo $pauta -> enlace_publicitario ?>" target="_blank">
                                            <img src="<?php echo base_url()."fotos_productos/".$pauta->foto_publicitario; ?>" alt="<?php echo $pauta -> nombre_publicitario ?>" >
                                        </a>
                                </div>
                            <?php } ?>
                        <?php  } ?>
                    </div>
                </div>
            </section>
            <!-- PAUTA CENTRAL HORIZONTAL -->
            <section>
                <div>
                    <?php foreach ($publicidad -> result() as $item) { ?>  
                        <?php if ($item -> tipo_publicitario == "Pauta Central Horizontal Sociales") { ?>   
                            <a href="<?php echo $item->enlace_publicitario;?>" target="_blank">
                                <img src="<?php echo base_url();?>fotos_productos/<?php echo $item->foto_publicitario;?>" class="img-responsive" alt="<?php echo $item->titulo_publicitario;?>">
                            </a>  
                        <?php } ?>
                    <?php } ?>
                </div>
            </section>
            <!--FIN PAUTA CENTRAL HORIZONTAL -->        
            <section>
                <div class="image-gallery">
                    <h2 class="h-style">Otros Articulos</h2>
                    <ul class="mycarousel jcarousel-skin-tango gallery">
                        <?php foreach ($sociales-> result() as $item) { ?>
                            <li>
                                 <img src="<?php echo base_url()."fotos_sociales/". $item-> foto0 ?>">
                                <div class="caption" style="">
                                    <a href="<?php echo base_url()."Sociales/detalle_social/".$item-> url_amigable_social; ?>"><i class="fa fa-link"></i></a>
                                    <h4><?php echo $item-> titulo_social; ?></h4>
                                </div>
                            </li>
                        <?php } ?>
                   </ul>
                </div>          
            </section>

        </div>
        <!--CONTAINER END-->

    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>
