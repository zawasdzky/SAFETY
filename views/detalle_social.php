    <div class="main-contant">
        <!--CONTAINER START-->
        <div class="container">
            <?php $item = $detalle_social->row(); ?>
            <h2 class="h-style2"><?php echo $item-> titulo_social; ?></h2>
            <!--GALLERY DETAIL START-->
            <section class="">
               <p class="gallery-text"><?php echo $item-> descripcion_social; ?></p>
                <div class="row mb30px">
                    <div class="span9">

                        <?php if (!empty($item->foto1) && !empty($item->foto2)) { $slides ="slides";}else{$slides ="";} ?>
                        <section class="fashion-slider">
                            <div class=" slider flexslider">
                                <ul class="<?php echo $slides; ?>">
                                    <?php foreach ($detalle_social -> result() as $slider) { ?>
                                            <?php if (!empty($item-> foto1)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto1; ?>"  alt="<?php echo $item -> foto1;?>"></li>
                                          <?php } ?>
                                          <?php if (!empty($item-> foto2)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto2; ?>"  alt="<?php echo $item -> foto2;?>"></li>
                                          <?php } ?>
                                          <?php if (!empty($item-> foto3)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto3; ?>"  alt="<?php echo $item -> foto3;?>"></li>
                                          <?php } ?>
                                          <?php if (!empty($item-> foto4)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto4; ?>"  alt="<?php echo $item -> foto4;?>"></li>
                                          <?php } ?>
                                          <?php if (!empty($item-> foto5)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto5; ?>"  alt="<?php echo $item -> foto5;?>"></li>
                                          <?php } ?>
                                          <?php if (!empty($item-> foto6)){ ?>
                                            <li> <img src="<?php echo base_url();?>fotos_sociales/<?php echo $item-> foto6; ?>"  alt="<?php echo $item -> foto6;?>"></li>
                                          <?php } ?>
                                    <?php } ?>
                                 </ul>
                            </div>
                        </section>

                    </div>
                    <div class="span3">
                        <div class="project-detail">
                            <?php foreach ($publicidad -> result() as $pauta) { ?>
                                <?php if ( $pauta -> tipo_publicitario == "Pauta Sociales") { ?>
                                <div class="news-thumb">
                                   <a href="<?php echo $pauta -> enlace_publicitario ?>">
                                    <img src="<?php echo base_url()."fotos_productos/".$pauta->foto_publicitario; ?>" alt="<?php echo $pauta -> nombre_publicitario ?>" >
                                </a>
                                </div>
                                <?php } ?>
                            <?php  } ?>
                        </div>
                    </div>

                </div>
                <p class="gallery-text"><?php echo $item-> contenido_social; ?></p>
            </section>
            <!--GALLERY DETAIL END-->
            <!--RECENT WORK START-->
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
            <!--RECENT WORK END-->
        </div>
        <!--CONTAINER END-->

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
