
    <div class="main-contant">
        <div class="container">
            <h2 class="h-style2">Infografías</h2>
            <div class="gallery-1 gallery">
<!--                 <p class="gallery-text">Duis mollis, est non commodo luctus, <span class="color">nisi erat porttitor ligula, eget lacinia odio sem nec elit.Duis mollis, est non commodo luctus</span>, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p> -->
                <!--GALLERY IMAGES START-->

                <?php foreach ($infografias -> result() as $item) { ?>
                        <article>
                            <figure class="hover-style">
                                <a href="#<?php echo $item -> url_amigable_infografia ;?>" data-toggle="modal">
                                <img src="<?php echo base_url()."fotos_infografias/".$item-> foto0;?>" alt="<?php echo $item -> titulo_infografia ;?>"></a>
                            </figure>
                            <div class="text">
                                <h3><?php echo $item -> titulo_infografia ;?></h3>
                                <h5 class="color"><?php echo $item -> nombre_infografia ;?></h5>
                                <p><?php echo $item -> descripcion_infografia ;?></p>
                                <div class="pull-right">
<!--                                     <a href="#"><i class="fa fa-external-link"></i></a> -->
                                    <a href="#<?php echo $item -> url_amigable_infografia ;?>" data-toggle="modal">Ver Más</a>
                                </div>
                            </div>
                        </article>
                <?php } ?> 
<!-- MODALS -->
                <?php foreach ($infografias -> result() as $item) { ?>
                    <div id="<?php echo $item -> url_amigable_infografia ;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="<?php echo $item -> url_amigable_infografia ;?>" aria-hidden="true" style="left: 35%; width: 1000px; top: 5%;">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="<?php echo $item -> url_amigable_infografia ;?>Label"><?php echo $item -> titulo_infografia ;?></h3>
                      </div>
                      <div class="modal-body">
                        <figure >
                            <img src="<?php echo base_url()."fotos_infografias/".$item-> foto1;?>" alt="<?php echo $item -> titulo_infografia ;?>" style="max-height: : 800px;">
                        </figure>
                      </div>
                      <div class="modal-footer">
                        <div class="text-left">Compártelo con tus colegas</div>
                            <div>
                                <ul class="social-icons2">
                                   <?php $enlace = base_url()."infografias/".$item-> url_amigable_infografia; ?>
                                    <li><a class="facebook" data-original-title="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" data-original-title="twitter" href="https://twitter.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" data-original-title="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="google" data-original-title="youtube" href="https://plus.google.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="github" data-original-title="whatsapp" href="whatsapp://send?text=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        <a href="<?php echo base_url()."fotos_infografias/".$item-> foto1;?>" class="btn btn-info"  download>Descargar</a>
                      </div>
                    </div>
                <?php } ?> 
                <!--GALLERY IMAGES END-->
            </div>
        </div>
    </div>
    <!--FOOTER START-->
    <footer>
        <div class="copy-rights">
            <p>COPYRIGHT © 2018  <a href="safetyworkla.com<" target="_blank">safetyworkla.com</a></p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
</body>
</html>

