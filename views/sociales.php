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
                                        <img src="<?php echo base_url()."fotos_sociales/". $item-> foto1 ?>">
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
            </section>
            <!--GALLERY DETAIL END-->
            <!--RECENT WORK START-->
            <section class="recent-work">
                <h2 class="h-style2">Eventos Recientes</h2>
                <ul class="row">
                <?php foreach ($sociales -> result() as $item) { ?>
                    <li class="span3 hover-style"><a href="#">
                        <a href="<?php echo base_url()."Sociales/detalle_social/".$item-> url_amigable_social; ?>">
                            <img src="<?php echo base_url()."fotos_sociales/". $item-> foto0 ?>">
                        </a>
                    </li>
                <?php } ?>
                </ul>
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
